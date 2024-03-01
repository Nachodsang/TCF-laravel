<?php

namespace App\Http\Controllers;

use App\Models\AboutUsMd;
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
        try {
            $data = AboutUsMd::find(1);
            $client = OurClientMd::all();
            return view($this->config['folder_prefix'] . "/about", [
                'row' => $data,
                'ourClient' => $client,
            ]);
        } catch (\Exception $e) {
            abort(500);
            // return $e->getMessage();
        }
    }
}
