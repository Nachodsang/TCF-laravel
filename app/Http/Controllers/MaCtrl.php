<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use App\Models\Models\MaIndustryMd;
use App\Models\MaProductMd;

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

        // $response = Http::get('https://at-once.info/api/blog/company', [
        //     'id' => $this->config['customerId'],
        //     'page' => $request->page ? $request->page : 1,
        //     'perPage' => 15
        // ])->object();
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
            // 'folder_prefix' => $this->config['folder_prefix'],
            // 'blogs' => $response,
            'service_cats' => $service_cats,
            'service_cat' => $service_cat,
            'ma_industries' => $ma_industries,
            'products' => [],

        ];
        return view($this->config['folder_prefix'] . "/ma", $with);
    }


    public function product($id)
    {
        $products = [];
        $industryId = $id;
        if ($id == 0) {
            $products = MaProductMd::join('ma_industry', 'ma_product.industry_id', '=', 'ma_industry.id')
                ->orderBy('ma_industry.number')
                ->orderBy('ma_product.number')
                ->get(['ma_product.*', 'ma_industry.number as industry_number'])
                ->toArray();
        } else {
            $products = MaProductMd::where('industry_id', $industryId)->orderBy('number')->get()->toArray();
        }


        // if (!$industryId) {
        //     return response()->json(['error' => 'Industry ID is missing.'], 400);
        // }


        return  $products;
    }
}
