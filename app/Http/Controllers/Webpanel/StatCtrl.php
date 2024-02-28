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

class StatCtrl extends Controller
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

            return view('webpanel.stat.index', [
                'module' => 'stat',
                'page' => 'page-index',
                'consultant' => $data,
                'description' => @$description->consultant_page_description
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
