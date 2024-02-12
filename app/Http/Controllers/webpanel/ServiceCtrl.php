<?php

namespace App\Http\Controllers\Webpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\ServiceMd;
use App\Models\TaskMd;

class ServiceCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $data = ServiceMd::select('service.*', 'users.name')->leftJoin('users', 'service.upload_by', 'users.id')->paginate(10);

            return view('webpanel.service.index', [
                'module' => 'service',
                'page' => 'page-index',
                'service' => $data

            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $service = new ServiceMd;

            if ($request->imgService) {
                $image = Image::make($request->imgService->getRealPath());
                $ext = '.' . explode("/", $image->mime())[1];
                $fileName = 'service_cover_' . date('dmY-His');
                $image->stream();
                $newfile = 'images/service/' . $fileName . $ext;
                Storage::disk(env('disk', 'ftp'))->put($newfile, $image);
                $service->image = $newfile;
            }

            $service->image_title = $request->imgTitle;
            $service->image_alt = $request->imgAlt;
            $service->url = $request->url;
            $service->service = $request->service;
            $service->description = $request->description;
            $service->details = $request->detail_th;
            $service->seo_description = $request->seo_description;
            $service->seo_keyword = $request->seo_keyword;

            $service->status = 0;
            $service->upload_by = Auth::user()->id;

            if ($service->save()) {
                $log = new TaskMd;
                $log->action = "add-service-$service->id";
                $log->module = "service";
                $log->action_by = Auth::user()->id;
                $log->save();
                return response()->json([
                    "status" => 200,
                ], 200);
            } else {
                return response()->json([
                    "status" => 500,
                ], 500);
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $service = ServiceMd::find($id);

            return view('webpanel.service.index', [
                'css' => [
                    'css/skEditor.css'
                ],
                'js' => [
                    'https://cdn.jsdelivr.net/npm/a-color-picker@1.1.8/dist/acolorpicker.js',
                    'js/drag-arrange.js',
                    'js/b64toBlob.js',
                    'js/skEditor.js',
                    'js/admin/service.js',
                ],
                'module' => 'service',
                'page' => 'edit',
                'service' => $service
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        try {
            $update = ServiceMd::find($id);

            if ($request->imgService) {
                if ($update->image != '')
                    Storage::disk(env('disk', 'ftp'))->delete($update->image);
                $image = Image::make($request->imgService->getRealPath());
                $ext = '.' . explode("/", $image->mime())[1];
                $fileName = 'banner_' . date('dmY-His');
                $image->stream();
                $newfile = 'images/service/' . $fileName . $ext;
                Storage::disk(env('disk', 'ftp'))->put($newfile, $image);
                $update->image = $newfile;
            }

            $update->image_title = $request->imgTitle;
            $update->image_alt = $request->imgAlt;
            $update->url = $request->url;
            $update->service = $request->service;
            $update->description = $request->description;
            $update->details = $request->detail_th;
            $update->seo_description = $request->seo_description;
            $update->seo_keyword = $request->seo_keyword;

            $update->modified_by = Auth::user()->id;

            if ($update->save()) {
                $log = new TaskMd;
                $log->action = "update-service-$update->id";
                $log->module = "service";
                $log->action_by = Auth::user()->id;
                $log->save();
                return response()->json([
                    "status" => 200,
                ], 200);
            } else {
                return response()->json([
                    "status" => 500,
                ], 500);
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $log = new TaskMd;
            $data = ServiceMd::find($id);
            Storage::disk(env('disk', 'ftp'))->delete($data->image);
            if ($data->delete()) {
                $log->action = "delete-service-$id";
                $log->module = "service";
                $log->action_by = Auth::user()->id;
                $log->save();
                return response()->json([
                    "status" => 200,
                ], 200);
            } else {
                return response()->json([
                    "status" => 500,
                ], 500);
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function addService()
    {
        try {
            return view('webpanel.service.index', [
                'css' => [
                    'css/skEditor.css'
                ],
                'js' => [
                    'https://cdn.jsdelivr.net/npm/a-color-picker@1.1.8/dist/acolorpicker.js',
                    'js/drag-arrange.js',
                    'js/b64toBlob.js',
                    'js/skEditor.js',
                    'js/admin/service.js',
                ],
                'module' => 'service',
                'page' => 'add',
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function statusService(request $request)
    {
        $service = ServiceMd::find($request->id);
        $log = new TaskMd;
        if ($service->status == 0) {
            $service->update(['status' => '1']);
            $log->action = "online-service-$request->id";
            $log->module = "service";
            $log->action_by = Auth::user()->id;
            $log->save();
            return response()->json(true);
        } else {
            $service->update(['status' => '0']);
            $log->action = "offline-service-$request->id";
            $log->module = "service";
            $log->action_by = Auth::user()->id;
            $log->save();
            return response()->json(true);
        }
    }

    public function checkUrl(request $request)
    {
        if ($request->id) {
            $query = ServiceMd::where('id', '!=', $request->id)->where('url', $request->url)->count();
        } else {
            $query = ServiceMd::where('url', $request->url)->count();
        }

        $query = ($query == 0) ? true : false;

        return response()->json($query);
    }
}
