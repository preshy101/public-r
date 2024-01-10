<?php

namespace App\Livewire\Resource;

use Livewire\Component;

class ResourceDownloadables extends Component
{
    public function render()
    {
        return view('livewire.resources.resource-downloadables')
        ->extends('welcome');
    }
}
