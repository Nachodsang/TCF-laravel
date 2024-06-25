<?php

namespace App\Http\Controllers;

use App\Models\ServiceMd;
use App\Models\SeoMd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class ServiceCtrl extends Controller
{
    public function __construct()
    {
        $this->config = Config::get('web');
    }

    public function index(request $request)
    {

        try {

            $service = ServiceMd::where(['status' => 1])->orderBy('sort')->get();

            $service_cats = \App\Models\ServiceCatMd::orderBy('sort')->get();
            $serviceTag = SeoMd::where('name', 'service')->first();

            $about_service = \App\Models\AboutServiceMd::find(1);

            $data = [
                'folder_prefix' => $this->config['folder_prefix'],


                'services' => $service,
                'service_detail' => @$about_service->service_page_detail,
                'links' => [
                    // 'allPage' => $allPage,
                    // 'perPage' => $perPage,
                    // 'page' => $page,
                    // 'query_string' => $queryString
                ],
                'service_cats' => @$service_cats,
                'seo' => $serviceTag,
            ];
            return view($this->config['folder_prefix'] . "/service", $data);
        } catch (\ErrorException $e) {
            abort('404');
        }
    }



    public function detail(string $url)
    {
        try {

            $detail = ServiceMd::where(['url' => $url, 'status' => 1])->first();
            $service_cats = \App\Models\ServiceCatMd::orderBy('sort')->get();



            $serviceCatId = $detail->cat_id;
            $serviceCat = \App\Models\ServiceCatMd::where(['id' => $serviceCatId])->first();

            if ($detail) {


                $services = \App\Models\ServiceMd::where(['cat_id' => $serviceCatId, 'status' => 1])->get();

                // Extract the IDs of the services into an array
                $serviceIds = $services->pluck('id')->toArray();

                // Find the index of the current service
                $currentIndex = array_search($detail->id, $serviceIds);
                $prevService = null;
                $nextService = null;
                $keywords = array_map('trim', explode(",", $detail->seo_keyword));
                $seo = (object) [
                    'title' => $detail->seo_title,
                    'meta_keyword' => $detail->seo_keyword,
                    'meta_description' => $detail->seo_description
                ];

                if ($currentIndex !== false) {
                    // Find the index of the next service
                    $nextIndex = ($currentIndex + 1) % count($serviceIds);
                    $nextService = $services->firstWhere('id', $serviceIds[$nextIndex]);

                    // Find the index of the previous service
                    $prevIndex = ($currentIndex - 1 + count($serviceIds)) % count($serviceIds);
                    $prevService = $services->firstWhere('id', $serviceIds[$prevIndex]);

                    // Handle special case: If the current service is the first, set the previous service to be the last
                    if ($currentIndex === 0) {
                        $prevService = $services->last();
                    }

                    // Handle special case: If the current service is the last, set the next service to be the first
                    if ($currentIndex === count($serviceIds) - 1) {
                        $nextService = $services->first();
                    }
                }
            }

            $data = [
                'folder_prefix' => $this->config['folder_prefix'],
                'detail' => $detail,
                'prev_service' => $prevService,
                'next_service' => $nextService,
                'service_cats' => $service_cats,
                'keywords' => $keywords,

                'service_cat' => $serviceCat,
                'seo' => $seo,
            ];

            return view(config('web.folder_prefix') . "/service-detail", $data);
        } catch (\ErrorException $e) {
            abort('404');
        }
    }

    // service content in All service Page
    public function about_service(string $url)
    {
        $detail = ServiceMd::where(['url' => $url, 'status' => 1])->first();
        $data = [
            'folder_prefix' => $this->config['folder_prefix'],
            'detail' => $detail
        ];
        return view($this->config['folder_prefix'] . "/serviceCatId", $data);
    }

    public function category(string $url)
    {

        try {

            $service_cat = \App\Models\ServiceCatMd::where(['url' => $url])->first();
            $service_cats = \App\Models\ServiceCatMd::orderBy('sort')->get();
            $services = \App\Models\ServiceMd::where(['cat_id' => $service_cat->id, 'status' => 1])->get();

            $seo = (object) [
                'title' => $service_cat->seo_title,
                'meta_keyword' => $service_cat->seo_keyword,
                'meta_description' => $service_cat->seo_description
            ];
            $data = [
                'folder_prefix' => $this->config['folder_prefix'],
                'service_cat' => $service_cat,
                'services' => $services,
                'service_cats' => $service_cats,
                'seo' => $seo
            ];
            return view($this->config['folder_prefix'] . "/serviceCat", $data);
        } catch (\ErrorException $e) {
            abort('404');
        }
    }
}
