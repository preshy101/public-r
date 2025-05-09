<?php

namespace App\Livewire\Training\AnnualLecture;

use App\Models\Training;
use Livewire\Component;

class IgweNnaemeka extends Component
{
    public $training;
    public function mount(){
        $this->training = Training::with('tContent')->where('title', 'LIKE', "%igwe%")->first();
    }
    public function render()
    {
        return view('livewire.training.annual-lecture.igwe-nnaemeka',[
            'training' => $this->training 
        ])
        ->extends('welcome');
    }
}
