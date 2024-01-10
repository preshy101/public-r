<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use App\Models\Category;
use App\Models\imageGallery;
use Livewire\WithPagination;

class Blog extends Component
{
    use WithPagination;
    // public $posts;
    public $search;
    public $gallery;
    public function mount(){
       $this->posts = Post::published()->where('title', 'like',"%{$this->search}%")->paginate(6);

    }

    public function posts(){
        return  Post::published()->where('title', 'like',"%{$this->search}%")->paginate(6);
        }

    public function render()
    {
        return view('livewire.blog.blog',
        [
            'posts' => Post::with('categories','author')->published()->latest()->paginate(6),
            'recentPosts' => Post::published()->latest()->take(3)->get(),
            'categories' => Category::latest()->take(10)->get(),
            'gallery' => $this->gallery = imageGallery:: 
            latest()->take(8)->get()
        ])
        ->extends('welcome');
    }
}
