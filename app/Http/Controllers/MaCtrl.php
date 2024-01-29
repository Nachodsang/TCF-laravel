<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;

class MaCtrl extends Controller
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
        $service_cats = \App\Models\ServiceCatMd::orderBy('number')->get();
        $service_cat = \App\Models\ServiceCatMd::where(['id' => 5])->first();
        $ma_industries = \App\Models\MaIndustryMd::orderBy('number')->get();
        $products =
            \App\Models\MaProductMd::orderBy('number')->get();

        $industryParam = request('industry');
        if ($industryParam) {
            $products = \App\Models\MaProductMd::where(['industry_id' => $industryParam])->orderBy('number')->get();
        }

        $with = [
            'folder_prefix' => $this->config['folder_prefix'],
            'blogs' => $response,
            'service_cats' => $service_cats,
            'service_cat' => $service_cat,
            'ma_industries' => $ma_industries,
            'products' => $products,

        ];
        return view($this->config['folder_prefix'] . "/ma", $with);
    }

    // public function filter()
    // {
    //     $industryParam = request('industry');
    //     $products = \App\Models\MaProductMd::where(['industry_id' => $industryParam])->orderBy('number')->get();

    //     $data = [

    //         'products' => $products,
    //     ];
    //     return view($this->config['folder_prefix'] . "/ma", $data);
    // }
}
