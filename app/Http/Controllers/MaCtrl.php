<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use App\Models\MaIndustryMd;
use App\Models\MaProductMd;
use App\Models\ServiceCatMd;

class MaCtrl extends Controller
{
    public function __construct()
    {
        $this->config = Config::get('web');
    }

    public function index(Request $request)
    {
        try {
            $response = Http::get('http://127.0.0.1:8888/api/blog/c', [
                'id' => $this->config['customerId'],
                'type' => ['ma'],
                'industry' => $request->industry,
                'product' => $request->product,
                'keyword' => $request->keyword,
                'opportunity' => $request->opportunity,
                'min' => $request->min,
                'max' => $request->max,
                'page' => $request->page ? $request->page : 1,
                'perPage' => 6
            ])->object();
        } catch (\Throwable $th) {
            $response = [];
        }

        $service_cat = ServiceCatMd::where(['id' => 5])->first();
        $ma_industries = MaIndustryMd::where(['status' => true])->orderBy('sort')->get();

        $with = [
            'service_cat' => $service_cat,
            'ma_industries' => $ma_industries,
            'products' => [],
            'ma_blogs' => $response,
        ];
        return view($this->config['folder_prefix'] . "/ma", $with);
    }

    public function product($id)
    {
        $products = [];
        $industryId = $id;
        if ($id == 0) {
            $products = MaProductMd::join('ma_industry', 'ma_product.industry_id', '=', 'ma_industry.id')
                ->orderBy('ma_industry.sort')
                ->orderBy('ma_product.sort')
                ->get(['ma_product.*', 'ma_industry.sort as industry_number'])
                ->toArray();
        } else {
            $products = MaProductMd::where('industry_id', $industryId)->orderBy('sort')->get()->toArray();
        }
        return $products;
    }
}
