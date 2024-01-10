<?php

namespace App\Livewire\About;

use Carbon\Carbon;
use App\Models\cms;
use Livewire\Component;

class About extends Component
{
    public $history; 

    public function mount(){
        $this->history = cms::where([['contentId','history'],['startDate', '<=', Carbon::now()]])
        ->where('endDate', '>=', Carbon::now())
        ->latest()->first();
    }
    public function render()
    {
        return view('livewire.about.about', [
            'history' => $this->history
        ])
        ->extends('welcome');
    }
}
