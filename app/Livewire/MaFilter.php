<?php

namespace App\Livewire;

use App\Models\MaIndustryMd;
use App\Models\MaProductMd;
use Livewire\Component;
use Livewire\WithPagination;

class MaFilter extends Component
{
    use WithPagination;

    public function updateIndustry($sortId)
    {
        foreach ($sortId as $id) {
            MaIndustryMd::where('id', $id['value'])->update(['sort' => $id['order']]);
        }
    }

    public function updateProduct($sortId)
    {
        foreach ($sortId as $id) {
            MaProductMd::where('id', $id['value'])->update(['sort' => $id['order']]);
        }
    }

    public function render()
    {
        return view('livewire.ma-filter', [
            'industry' => MaIndustryMd::orderBy('sort')->get()
        ]);
    }
}
