<?php

namespace App\Livewire\Student;

use Livewire\Component;

class StudentRequirment extends Component
{
    public function render()
    {
        return view('livewire.student.student-requirment')
        ->extends('welcome');
    }
}
