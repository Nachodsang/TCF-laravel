<?php

namespace App\Http\Controllers\webpanel;

use App\Http\Controllers\Controller;
use App\Models\SeoMd;
use Illuminate\Http\Request;

class SeoCtrl extends Controller
{
    public function index()
    {
        try {
            $homeTag = SeoMd::where('name', 'home')->first();
            $aboutTag = SeoMd::where('name', 'about')->first();
            $serviceCatTag = SeoMd::where('name', 'serviceCat')->first();
            $serviceTag = SeoMd::where('name', 'service')->first();
            $maTag = SeoMd::where('name', 'ma')->first();
            $blogTag = SeoMd::where('name', 'blog')->first();
            $consultantTag = SeoMd::where('name', 'consultant')->first();
            $contactTag = SeoMd::where('name', 'contact')->first();

            return view('webpanel.seo.index', [
                'homeTag' => $homeTag,
                'aboutTag' => $aboutTag,
                'serviceCatTag' => $serviceCatTag,
                'serviceTag' => $serviceTag,
                'maTag' => $maTag,
                'blogTag' => $blogTag,
                'consultantTag' => $consultantTag,
                'contactTag' => $contactTag,
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }


    public function edit(Request $request)
    {


        try {
            $seoData = SeoMd::where('name', $request->page)->first();

            if ($seoData) {
                $seoData->title = $request->title;
                $seoData->meta_description = $request->description;
                $seoData->meta_keyword = $request->keyword;
                $seoData->save();
            } else {
                $newData = new SeoMd;
                $newData->name = $request->page;
                $newData->title = $request->title;
                $newData->meta_description = $request->description;
                $newData->meta_keyword = $request->keyword;
                $newData->save();
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
