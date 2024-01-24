<?php

namespace App\Http\Controllers;

use App\Models\OurClientMd;
use Illuminate\Support\Facades\Config;

use Illuminate\Http\Request;

class ConsultantCtrl extends Controller
{
    public function __construct()
    {
        $this->config = Config::get('web');
    }
    public function index()
    {
        $service_cats = \App\Models\ServiceCatMd::orderBy('number')->get();
        $data = \App\Models\AboutConsultantMd::find(1);
        $consultants = \App\Models\ConsultantMd::orderBy('number')->get();
        // $client = OurClientMd::all();
        return view($this->config['folder_prefix'] . "/consultant", [
            'about' => $data,
            'consultants' => $consultants,
            'service_cats' => $service_cats,

        ]);
    }
    public function detail($url)
    {
        $service_cats = \App\Models\ServiceCatMd::orderBy('number')->get();
        $data = \App\Models\AboutConsultantMd::find(1);
        $consultant = \App\Models\ConsultantMd::where(['url' => $url])->first();
        // $client = OurClientMd::all();
        return view($this->config['folder_prefix'] . "/consultant-detail", [
            'about' => $data,
            'consultant' => $consultant,
            'test' => "testing",
            'service_cats' => $service_cats,

        ]);
    }


    // public function shareFb($url)
    // {
    //     $fbShareUrl = 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode($url);
    //     return redirect()->away($fbShareUrl);
    // }
}
