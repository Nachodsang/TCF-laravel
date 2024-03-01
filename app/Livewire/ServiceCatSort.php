<?php

namespace App\Livewire;

use Livewire\Component;

class ServiceCatSort extends Component
{

    public function updateServiceCat($sortId)
    {

        // dd($sortId);
        foreach ($sortId as $id) {
            $temp =  \App\Models\ServiceCatMd::where('id', $id['value'])->first();
            $temp->sort = $id['order'];
            $temp->save();
        }
    }
    public function render()
    {
        return view('livewire.service-cat-sort', [
            'serviceCat' => \App\Models\ServiceCatMd::select('service_category.*', 'users.name as userName')
                ->leftJoin('users', 'service_category.upload_by', 'users.id')
                ->orderBy('sort')
                ->get()
        ]);
    }
}
