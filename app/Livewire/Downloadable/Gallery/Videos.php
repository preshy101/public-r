<?php

namespace App\Livewire\Downloadable\Gallery;

use Livewire\Component;

class Videos extends Component
{
    public function render()
    {
        return view('livewire.downloadable.gallery.videos')
        ->extends('welcome');
    }
}
