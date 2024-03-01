<?php

namespace App\Livewire;

use Livewire\Component;

class BannerSort extends Component
{

    public function updateBanner($sortId)
    {

        // dd($sortId);
        foreach ($sortId as $id) {
            $temp =  \App\Models\BannerMd::where('id', $id['value'])->first();
            $temp->sort = $id['order'];
            $temp->save();
        }
    }
    public function render()
    {
        return view('livewire.banner-sort', [

            'banner' => \App\Models\BannerMd::select('banner.*', 'users.name')->leftJoin('users', 'banner.upload_by', 'users.id')->orderBy('sort')->get()
        ]);
    }
}
