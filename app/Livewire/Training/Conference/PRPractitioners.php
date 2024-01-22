<?php

namespace App\Livewire\Training\Conference;

use Livewire\Component;

class PRPractitioners extends Component
{
    public function render()
    {
        return view('livewire.training.conference.p-r-practitioners')
        ->extends('welcome');
    }
}
