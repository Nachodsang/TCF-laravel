<?php

namespace App\Http\Controllers\Webpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MenuCtrl extends Controller
{
    public function __construct()
    {
        $this->folderPrefix = 'webpanel';
    }
    public function index(Request $request)
    {
        return view("$this->folderPrefix.menu.index",[
            'page' => 'all',
            'module' => 'menu'
        ]);
    }
}
