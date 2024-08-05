<?php

namespace App\Livewire\Training\AnnualLecture;

use App\Models\Training;
use Livewire\Component;

class SamEpelle extends Component
{
    public $training;

    public function mount(){
        $this->training = Training::with('tContent')->where('title', 'LIKE', "%epelle%")->first();
    }
    public function render()
    {
        return view('livewire.training.annual-lecture.sam-epelle',[
            'training' => $this->training
        ])
        ->extends('welcome');
    }
}
