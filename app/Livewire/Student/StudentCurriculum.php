<?php

namespace App\Livewire\Student;

use Carbon\Carbon;
use App\Models\cms;
use Livewire\Component;

class StudentCurriculum extends Component
{
    public $curriculum; 

    public function mount(){
        $this->curriculum = cms::where([['contentId','curriculum'],['startDate', '<=', Carbon::now()]])
        ->where('endDate', '>=', Carbon::now())
        ->latest()->first();
    }
    public function render()
    {
        return view('livewire.student.student-curriculum',
        [ 'curriculum' => $this->curriculum]
        )
        ->extends('welcome');
    }
}
