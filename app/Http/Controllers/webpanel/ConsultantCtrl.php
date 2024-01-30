<?php

namespace App\Http\Controllers\webpanel;

use App\Http\Controllers\Controller;
use App\Models\ConsultantMd;
use Illuminate\Http\Request;

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
}
