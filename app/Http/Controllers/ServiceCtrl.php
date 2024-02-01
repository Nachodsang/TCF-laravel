<?php

namespace App\Http\Controllers;

use App\Models\ServiceMd;
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





        $service = ServiceMd::where(['status' => 1])->get();
        // number = order of service category
        $servicesArray = $service->sortBy('id');
        $service_cats = \App\Models\ServiceCatMd::orderBy('sort')->get();


        $about_service = \App\Models\AboutServiceMd::find(1);

        $data = [
            'folder_prefix' => $this->config['folder_prefix'],
            'check_type' => gettype($servicesArray),

            'services' => $servicesArray,
            'service_detail' => $about_service->service_page_detail,
            'links' => [
                // 'allPage' => $allPage,
                // 'perPage' => $perPage,
                // 'page' => $page,
                // 'query_string' => $queryString
            ],
            'service_cats' => $service_cats,
        ];
        return view($this->config['folder_prefix'] . "/service", $data);
    }



    public function detail(string $url)
    {
        $detail = ServiceMd::where(['url' => $url, 'status' => 1])->first();
        $service_cats = \App\Models\ServiceCatMd::orderBy('sort')->get();

        if ($detail) {
            $serviceCat = $detail->cat_id;

            $services = \App\Models\ServiceMd::where(['cat_id' => $serviceCat, 'status' => 1])->get();

            // Extract the IDs of the services into an array
            $serviceIds = $services->pluck('id')->toArray();

            // Find the index of the current service
            $currentIndex = array_search($detail->id, $serviceIds);
            $prevService = null;
            $nextService = null;
            $keywords = array_map('trim', explode(",", $detail->seo_keyword));

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
            'keywords' => $keywords
        ];

        return view(config('web.folder_prefix') . "/service-detail", $data);
    }

    // service content in All service Page
    public function about_service(string $url)
    {
        $detail = ServiceMd::where(['url' => $url, 'status' => 1])->first();
        $data = [
            'folder_prefix' => $this->config['folder_prefix'],
            'detail' => $detail
        ];
        return view($this->config['folder_prefix'] . "/serviceCat", $data);
    }

    public function category(string $url)
    {
        $service_cat = \App\Models\ServiceCatMd::where(['url' => $url])->first();
        $service_cats = \App\Models\ServiceCatMd::orderBy('sort')->get();
        $services = \App\Models\ServiceMd::where(['cat_id' => $service_cat->id, 'status' => 1])->get();
        $data = [
            'folder_prefix' => $this->config['folder_prefix'],
            'service_cat' => $service_cat,
            'services' => $services,
            'service_cats' => $service_cats,
        ];
        return view($this->config['folder_prefix'] . "/serviceCat", $data);
    }
}
