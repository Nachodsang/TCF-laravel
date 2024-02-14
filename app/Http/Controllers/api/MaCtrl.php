<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MaCtrl extends Controller
{
    public function getIndustry() {
        try {
            //code...
        } catch (\Exception $e) {
            return response()->json([
                'status' => $e->getCode(),
                'message' => $e->getMessage(),
            ], $e->getCode());
        }
    }

    public function getProduct(int $id) {
        
    }
}
