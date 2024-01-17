<?php

namespace App\Http\Controllers\Webpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\BannerMd;
use App\Models\TaskMd;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class BannerCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        try {
            $data = BannerMd::select('banner.*','users.name')->leftJoin('users','banner.upload_by','users.id')->get();

            return view('webpanel.banner.index', [
                'module' => 'banner',
                'page' => 'page-index',
                'banner' => $data,
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
            $banner = new BannerMd;

            if ($request->imgBanner) {
                $image = Image::make($request->imgBanner->getRealPath());
                $ext = '.' . explode("/", $image->mime())[1];
                $fileName = 'banner_' . date('dmY-His');
                $image->stream();
                $newfile = 'images/banner/' . $fileName . $ext;
                Storage::disk(env('disk'))->put($newfile, $image);
                $banner->image = $newfile;
            }

            $banner->title = $request->imgTitle;
            $banner->alt = $request->imgAlt;
            $banner->url = $request->imgUrl;
            $banner->status = 0;
            $banner->upload_by = Auth::user()->id;

            if ($banner->save()) {
                $log = new TaskMd;
                $log->action = "add-banner-$banner->id";
                $log->module = "banner";
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
            $banner = BannerMd::find($id);

            return view('webpanel.banner.index', [
                'module' => 'banner',
                'page' => 'edit',
                'banner' => $banner
            ]);

        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id=null)
    {
        try {
            $update = BannerMd::find($request->bannerId);
   
            if(@$update->id)
            {
                if ($request->imgBanner) {
                    if($update->image!='') Storage::disk(env('disk'))->delete($update->image);
                    $image = Image::make($request->imgBanner->getRealPath());
                    $ext = '.' . explode("/", $image->mime())[1];
                    $fileName = 'banner_' . date('dmY-His');
                    $image->stream();
                    $newfile = 'images/banner/' . $fileName . $ext;
                    Storage::disk(env('disk'))->put($newfile, $image);
                    $update->image = $newfile;
                }
    
                $update->title = $request->imgTitle;
                $update->alt = $request->imgAlt;
                $update->url = $request->imgUrl;
                $update->modified_by = Auth::user()->id;
    
                if ($update->save()) {
                    $log = new TaskMd;
                    $log->action = "update-banner-$update->id";
                    $log->module = "banner";
                    $log->action_by = Auth::user()->id;
                    $log->save();
                    $res = ["status" => 200];
                } else {
                    $res = ["status" => 500];
                }
            }else{
                $res = ["status" => 500];
            }

            return response()->json($res,200);

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
            $data = BannerMd::find($id);
            $log = new TaskMd;
            Storage::disk(env('disk', 'ftp'))->delete($data->image);
            if ($data->delete()) {
                $log->action = "delete-banner-$id";
                $log->module = "banner";
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

    public function addbanner()
    {
        try {
            return view('webpanel.banner.index', [
                'module' => 'banner',
                'page' => 'add',
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function statusBanner(request $request)
    {
        $banner = BannerMd::find($request->id);
        $log = new TaskMd;
        if ($banner->status == 0) {
            $banner->update(['status' => '1']);
            $log->action = "online-banner-$request->id";
            $log->module = "banner";
            $log->action_by = Auth::user()->id;
            $log->save();
            return response()->json(true);
        } else {
            $banner->update(['status' => '0']);
            $log->action = "offline-banner-$request->id";
            $log->module = "banner";
            $log->action_by = Auth::user()->id;
            $log->save();
            return response()->json(true);
        }
    }
}
