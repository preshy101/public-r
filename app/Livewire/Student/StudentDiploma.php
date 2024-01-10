<?php

namespace App\Livewire\Student;

use Livewire\Component;

class StudentDiploma extends Component
{
    public function render()
    {
        return view('livewire.student.student-diploma')
        ->extends('welcome');
    }
}
