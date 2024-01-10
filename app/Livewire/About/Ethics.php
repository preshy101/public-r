<?php

namespace App\Livewire\About;

use Carbon\Carbon;
use App\Models\cms;
use Livewire\Component;

class Ethics extends Component
{
    public $ethics; 

    public function mount(){
        $this->ethics = cms::where([['contentId','ethicCodes'],['startDate', '<=', Carbon::now()]])
        ->where('endDate', '>=', Carbon::now())
        ->latest()->first();
    }

    public function render()
    {
        return view('livewire.about.ethics', [
            'ethics' => $this->ethics
        ])
        ->extends('welcome');
    }
}
