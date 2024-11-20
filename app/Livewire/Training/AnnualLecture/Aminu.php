<?php

namespace App\Livewire\Training\AnnualLecture;

use App\Models\Training;
use Livewire\Component;

class Aminu extends Component
{
    public $training;
    public function mount(){
        $this->training = Training::with('tContent')->where('title', 'LIKE', "%Raymond Dokpesi%")->first();
    }
    public function render()
    {
        return view('livewire.training.annual-lecture.aminu',[
            'training' => $this->training
        ])
        ->extends('welcome');
    }
}
