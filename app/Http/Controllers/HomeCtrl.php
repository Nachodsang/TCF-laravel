<?php

namespace App\Http\Controllers;

use App\Models\BannerMd;
use App\Models\OurClientMd;
use App\Models\ServiceMd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;

class HomeCtrl extends Controller
{
    public function __construct()
    {
        $this->config = Config::get('web');
    }

    public function index()
    {
        $cover = BannerMd::select(['image', 'title', 'alt', 'url'])->where(['status' => 1])->get();
        $service = ServiceMd::limit(4)->where('status', 1)->orderBy('created_at', 'desc')->get();
        $client = OurClientMd::all();
        $blog = Http::get('https://at-once.info/api/blog/company', [
            'id' => $this->config['customerId'],
            'page' => 1,
            'perPage' => 3
        ])->object();
        $about = \App\Models\AboutUsMd::find(1);

        $data = [
            'about' => $about,
            'folder_prefix' => $this->config['folder_prefix'],
            'cover' => $cover,
            'service' => $service,
            'ourClient' => $client,
            'blog' => $blog,
            'detail_first' => \App\Models\HomeMd::find(1),
            'detail_secondary' => \App\Models\HomeMd::find(2)
        ];
        return view($this->config['folder_prefix'] . "/index", $data);
    }
}
