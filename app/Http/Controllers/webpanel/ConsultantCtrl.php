<?php

namespace App\Http\Controllers\webpanel;

use App\Http\Controllers\Controller;
use App\Models\AboutServiceMd;
use App\Models\ConsultantMd;
use App\Models\TaskMd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class ConsultantCtrl extends Controller
{
    public function index()
    {
        try {
            $description = AboutServiceMd::find(1);
            $data = ConsultantMd::select([
                'consultant.*',
                'users.name as userUpload'
            ])
                ->leftJoin('users', 'consultant.upload_by', 'users.id')
                ->paginate(10);

            return view('webpanel.consultant.index', [
                'module' => 'consultant',
                'page' => 'page-index',
                'consultant' => $data,
                'description' => @$description->consultant_page_description
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function addConsultant()
    {
        try {
            return view('webpanel.consultant.index', [
                'css' => [
                    'css/skEditor.css'
                ],
                'js' => [
                    'https://cdn.jsdelivr.net/npm/a-color-picker@1.1.8/dist/acolorpicker.js',
                    'js/drag-arrange.js',
                    'js/b64toBlob.js',
                    'js/skEditor.js',
                    'js/admin/consultant.js',
                ],
                'module' => 'consultant',
                'page' => 'add',
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    public function store(Request $request)
    {
        try {
            $consultant = new ConsultantMd;

            if ($request->imgConsultant) {
                $image = Image::make($request->imgConsultant->getRealPath());
                $ext = '.' . explode("/", $image->mime())[1];
                $fileName = 'consultant_cover_' . date('dmY-His');
                $image->stream();
                $newfile = 'images/consultant/' . $fileName . $ext;
                Storage::disk(env('disk', 'public'))->put($newfile, $image);
                $consultant->image = $newfile;
            }

            $consultant->image_title = $request->imgTitle;
            $consultant->image_alt = $request->imgAlt;
            $consultant->url = $request->url;
            $consultant->name = $request->name;
            $consultant->role = $request->role;
            $consultant->description = $request->description;
            $consultant->detail = $request->detail_th;
            $consultant->seo_description = $request->seo_description;
            $consultant->seo_keyword = $request->seo_keyword;

            $consultant->status = 0;
            $consultant->upload_by = Auth::user()->id;

            if ($consultant->save()) {
                $log = new TaskMd;
                $log->action = "add-consultant-$consultant->id";
                $log->module = "consultant";
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

    public function statusConsultant(request $request)
    {
        $consultant = ConsultantMd::find($request->id);
        $log = new TaskMd;
        if ($consultant->status == 0) {
            $consultant->update(['status' => '1']);
            $log->action = "online-consultant-$request->id";
            $log->module = "consultant";
            $log->action_by = Auth::user()->id;
            $log->save();
            return response()->json(true);
        } else {
            $consultant->update(['status' => '0']);
            $log->action = "offline-consultant-$request->id";
            $log->module = "consultant";
            $log->action_by = Auth::user()->id;
            $log->save();
            return response()->json(true);
        }
    }

    public function checkUrl(request $request)
    {
        if ($request->id) {
            $query = ConsultantMd::where('id', '!=', $request->id)->where('url', $request->url)->count();
        } else {
            $query = ConsultantMd::where('url', $request->url)->count();
        }

        $query = ($query == 0) ? true : false;

        return response()->json($query);
    }

    public function show(string $id)
    {
        try {
            $consultant = ConsultantMd::find($id);

            return view('webpanel.consultant.index', [
                'css' => [
                    'css/skEditor.css'
                ],
                'js' => [
                    'https://cdn.jsdelivr.net/npm/a-color-picker@1.1.8/dist/acolorpicker.js',
                    'js/drag-arrange.js',
                    'js/b64toBlob.js',
                    'js/skEditor.js',
                    'js/admin/consultant.js',
                ],
                'module' => 'consultant',
                'page' => 'edit',
                'consultant' => $consultant
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function update(Request $request, string $id)
    {
        try {
            $update = ConsultantMd::find($id);

            if ($request->imgConsultant) {
                if ($update->image != '')
                    Storage::disk(env('disk', 'public'))->delete($update->image);
                $image = Image::make($request->imgConsultant->getRealPath());
                $ext = '.' . explode("/", $image->mime())[1];
                $fileName = 'consultant_cover_' . date('dmY-His');
                $image->stream();
                $newfile = 'images/consultant/' . $fileName . $ext;
                Storage::disk(env('disk', 'public'))->put($newfile, $image);
                $update->image = $newfile;
            }

            $update->image_title = $request->imgTitle;
            $update->image_alt = $request->imgAlt;
            $update->url = $request->url;
            $update->name = $request->name;
            $update->role = $request->role;
            $update->description = $request->description;
            $update->detail = $request->detail_th;
            $update->seo_description = $request->seo_description;
            $update->seo_keyword = $request->seo_keyword;

            $update->modified_by = Auth::user()->id;

            if ($update->save()) {
                $log = new TaskMd;
                $log->action = "update-consultant-$update->id";
                $log->module = "consultant";
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
            $data = ConsultantMd::find($id);
            Storage::disk(env('disk', 'public'))->delete($data->image);
            if ($data->delete()) {
                $log->action = "delete-consultant-$id";
                $log->module = "consultant";
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

    public function description(Request $request)
    {
        try {
            $log = new TaskMd;
            $data = AboutServiceMd::find(1);
            if ($data) {

                @$data->consultant_page_description = $request->description;
                if ($data->save()) {
                    $log->action = "update-consultant-page-description";
                    $log->module = "consultant";
                    $log->action_by = Auth::user()->id;
                    $log->save();
                    return response()->json(
                        [
                            "status" => 200,
                        ],
                        200
                    );
                } else {
                    return response()->json(
                        [
                            "status" => 500,
                        ],
                        500
                    );
                }
            } else {
                $data = new AboutServiceMd;
                @$data->consultant_page_description = $request->description;
                if ($data->save()) {
                    $log->action = "add-new-consultant-page-description";
                    $log->module = "consultant";
                    $log->action_by = Auth::user()->id;
                    $log->save();
                    return response()->json(
                        [
                            "status" => 200,
                        ],
                        200
                    );
                } else {
                    return response()->json(
                        [
                            "status" => 500,
                        ],
                        500
                    );
                }
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
