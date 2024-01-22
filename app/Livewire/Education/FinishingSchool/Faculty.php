<?php

namespace App\Livewire\Education\FinishingSchool;

use Livewire\Component;

class Faculty extends Component
{
    public function render()
    {
        return view('livewire.education.finishing-school.faculty')
        ->extends('welcome');
    }
}
