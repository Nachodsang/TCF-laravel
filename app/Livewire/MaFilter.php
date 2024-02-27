<?php

namespace App\Livewire;

use App\Models\MaIndustryMd;
use Livewire\Component;

class MaFilter extends Component
{
    public function updateIndustry($sortId)
    {
        foreach ($sortId as $id) {
            MaIndustryMd::where('id', $id['value'])->update(['sort' => $id['order']]);
        }
    }

    public function render()
    {
        return view('livewire.ma-filter', [
            'industry' => MaIndustryMd::orderBy('sort')->get()
        ]);
    }
}
