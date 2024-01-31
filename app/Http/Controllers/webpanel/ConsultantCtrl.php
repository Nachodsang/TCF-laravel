<?php

namespace App\Http\Controllers\webpanel;

use App\Http\Controllers\Controller;
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
            $data = ConsultantMd::select([
                'consultant.*', 
                'users.name as userUpload'
            ])
            ->leftJoin('users', 'consultant.upload_by', 'users.id')
            ->paginate(10);

            return view('webpanel.consultant.index', [
                'module' => 'consultant',
                'page' => 'page-index',
                'consultant' => $data
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
                Storage::disk(env('disk', 'ftp'))->put($newfile, $image);
                $consultant->image = $newfile;
            }

            $consultant->image_title = $request->imgTitle;
            $consultant->image_alt = $request->imgAlt;
            $consultant->url = $request->url;
            $consultant->name = $request->name;
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
}
