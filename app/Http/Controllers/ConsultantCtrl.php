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
        $data = \App\Models\AboutConsultantMd::find(1);
        $consultants = \App\Models\ConsultantMd::all();
        // $client = OurClientMd::all();
        return view($this->config['folder_prefix'] . "/consultant", [
            'about' => $data,
            'consultants' => $consultants

        ]);
    }
    public function detail($url)
    {
        $data = \App\Models\AboutConsultantMd::find(1);
        $consultant = \App\Models\ConsultantMd::where(['url' => $url])->first();
        // $client = OurClientMd::all();
        return view($this->config['folder_prefix'] . "/consultant-detail", [
            'about' => $data,
            'consultant' => $consultant,
            'test' => "testing"

        ]);
    }
}
