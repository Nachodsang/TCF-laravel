<?php

namespace App\Http\Controllers\webpanel;

use App\Http\Controllers\Controller;
use App\Models\MaIndustryMd;
use App\Models\MaProductMd;
use Illuminate\Http\Request;

class maCtrl extends Controller
{
    public function index(){
        try {
            $maIndustry = MaIndustryMd::orderBy('sort', 'asc')->paginate(15);

            return view("webpanel.ma.index",[
                'page' => 'page-index',
                'module' => 'ma',
                'industry' => $maIndustry
            ]);

        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function add(){
        try {
            $industry = MaIndustryMd::all();
            return view('webpanel.ma.index', [
                'module' => 'ma',
                'page' => 'add',
                'industry' => $industry
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function show(int $id){
        $data = MaIndustryMd::find($id);
        try {
            return view('webpanel.ma.index', [
                'module' => 'ma',
                'page' => 'edit',
                'type' => 'industry',
                'data' => $data
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function showProduct(int $id){
        $data = MaProductMd::find($id);
        try {
            return view('webpanel.ma.index', [
                'module' => 'ma',
                'page' => 'edit',
                'type' => 'product',
                'data' => $data
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function store(Request $request) {
        try {
            if ($request->type == 'industry') {
                foreach ($request->name as $key => $name) {
                    $industry = new MaIndustryMd;
                    $industry->name = $name;
                    $industry->icon = $request->icon[$key];
                    $industry->sort = $industry->max('sort') + 1;
                    $industry->save();
                }
            } else {
                foreach ($request->name as $key => $name) {
                    $product = new MaProductMd;
                    $product->industry_id = $request->industry;
                    $product->name = $name;
                    $product->sort = $product->where(['industry_id' => $request->industry])->max('sort') + 1;
                    $product->save();
                }
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
