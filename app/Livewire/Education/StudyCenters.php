<?php

namespace App\Livewire\Education;

use Livewire\Component;

class StudyCenters extends Component
{
    public function render()
    {
        // return view('livewire.education.study-centers')->extends('welcome');
        return view('livewire.student.student-study-centre')->extends('welcome');
    }
}
