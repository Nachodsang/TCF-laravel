<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\MaIndustryMd;
use App\Models\MaProductMd;
use Illuminate\Http\Request;

class MaCtrl extends Controller
{
    public function getIndustry()
    {
        try {
            $data = MaIndustryMd::all();
            return $data;
        } catch (\Exception $e) {
            return response()->json([
                'status' => $e->getCode(),
                'message' => $e->getMessage(),
            ], $e->getCode());
        }
    }

    public function getProduct($id = NULL)
    {
        try {
            $data = MaProductMd::where('industry_id', $id)->get();
            return $data;
        } catch (\Exception $e) {
            return response()->json([
                'status' => $e->getCode(),
                'message' => $e->getMessage(),
            ]);
        }
    }
}
