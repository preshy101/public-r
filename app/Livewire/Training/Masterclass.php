<?php

namespace App\Livewire\Training;

use App\Models\Training;
use App\Models\TrainingContent;
use Carbon\Carbon;
use Livewire\Component;

class Masterclass extends Component
{
    public $training; 

    public function mount(){
        $this->training = Training::with('tContent')->where('title', 'LIKE', "%masterclass%")->first();
    }

    public function render()
    {
        return view('livewire.training.masterclass',
        [
         'training' => $this->training
        ]
        )->extends('welcome');
    }
}
