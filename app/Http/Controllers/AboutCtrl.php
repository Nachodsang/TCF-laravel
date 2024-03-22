<?php

namespace App\Http\Controllers;

use App\Models\AboutUsMd;
use App\Models\OurClientMd;
use Illuminate\Support\Facades\Config;
use App\Models\SeoMd;
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
            $aboutTag = SeoMd::where('name', 'about')->first();
            $data = AboutUsMd::find(1);
            $client = OurClientMd::all();
            return view($this->config['folder_prefix'] . "/about", [
                'row' => $data,
                'ourClient' => $client,
                'seo' => $aboutTag
            ]);
        } catch (\Exception $e) {
            abort(500);
            // return $e->getMessage();
        }
    }
}
