<?php

namespace App\Livewire;

use Livewire\Component;

class ConsultantSort extends Component
{

    public function updateConsultant($sortId)
    {

        // dd($sortId);
        foreach ($sortId as $id) {
            $temp =  \App\Models\ConsultantMd::where('id', $id['value'])->first();
            $temp->sort = $id['order'];
            $temp->save();
        }
    }
    public function render()
    {
        return view('livewire.consultant-sort', [
            'consultant' => \App\Models\ConsultantMd::select([
                'consultant.*',
                'users.name as userUpload'
            ])
                ->leftJoin('users', 'consultant.upload_by', 'users.id')
                ->orderBy('sort')
                ->get()
        ]);
    }
}
