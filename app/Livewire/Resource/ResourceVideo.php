<?php

namespace App\Livewire\Resource;

use Carbon\Carbon;
use App\Models\cms;
use Livewire\Component;

class ResourceVideo extends Component
{
    public function render()
    {
        return view('livewire.resources.resource-video',
        ['videos' => cms::latest()->where([['contentId','videos'],['startDate', '<=', Carbon::now()]])
        ->where('endDate', '>=', Carbon::now())
        ->paginate(9)
        ]
    )->extends('welcome');
    }
}
