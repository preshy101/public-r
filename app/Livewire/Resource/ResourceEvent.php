<?php

namespace App\Livewire\Resource;
 
use App\Models\cms;
use Livewire\Component;
use Livewire\WithPagination;

class ResourceEvent extends Component
{    
    use WithPagination;

    public function render()
    {
        return view('livewire.resources.resource-event',
        ['events' => cms::where('contentId','events')->latest()
        ->paginate(9)]
        )->extends('welcome');
    }
}
