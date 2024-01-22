<?php

namespace App\Livewire\Education\AdvisoryBoard;

use Livewire\Component;

class eComposition extends Component
{
    public function render()
    {
        return view('livewire.education.advisory-board.composition')
        ->extends('welcome');
    }
}
