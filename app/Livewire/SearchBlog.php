<?php

namespace App\Livewire\Resource;

use App\Models\Post;
use Livewire\Component;

class SearchBlog extends Component
{
    public $posts;
    #[On('search')]
    public function updateSearch($search){
        $this->posts =  Post::published()->where('title', 'like',"%{$this->search}%")->take(6)->get();
    }
 
    public function mount($search){
        $this->posts =  Post::published()->where('title', 'like',"%{$this->search}%")->take(6)->get();
    }

    public function render()
    {
        return view('livewire.blog.search-blog',
    ['posts' => $this->post]);
    }
}
