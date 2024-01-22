<?php

namespace App\Livewire\Education\Examination;

use Livewire\Component;

class QualifyingExams extends Component
{
    public function render()
    {
        return view('livewire.education.examination.qualifying-exams')
        ->extends('welcome');
    }
}
