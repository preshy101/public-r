<?php

namespace App\Livewire\Career;

use Livewire\Component;

class Careers extends Component
{
    public function render()
    {
        return view('livewire.career.careers')->extends('welcome');
    }
}
