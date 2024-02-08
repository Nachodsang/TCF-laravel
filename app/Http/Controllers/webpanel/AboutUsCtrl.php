<?php

namespace App\Http\Controllers\Webpanel;

use App\Http\Controllers\Controller;
use App\Models\AboutUsMd;
use App\Models\OurClientMd;
use App\Models\TaskMd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;


class AboutUsCtrl extends Controller
{
    public function __construct()
    {
        $this->folderPrefix = 'webpanel';
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return view("$this->folderPrefix.aboutus.index", [
                'css' => [
                    'css/skEditor.css'
                ],
                'js' => [
                    'https://cdn.jsdelivr.net/npm/a-color-picker@1.1.8/dist/acolorpicker.js',
                    'js/drag-arrange.js',
                    'js/b64toBlob.js',
                    'js/skEditor.js',
                    'js/admin/about-us.js',
                ],
                'module' => 'aboutus',
                'page' => 'edit',
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
        //
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
    public function update(Request $request)
    {
        $data = AboutUsMd::find(1);
        if (!@$data->id) {
            AboutUsMd::insert(['created_at' => date('Y-m-d H:i:s')]);
        }
        $data = AboutUsMd::find(1);
        $data->description = $request->description;
        $data->detail_first = $request->detail_first;
        $data->detail_secondary = $request->detail_secondary;
        if ($data->save()) {
            return redirect($request->fullUrl())->with([
                'status' => 'success',
                'message' => 'Data has been saved.'
            ]);
        }
        return redirect($request->fullUrl())->with([
            'status' => 'error',
            'message' => 'An error has occurred.'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function ourClient()
    {
        try {
            $client = OurClientMd::all();
            return view('webpanel.aboutus.index', [
                'js' => [
                    'admin/build/client.js'
                ],
                'module' => 'aboutus',
                'page' => 'client',
                'client' => $client
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function storeClient(Request $request)
    {
        try {
            $new = new OurClientMd;
            $log = new TaskMd;
            if ($request->img) {
                # code...
                $image = Image::make($request->img->getRealPath());
                $ext = '.' . explode("/", $image->mime())[1];
                $fileName = 'client_' . date('dmY-His');
                $image->stream();
                $newfile = 'images/client/' . $fileName . $ext;
                Storage::disk(env('disk', 'ftp'))->put($newfile, $image);
                $new->image = $newfile;
            }

            $new->alt = $request->imgalt;
            $new->title = $request->imgtitle;
            if ($new->save()) {
                $log->action = "add-client-$new->id";
                $log->module = "client";
                $log->action_by = Auth::user()->id;
                $log->save();
                $response = [
                    'status' => true,
                    'message' => 'Data been stored.',
                    'id' => $new->id
                ];
            } else {
                $response = [
                    'status' => false,
                    'message' => 'An error has occurred.'
                ];
            }
            return response()->json($response);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    public function updateClient(Request $request, $id = null)
    {
        try {
            $data = OurClientMd::find($id);
            $log = new TaskMd;
            if ($request->img) {
                if ($data->image != '') Storage::disk(env('disk'))->delete($data->image);
                $image = Image::make($request->img->getRealPath());
                $ext = '.' . explode("/", $image->mime())[1];
                $fileName = 'client_' . date('dmY-His');
                $image->stream();
                $newfile = 'images/client/' . $fileName . $ext;
                Storage::disk(env('disk', 'ftp'))->put($newfile, $image);
                $data->image = $newfile;
            }
            $data->alt = $request->imgalt;
            $data->title = $request->imgtitle;
            if ($data->save()) {
                $log->action = "update-client-$data->id";
                $log->module = "client";
                $log->action_by = Auth::user()->id;
                $log->save();
                $response = [
                    'status' => true,
                    'message' => 'Data been stored.',
                    'id' => $data->id
                ];
            } else {
                $response = [
                    'status' => false,
                    'message' => 'An error has occurred.'
                ];
            }
            return response()->json($response);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function deleteClient($id)
    {
        try {
            $get = OurClientMd::find($id);
            $log = new TaskMd;
            Storage::disk(env('disk', 'ftp'))->delete($get->image);
            if ($get->delete()) {
                $log->action = "delete-client-$id";
                $log->module = "banner";
                $log->action_by = Auth::user()->id;
                $log->save();
                $res = [
                    'status' => true,
                    'message' => 'Data has been deleted.'
                ];
            } else {
                $res = [
                    'status' => false,
                    'message' => 'An error occurred.'
                ];
            }
            return response()->json($res);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
