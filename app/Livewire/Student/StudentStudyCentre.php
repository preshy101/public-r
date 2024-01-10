<?php

namespace App\Livewire\Student;

use Livewire\Component;

class StudentStudyCentre extends Component
{
    public function render()
    {
        return view('livewire.student.student-study-centre')
        ->extends('welcome');
    }
}
