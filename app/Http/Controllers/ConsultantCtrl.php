<?php

namespace App\Http\Controllers;

use App\Models\OurClientMd;
use Illuminate\Support\Facades\Config;

use Illuminate\Http\Request;

class ConsultantCtrl extends Controller
{
    public function __construct()
    {
        $this->config = Config::get('web');
    }
    public function index()
    {
        $data = \App\Models\AboutUsMd::find(1);
        $client = OurClientMd::all();
        return view($this->config['folder_prefix'] . "/consultant", [
            'row' => $data,
            'ourClient' => $client
        ]);
    }
}
