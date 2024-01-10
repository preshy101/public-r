<?php

namespace App\Livewire\Resource;

use Livewire\Component;
use App\Models\imageGallery;

class ViewAllImages extends Component
{
    public $images; 
    public function mount($id){
        $this->images = imageGallery::where('cms_id', $id)->get(); 
    }

    public function render()
    {
        return view('livewire.resources.view-all-images',
    ['images'=> $this->images])->extends('welcome');
    }
}
