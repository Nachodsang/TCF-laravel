<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use App\Http\Resources\BannerResource;

class BannerCtrl extends Controller
{

    public function index(Request $request)
    {
        try{

            $by = $request->by ? $request->by : 'created_at';
            $sort = $request->sort ? $request->sort : 'desc';
            $perPage = $request->perPage ? $request->perPage : 24;
            $page = $request->page ? $request->page : 1;
            $skip = ($page < 2) ? 0 : ($page - 1) * $perPage;

            $query = \App\Models\BannerMd::where('status',1)
                ->where(function ($query) use ($request, $by, $sort) {
                    if ($request->by) $query->orderBy("$by", $sort);
                    else $query->orderBy("created_at", 'desc');
                })
                ->select([
                    'id','image','alt','title','status','upload_by','created_at'
                ]);
            
            $allPage = ceil($query->get()->count() / $perPage);

            $queryString = "?by=$by&sort=$sort&page=$page";

            $response = [
                'data' => $query->skip($skip)->take($perPage)->get(),
                'links' => [
                    'allPage' => $allPage,
                    'perPage' => $perPage,
                    'by' => $by,
                    'sort' => $sort,
                    'page' => $page,
                    'query_string' => $queryString
                ]
            ];
            return new BannerResource($response);

        } catch (\Illuminate\Database\QueryException $e) {
            dd($e->getMessage());
        } catch (\ErrorException $e) {
            dd($e->getMessage());
        }
    }

    public function store(Request $request)
    {
        try{
            
            $new  = new \App\Models\BannerMd; 
            $newfile = 'image/upload/banner/';
            $new->image = $newfile;
            $new->title = $request->title;
            $new->alt = $request->alt;
            $new->url = $request->url;
            $new->upload_by = Auth::user()->name;
            $new->status = 0;
            if($new->save()){
                $data = [
                    'statusCode' => 200,
                    'status' => 'success',
                    'message' => 'Data has been stored!'
                ];
            }else{
                $data = [
                    'statusCode' => 200,
                    'status' => 'error',
                    'message' => 'An error has occurred!'
                ];
            }
            return response()->json($data);

        } catch (\Illuminate\Database\QueryException $e) {
            dd($e->getMessage());
        } catch (\ErrorException $e) {
            dd($e->getMessage());
        }
    }

    public function show(string $id)
    {
        try{

            $data = \App\Models\BannerMd::find($id);
            return response()->json($data);

        } catch (\Illuminate\Database\QueryException $e) {
            dd($e->getMessage());
        } catch (\ErrorException $e) {
            dd($e->getMessage());
        }
    }

    public function update(Request $request, string $id)
    {
        try{
            $response = [
                'statusCode' => 200,
                'status' => 'error',
                'message' => 'An error has occurred!'
            ];

            $get  = \App\Models\BannerMd::find($id); 
            if ($get) {
                $newfile = 'image/upload/banner.jpg';
                $get->image = $newfile;
                $get->title = $request->title;
                $get->alt = $request->alt;
                $get->url = $request->url;
                $get->upload_by = Auth::user()->name;
                if($get->save()){
                    $response = [
                        'statusCode' => 200,
                        'status' => 'success',
                        'message' => 'Data has been updated!'
                    ];
                }
            }
            return response()->json($response);
        } 
        catch (\Illuminate\Database\QueryException $e) {
            return response()->json($e->getMessage());
        } 
        catch (\ErrorException $e) {
            return response()->json($e->getMessage());
        }
    }


    public function destroy(string $id)
    {
        $delete = \App\Models\BannerMd::where('id',$id)->delete();
        if($delete){
            $data = [
                'statusCode' => 200,
                'status' => 'success',
                'message' => 'Data has been moved to Trash.'
            ];
        }else{
            $data = [
                'statusCode' => 200,
                'status' => '',
                'message' => 'An error has occurred!'
            ];
        }
        return response()->json($data);
    }

    public function forceDelete()
    {

    }
}
