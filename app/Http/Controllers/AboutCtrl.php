<?php

namespace App\Http\Controllers;

use App\Models\OurClientMd;
use Illuminate\Support\Facades\Config;

use Illuminate\Http\Request;

class AboutCtrl extends Controller
{
    public function __construct()
    {
        $this->config = Config::get('web');
    }
    public function index()
    {
        $data = \App\Models\AboutUsMd::find(1);
        $client = OurClientMd::all();
        $service_cats = \App\Models\ServiceCatMd::orderBy('number')->get();
        return view($this->config['folder_prefix'] . "/about", [
            'row' => $data,
            'ourClient' => $client,
            'service_cats' => $service_cats,
        ]);
    }
}
