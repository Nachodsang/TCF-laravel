<?php

namespace App\Http\Controllers\Webpanel;

use App\Http\Controllers\Controller;
use App\Models\AboutServiceMd;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\TaskMd;
use App\Models\HomeMd;
use Intervention\Image\ImageManagerStatic as Image;

class DashboardCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->folderPrefix = 'webpanel';
    }
    public function index()
    {
        try {
            $about_service = AboutServiceMd::find(1);
            return view("$this->folderPrefix.dashboard.index", [
                'css' => [
                    'css/skEditor.css'
                ],
                'js' => [
                    'https://cdn.jsdelivr.net/npm/a-color-picker@1.1.8/dist/acolorpicker.js',
                    'js/drag-arrange.js',
                    'js/b64toBlob.js',
                    'js/skEditor.js',
                    'js/admin/home.js',
                ],
                'module' => 'dashboard',
                'page' => 'home',
                'description' => $about_service->about_service_home,

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
        $type = $request->type;
        if ($type == 'first') {
            $data = HomeMd::find(1);
            if (!@$data->id) {
                HomeMd::insert(['created_at' => date('Y-m-d H:i:s')]);
            }
            $data = HomeMd::find(1);
            $data->detail = $request->detail_first;
            $data->type = $type;
            if ($data->save()) {
                return redirect()->back()->with([
                    'status' => 'success',
                    'message' => 'Data has been saved.'
                ]);
            } else {
                return redirect()->back()->with([
                    'status' => 'error',
                    'message' => 'An error has occurred.'
                ]);
            }
        }
    }

    public function logo(Request $request, $type)
    {
        $res = ["status" => 500];
        $check = HomeMd::where("type", "logo-$type")->first();
        if (@!$check->id)
            HomeMd::insert(['type' => "logo-$type"]);
        $get = HomeMd::where('type', "logo-$type")->first();
        if ($get->id) {
            $image = $request->image;
            if ($image) {
                if ($get->detail != '')
                    Storage::disk(env('disk', 'ftp'))->delete($get->detail);

                $new = Image::make($request->image->getRealPath());
                $ext = '.' . explode("/", $new->mime())[1];
                $fileName = 'logo_' . $type . '_' . date('dmY-His');
                $new->stream();
                $imgPath = 'images/logo/' . $fileName . $ext;
                Storage::disk(env('disk', 'ftp'))->put($imgPath, $new);
                $get->detail = $imgPath;
                if ($get->save()) {
                    $log = new TaskMd;
                    $log->action = "update-logo-$get->id";
                    $log->module = "banner";
                    $log->action_by = Auth::user()->id;
                    $log->save();
                    $res = ["status" => 200];
                } else {
                    $res = ["status" => 500];
                }
            }
        }
        return redirect('webpanel', 301);
    }

    public function color(Request $request)
    {
        $res = ["status" => 500];
        $data = \App\Models\ColorMd::find(1);
        $data->primary = $request->input('--c-primary');
        $data->secondary = $request->input('--c-secondary');
        $data->button_primary = $request->input('--btn-primary');
        $data->button_secondary = $request->input('--btn-secondary');
        if ($data->save()) {
            $res = ['status' => true];
        }
        return response()->json($res);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function userLog(request $request)
    {
        $date = $request->date;
        $date = explode('-', $date);
        $module = $request->module;

        try {
            $log = TaskMd::select('task.*', 'users.name')
                ->leftJoin('users', 'task.action_by', '=', 'users.id')
                ->when($request->module, function ($query) use ($module) {
                    $query->where('task.module', $module);
                })
                ->when($request->date, function ($query) use ($date) {
                    $query->whereDate('task.created_at', '>=', $date[0])
                        ->whereDate('task.created_at', '<=', $date[1]);
                })
                ->orderBy('task.created_at', 'desc') // specify the table name for sorting
                ->paginate(50);
            return view("$this->folderPrefix.dashboard.index", [
                'module' => 'dashboard',
                'page' => 'task',
                'log' => $log
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
