<?php

namespace App\Livewire\Resource;

use Carbon\Carbon;
use App\Models\cms;
use Livewire\Component;
use Livewire\WithPagination;

class ResourceImage extends Component
{
    use WithPagination;
    // public $images;
    // protected $paginationTheme = 'bootstrap';

  

    public function render()
    {
        return view('livewire.resources.resource-image',
        ['images' => 
        // $this->images
        
        cms::
        with('imageVideo')->where([['contentId','images'],['startDate', '<=', Carbon::now()]])
        ->where('endDate', '>=', Carbon::now())->latest()
        ->paginate(9)
         ]
        ) 
        ->extends('welcome')
        // ->section('content')
        ;
    }
}
