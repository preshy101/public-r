<?php

namespace App\Livewire\Hubs;

use Livewire\Component;

class Energy extends Component
{
    public function render()
    {
        return view('livewire.hubs.energy')->layout('layouts.app')->slot('content');
    }
}
