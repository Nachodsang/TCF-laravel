<?php

namespace App\Http\Controllers\Webpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class MediaCtrl extends Controller
{
    public function profileImages()
    {
        $path = "images/upload";
        $filenameArray = [];

        $handle = Storage::disk(env('disk', 'public'))->allFiles($path);
        foreach ($handle as $file) {
            if ($file !== '.' && $file !== '..') {
                array_push($filenameArray, $file);
            }
        }

        return response()->json($filenameArray);
    }

    public function uploadImage(Request $request)
    {
        $_id = $request->_id;
        $filename = 'image_' . date('dmY-His') . $this->milliseconds();
        $glImage = $request->image;
        if ($glImage) {

            $image = Image::make($glImage->getRealPath());
            $image_xs = Image::make($glImage->getRealPath());
            $ext = '.' . explode("/", $image->mime())[1];
            $newfile = 'images/upload/'. $filename . $ext;

            // $height = $image->height();
            // $width = $image->width();
            // $mime = $image->mime();
            // $size = $image->filesize();
            $image->stream();
            $image_xs->fit(200, 200, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize('center');
            })->stream();

            $put = Storage::disk(env('disk', 'public'))->put($newfile, $image);
            $size = Storage::disk(env('disk', 'public'))->size($newfile);

            if ($put) {
                return response()->json([
                    'status' => 'success',
                    'image' => [
                        'name' => $newfile,
                    ]
                ]);
            } else {
                return response()->json(['status' => 'error']);
            }
        }
    }
    public function deleteImage(Request $request)
    {
        $delete = Storage::disk(env('disk', 'public'))->delete($request->u);
        Storage::disk(env('disk', 'public'))->delete(str_replace('.', '-xs.', $request->u));
        return response()->json($delete);
    }


    public function milliseconds()
    {
        $mt = explode(' ', microtime());
        return ((int)$mt[1]) * 1000 + ((int)round($mt[0] * 1000));
    }
}
