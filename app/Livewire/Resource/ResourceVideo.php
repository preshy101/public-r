<?php

namespace App\Livewire\Resource;

use Carbon\Carbon;
use App\Models\cms;
use App\Models\imageGallery;
use Livewire\Component;

class ResourceVideo extends Component
{
    // public $images;
    // public function mount(){
    //     $this->images = imageGallery::with('cms')->where('cms_id', '4')->get();
    //     // dd($this->images);
    // }
    public function render()
    {
        return view('livewire.resources.resource-video',
        ['videos' => cms::latest()->where([['contentId','videos'],['startDate', '<=', Carbon::now()]])
        ->where('endDate', '>=', Carbon::now())
        ->paginate(9)
        ]
        // ['videos' => $this->images]
    )->extends('welcome');
    }
}
