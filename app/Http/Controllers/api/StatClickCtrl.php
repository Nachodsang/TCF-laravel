<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\VisitorLogMd;
use Illuminate\Http\Request;

class StatClickCtrl extends Controller
{
    //
    public static function GetVisitor()
    {
        try {
            $data = VisitorLogMd::all();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public static function StoreVisitor(Request $request)
    {
        try {
            $data = new VisitorLogMd;
            $data->ip = $request->ip;
            $data->city = $request->city;
            $data->country = $request->country;
            $data->save();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
