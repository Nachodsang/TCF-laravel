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
        $perPage = 5;
        $page = $request->page ? $request->page : 1;
        $skip = ($page < 2) ? 0 : ($page - 1) * $perPage;

        $service = ServiceMd::where('status', 1);
        $allPage = ceil($service->get()->count() / $perPage);
        $queryString = "?page=$page";

        $data = [
            'folder_prefix' => $this->config['folder_prefix'],
            'service' => $service->skip($skip)->take($perPage)->get(),
            'links' => [
                'allPage' => $allPage,
                'perPage' => $perPage,
                'page' => $page,
                'query_string' => $queryString
            ]
        ];
        return view($this->config['folder_prefix'] . "/service", $data);
    }
    public function detail(string $url)
    {
        $detail = ServiceMd::where(['url' => $url, 'status' => 1])->first();
        $data = [
            'folder_prefix' => $this->config['folder_prefix'],
            'detail' => $detail
        ];
        return view(config('web.folder_prefix') . "/service-detail", $data);
    }

    public function category(string $url)
    {
        $detail = ServiceMd::where(['url' => $url, 'status' => 1])->first();
        $data = [
            'folder_prefix' => $this->config['folder_prefix'],
            'detail' => $detail
        ];
        return view($this->config['folder_prefix'] . "/serviceCat", $data);
    }
}
