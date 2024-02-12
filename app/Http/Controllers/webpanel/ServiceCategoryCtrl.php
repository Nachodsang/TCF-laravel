<?php

namespace App\Http\Controllers\webpanel;

use App\Http\Controllers\Controller;
use App\Models\ServiceCatMd;
use App\Models\TaskMd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceCategoryCtrl extends Controller
{
    public function index()
    {
        try {
            $data = ServiceCatMd::select('service_category.*', 'users.name as userName')->leftJoin('users', 'service_category.upload_by', 'users.id')->paginate(10);

            return view('webpanel.service-category.index', [
                'css' => [
                    'css/skEditor.css'
                ],
                'js' => [
                    'https://cdn.jsdelivr.net/npm/a-color-picker@1.1.8/dist/acolorpicker.js',
                    'js/drag-arrange.js',
                    'js/b64toBlob.js',
                    'js/skEditor.js',
                    'js/admin/service-description.js',
                ],
                'module' => 'service-category',
                'page' => 'page-index',
                'serviceCat' => $data

            ]);

        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function add()
    {
        try {
            return view('webpanel.service-category.index', [
                'css' => [
                    'css/skEditor.css'
                ],
                'js' => [
                    'https://cdn.jsdelivr.net/npm/a-color-picker@1.1.8/dist/acolorpicker.js',
                    'js/drag-arrange.js',
                    'js/b64toBlob.js',
                    'js/skEditor.js',
                    'js/admin/service-category.js',
                ],
                'module' => 'service-category',
                'page' => 'add',
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function show(string $id)
    {
        try {
            $serviceCat = ServiceCatMd::find($id);

            return view('webpanel.service-category.index', [
                'css' => [
                    'css/skEditor.css'
                ],
                'js' => [
                    'https://cdn.jsdelivr.net/npm/a-color-picker@1.1.8/dist/acolorpicker.js',
                    'js/drag-arrange.js',
                    'js/b64toBlob.js',
                    'js/skEditor.js',
                    'js/admin/service-category.js',
                ],
                'module' => 'service-category',
                'page' => 'edit',
                'serviceCat' => $serviceCat
            ]);

        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function store(Request $request)
    {
        try {
            $serviceCat = new ServiceCatMd;
            $serviceCat->name = $request->name;
            $serviceCat->detail = $request->detail_th;
            $serviceCat->type = $request->type;
            $serviceCat->description = $request->description;
            $serviceCat->icon = $request->icon;
            $serviceCat->url = $request->url;
            $serviceCat->sort = $serviceCat->max('sort') + 1;
            $serviceCat->upload_by = Auth::user()->id;
            if ($serviceCat->save()) {
                $log = new TaskMd();
                $log->action = "add-service-category-$serviceCat->id";
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

    public function update(Request $request, int $id)
    {
        try {
            $serviceCat = ServiceCatMd::find($id);
            $serviceCat->name = $request->name;
            $serviceCat->detail = $request->detail_th;
            $serviceCat->type = $request->type;
            $serviceCat->description = $request->description;
            $serviceCat->icon = $request->icon;
            $serviceCat->url = $request->url;
            $serviceCat->upload_by = Auth::user()->id;
            if ($serviceCat->save()) {
                $log = new TaskMd();
                $log->action = "update-service-category-$serviceCat->id";
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

    public function destroy(string $id)
    {
        try {
            $log = new TaskMd;
            $data = ServiceCatMd::find($id);
            if ($data->delete()) {
                $log->action = "delete-service-category-$id";
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

    public function status(request $request)
    {
        $service = ServiceCatMd::find($request->id);
        $log = new TaskMd;
        if ($service->status == 0) {
            $service->update(['status' => '1']);
            $log->action = "online-service-category-$request->id";
            $log->module = "service";
            $log->action_by = Auth::user()->id;
            $log->save();
            return response()->json(true);
        } else {
            $service->update(['status' => '0']);
            $log->action = "offline-service-category-$request->id";
            $log->module = "service";
            $log->action_by = Auth::user()->id;
            $log->save();
            return response()->json(true);
        }
    }

    public function checkUrl(Request $request)
    {
        if ($request->id) {
            $query = ServiceCatMd::where('id', '!=', $request->id)->where('url', $request->url)->count();
        } else {
            $query = ServiceCatMd::where('url', $request->url)->count();
        }

        $query = ($query == 0) ? true : false;

        return response()->json($query);
    }

    public function storeDescription(Request $request){
        try {
            return redirect($request->fullUrl())->with([
                'status' => 'success',
                'message' => 'Data has been saved.'
            ]);
            // return redirect($request->fullUrl())->with([
            //     'status' => 'error',
            //     'message' => 'An error has occurred.'
            // ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
