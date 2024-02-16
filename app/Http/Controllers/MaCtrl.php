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




    public function mockData()
    {
        $data = array(
            (object) [
                'id' => 1,
                'image' => 'images/robotic-hand.jpg',
                'title' => 'TechInnovate Invites Strategic Acquisition Partners',
                'type' => 'ma',
                'opportunity' => '2',
                'income' => 1000000,
                'products' => array('40', '41', '42'),
                'date' => '2022-02-15',
                'industry' => '5',
                'url' => 'https://at-once.info/th/blog/sixth-party-logistics'
            ],
            (object)[
                'id' => 2,
                'image' => 'images/car-assembly1.jpg',
                'title' => 'Anonymous Company Seeks Merger for Automotive Innovation',
                'type' =>
                'ma',
                'opportunity' => '2',
                'income' => 150000000,
                'products' => array('133'),
                'date' => '2022-02-16',
                'industry' => '16',
                'url' => 'https://at-once.info/th/blog/sixth-party-logistics'
            ],
            (object)[
                'id' => 2,
                'image' => 'images/retail1.jpg',
                'title' => 'Anonymous Company Invites Merger Discussions in Retail Innovation',
                'type' =>
                'ma',
                'opportunity' => '1',
                'income' => 20000000,
                'products' => array('29', '33'),
                'date' => '2022-02-16',
                'industry' => '4',
                'url' => 'https://at-once.info/th/blog/sixth-party-logistics'
            ],
            (object)[
                'id' => 2,
                'image' => 'images/doctor1.jpg',
                'title' => 'Anonymous Company Open to Strategic Merger Opportunities',
                'type' =>
                'ma',
                'opportunity' => '1',
                'income' => 1500000000,
                'products' => array('23', '24'),
                'date' => '2022-02-16',
                'industry' => '3',
                'url' => 'https://at-once.info/th/blog/sixth-party-logistics'
            ],
            (object)[
                'id' => 2,
                'image' => 'images/clean-en.jpg',
                'title' => 'Anonymous Company Explores M&A for Renewable Energy Solutions',
                'type' =>
                'ma',
                'opportunity' => '1',
                'income' => 380000000,
                'products' => array('166', '167'),
                'date' => '2022-02-16',
                'industry' => '20',
                'url' => 'https://at-once.info/th/blog/sixth-party-logistics'
            ],
            (object)[
                'id' => 2,
                'image' => 'images/coins.jpg',
                'title' => 'Anonymous Company Paves the Way for M&A in Financial Services',
                'type' =>
                'ma',
                'opportunity' => '2',
                'income' => 80000000,
                'products' => array('111', '115', '116'),
                'date' => '2022-02-16',
                'industry' => '14',
                'url' => 'https://at-once.info/th/blog/sixth-party-logistics'
            ],
            // Add more entries as needed
        );

        return $data;
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
        $service_cats = ServiceCatMd::orderBy('sort')->get();
        $service_cat = ServiceCatMd::where(['id' => 5])->first();
        $ma_industries = MaIndustryMd::where(['status' => true])->orderBy('sort')->get();
        $products =
            MaProductMd::orderBy('sort')->get();

        $industryParam = request('industry');
        if ($industryParam) {
            $products = MaProductMd::where(['industry_id' => $industryParam])->orderBy('sort')->get();
        }



        $with = [
            // 'folder_prefix' => $this->config['folder_prefix'],
            // 'blogs' => $response,
            'service_cats' => $service_cats,
            'service_cat' => $service_cat,
            'ma_industries' => $ma_industries,
            'products' => [],
            'ma_blogs' => $this->mockData(),

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


        // if (!$industryId) {
        //     return response()->json(['error' => 'Industry ID is missing.'], 400);
        // }


        return  $products;
    }


    // made up data
    public function filter(Request $request)
    {

        // made up data
        $data = $this->mockData();
        $filteredData = [];

        $industryQ = $request->input('industry');
        $opportunityQ = $request->input('opportunity');
        $productsQ = $request->input('products');
        $minQ = $request->input('min');
        $maxQ = $request->input('max');
        // $searchQ = $request->input('search');
        $searchQ = $request->input('search');
        $searchQEsc = preg_quote($searchQ);
        $keyword = "/$searchQEsc/i";


        $filteredData = array_filter((array)$data, function ($item) use ($industryQ, $keyword, $searchQ, $minQ, $maxQ, $productsQ, $opportunityQ) {
            $industryMatch = true;
            $searchMatch = true;
            $productsMatch = true;
            $opportunityMatch = true;
            $minMatch = true;
            $maxMatch = true;


            // Filter by industry
            if (
                $industryQ && $industryQ != 0
            ) {
                $industryMatch = $item->industry == $industryQ;
            }

            // Filter by search query
            if ($searchQ) {
                $searchMatch = preg_match($keyword, $item->title);
            }

            if ($opportunityQ && $opportunityQ != 0) {
                $opportunityMatch = $item->opportunity == $opportunityQ;
            }

            if ($productsQ) {
                $productsMatch = array_intersect($productsQ, $item->products);
            }
            if ($minQ) {
                $minMatch = $item->income >= $minQ;
            }

            if ($maxQ) {
                $maxMatch = $item->income <= $maxQ;
            }


            // Return true if both conditions are met
            return $industryMatch && $searchMatch && $opportunityMatch && $minMatch && $maxMatch && $productsMatch;
        });
        // return $productsQ;
        return $filteredData;
    }
}
