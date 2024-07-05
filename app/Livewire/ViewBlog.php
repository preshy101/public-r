<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use App\Models\Category;
use App\Models\imageGallery;

class ViewBlog extends Component
{
    public $post;

    public function mount($slug){
        $this->post = Post::with('categories','author')->where('slug', $slug)->first();
    }
    public function render()
    {
        return view('livewire.blog.view-blog',
        ['recentPosts' => Post::published()->latest()->take(3)->get(),
        'categories' => Category::latest()->take(10)->get(),
        'gallery' =>  imageGallery::
        latest()->limit(8)->get()])
        ->extends('welcome');
    }
}
