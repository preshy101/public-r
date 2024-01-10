<?php

namespace App\Livewire\Resource;

use App\Models\cms;
use Livewire\Component;

class ViewEvent extends Component
{
    public $event;

    public function mount($id){
        $this->event = cms::with('imageVideo')->where('id', $id)->get();
    }

    public function render()
    {
        return view('livewire.resources.view-event', [
            'event' => $this->event
        ])->extends('welcome');
    }
}
