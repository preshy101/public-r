<?php

namespace App\Livewire\About;

use Livewire\Component;

class Composition extends Component
{
    public function render()
    {
        return view('livewire.about.composition')->extends('welcome');
    }
}
