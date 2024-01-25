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
        $consultants = \App\Models\ConsultantMd::orderBy('number')->get();

        $currentIndex = $consultants->search(function ($item) use ($consultant) {
            return $item->id === $consultant->id;
        });

        $prevConsultant = null;
        $nextConsultant = null;

        if ($currentIndex !== false) {
            // Find the index of the next consultant
            $nextIndex = ($currentIndex + 1);
            $nextConsultant = $consultants->get($nextIndex);

            // Find the index of the previous consultant
            $prevIndex = ($currentIndex - 1 + $consultants->count()) % $consultants->count();
            $prevConsultant = $consultants->get($prevIndex);

            // Handle special case: If the current consultant is the first, set the previous consultant to be the last
            if ($currentIndex === 0) {
                $prevConsultant = $consultants->last();
            }

            // Handle special case: If the current consultant is the last, set the next consultant to be the first
            if ($currentIndex === $consultants->count() - 1) {
                $nextConsultant = $consultants->first();
            }
        }



        // $client = OurClientMd::all();
        return view($this->config['folder_prefix'] . "/consultant-detail", [
            'about' => $data,
            'consultant' => $consultant,
            'test' => "testing",
            'service_cats' => $service_cats,
            'next_consultant' => $nextConsultant,
            'prev_consultant' => $prevConsultant,

            'consultants' => $consultants

        ]);
    }


    // public function shareFb($url)
    // {
    //     $fbShareUrl = 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode($url);
    //     return redirect()->away($fbShareUrl);
    // }
}
