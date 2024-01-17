<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;

class UserCtrl extends Controller
{
    public function all(Request $request)
    {
        try{

            $data = \App\Models\User::all();
            return new UserResource($data);
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
            $data = \App\Models\User::where('status',1)->get();
            return new UserResource($data);
        }
        catch (\Illuminate\Database\QueryException $e) {
            return $e->getMessage();
        } 
        catch (\ErrorException $e) {
            return $e->getMessage();
        }
    }
}
