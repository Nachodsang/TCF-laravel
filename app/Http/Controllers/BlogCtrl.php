<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;

class BlogCtrl extends Controller
{
    public function __construct()
    {
        $this->config = Config::get('web');
    }

    public function index(Request $request)
    {
        try {
            $response = Http::get(env('BLOG_API') . 'api/blog/c/all', [
                'id' => $this->config['customerId'],
                'type' => ['selfedit', 'customer', 'marketing-blog'],
                'industry' => $request->industry,
                'product' => $request->product,
                'keyword' => $request->keyword,
                'opportunity' => $request->opportunity,
                'min' => $request->min,
                'max' => $request->max,
                'page' => $request->page ? $request->page : 1,
                'perPage' => 15
            ])
                ->object();

            $with = [
                'folder_prefix' => $this->config['folder_prefix'],
                'blogs' => $response,
            ];
            return view($this->config['folder_prefix'] . "/blog", $with);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
