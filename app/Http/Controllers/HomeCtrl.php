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

        try {
            $cover = BannerMd::select(['image', 'title', 'alt', 'url'])->where(['status' => 1])->orderBy('sort')->get();
            $service = ServiceMd::limit(4)->where('status', 1)->orderBy('created_at', 'desc')->get();
            $service_cats = \App\Models\ServiceCatMd::where('service_category.status', 1)->orderBy('sort')->get();
            $client = OurClientMd::all();

            try {
                $blog = Http::get(env('BLOG_API') . 'api/blog/c/all', [
                    'id' => $this->config['customerId'],
                    'type' => ['selfedit', 'customer', 'marketing-blog'],
                    'page' => 1,
                    'perPage' => 4
                ])->object();
            } catch (\Exception $e) {
                $blog = [];
                // return $e->getMessage();
            }

            try {
                $ma = Http::get(env('BLOG_API') . 'api/blog/c', [
                    'id' => $this->config['customerId'],
                    'type' => ['ma'],
                    'page' => 1,
                    'perPage' => 4
                ])->object();
            } catch (\Exception $e) {
                $ma = [];
                // return $e->getMessage();
            }

            $about = \App\Models\AboutUsMd::find(1);
            $about_service = \App\Models\AboutServiceMd::find(1);

            $data = [
                'about' => $about,
                'about_service' => $about_service,
                'folder_prefix' => $this->config['folder_prefix'],
                'cover' => $cover,
                'service' => $service,
                'service_cats' => $service_cats,
                'ourClient' => $client,
                'blog' => $blog,
                'ma' => $ma,
                'detail_first' => \App\Models\HomeMd::where('type', 'first')->first(),
                // 'detail_secondary' => \App\Models\HomeMd::find(2)
            ];
            return view($this->config['folder_prefix'] . "/index", $data);
        } catch (\Exception $e) {
            abort(500);
            // return $e->getMessage();
        }
    }
}
