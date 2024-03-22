<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use App\Models\SeoMd;

class BlogCtrl extends Controller
{
    public function __construct()
    {
        $this->config = Config::get('web');
    }

    public function index(Request $request)
    {
        try {
            try {
                $blogTag = SeoMd::where('name', 'blog')->first();
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
                    'perPage' => 15,

                ])->object();
            } catch (\Exception $e) {
                $response = [];
            }

            $with = [
                'folder_prefix' => $this->config['folder_prefix'],
                'blogs' => $response,
                'seo' => $blogTag

            ];
            return view($this->config['folder_prefix'] . "/blog", $with);
        } catch (\Exception $e) {
            abort(500);
            // return $e->getMessage();
        }
    }
}
