<?php

namespace App\Livewire\Training;

use App\Models\Training;
use Livewire\Component;

class MCPD extends Component
{
    public $training;

    public function mount(){
        $this->training = Training::with('tContent')->where('title', 'LIKE', "%mcpd%")->first();
    }
    public function render()
    {
        return view('livewire.training.m-c-p-d',[
            'training' => $this->training 
        ])->layout('layouts.app')->slot('content');
    }
}
