<?php

namespace App\Livewire\Student;

use Livewire\Component;

class StudentAdmission extends Component
{
    public function render()
    {
        return view('livewire.student.student-admission')
        ->extends('welcome');
    }
}
