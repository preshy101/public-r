<?php

namespace App\Livewire\About;

use Carbon\Carbon;
use App\Models\cms;
use Livewire\Component;

class Council extends Component
{
    public $council; 

    public function mount(){
        $this->council = cms::where([['contentId','council'],['startDate', '<=', Carbon::now()]])
        ->where('endDate', '>=', Carbon::now())
        ->latest()->first();
    }
    public function render()
    {
        return view('livewire.about.council', [
            'council' => $this->council
        ])
        ->extends('welcome');
    }
}
