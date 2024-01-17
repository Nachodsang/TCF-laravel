<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\MenuResource;
use Illuminate\Support\Facades\DB;

class MenuCtrl extends Controller
{
    public function all(Request $request)
    {
        try{

            $data = \App\Models\Menu::all();
            return new MenuResource($data);
        }
        catch (\Illuminate\Database\QueryException $e) {
            return $e->getMessage();
        } 
        catch (\ErrorException $e) {
            return $e->getMessage();
        }
        
    }

    public function get()
    {
        try{
            $data = \App\Models\Menu::where('status',1)
                ->select(['id','name','rules','url','icon','status','created_at','updated_at'])
                ->get();
            return new MenuResource($data);
        }
        catch (\Illuminate\Database\QueryException $e) {
            return $e->getMessage();
        } 
        catch (\ErrorException $e) {
            return $e->getMessage();
        }
    }
}
