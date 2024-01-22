<?php

namespace App\Livewire\Training;

use Livewire\Component;

class Masterclass extends Component
{
    public function render()
    {
        return view('livewire.training.masterclass')->extends('welcome');
    }
}
