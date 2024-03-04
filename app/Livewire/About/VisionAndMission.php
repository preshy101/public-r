<?php

namespace App\Livewire\About;

use Carbon\Carbon;
use App\Models\cms;
use Livewire\Component;

class VisionAndMission extends Component
{
    public $vision; 

    public function mount(){
        $this->vision = cms::where([['contentId','visionAndMission'],['startDate', '<=', Carbon::now()]])
        ->where('endDate', '>=', Carbon::now())
        ->latest()->first();
    }
    public function render()
    {
        return view('livewire.about.vision-and-mission', [
            'vision' => $this->vision
        ])->extends('welcome');
    }
}
