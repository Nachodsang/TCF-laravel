<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;

class ServiceCatCtrl extends Controller
{
    public function __construct()
    {
        $this->config = Config::get('web');
    }

    public function index(Request $request)
    {
        // https://at-once.info/api/blog/c - company only
        // https://at-once.info/api/blog/company - all blog

        $response = Http::get('https://at-once.info/api/blog/company', [
            'id' => $this->config['customerId'],
            'page' => $request->page ? $request->page : 1,
            'perPage' => 15
        ])->object();

        $with = [
            'folder_prefix' => $this->config['folder_prefix'],
            'blogs' => $response
        ];
        return view($this->config['folder_prefix'] . "/serviceCat", $with);
    }
}
