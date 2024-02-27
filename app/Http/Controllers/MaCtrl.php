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
        $service_cat = ServiceCatMd::where(['id' => 5])->first();
        $ma_industries = MaIndustryMd::where(['status' => true])->orderBy('sort')->get();
        $all_ma_industries = MaIndustryMd::get();

        $with = [
            'service_cat' => $service_cat,
            'ma_industries' => $ma_industries,
            'all_ma_industries' => $all_ma_industries,
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
                ->orderBy('ma_industry.sort')
                ->orderBy('ma_product.sort')
                // ->orderBy('ma_product.name')
                ->get(['ma_product.*', 'ma_industry.sort as industry_number'])
                ->toArray();
        } else {
            $products = MaProductMd::where('industry_id', $industryId)->orderBy('sort')->get()->toArray();
        }
        return $products;
    }
}
