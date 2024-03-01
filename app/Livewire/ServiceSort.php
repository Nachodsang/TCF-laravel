<?php

namespace App\Livewire;

use App\Models\MaIndustryMd;
use Livewire\Component;

class ServiceSort extends Component
{

    public function updateService($sortId)
    {

        // dd($sortId);
        foreach ($sortId as $id) {
            $temp =  \App\Models\ServiceMd::where('id', $id['value'])->first();
            $temp->sort = $id['order'];
            $temp->save();
        }
    }
    public function render()
    {
        return view('livewire.service-sort', [

            'service' => \App\Models\ServiceMd::select('service.*', 'users.name as userName', 'service_category.name')
                ->leftJoin('users', 'service.upload_by', 'users.id')
                ->leftJoin('service_category', 'service_category.id', 'service.cat_id')
                ->orderBy('sort')
                ->get()
        ]);
    }
}
