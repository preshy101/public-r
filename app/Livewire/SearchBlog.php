<?php

namespace App\Livewire\Resource;

use Livewire\Component;

class SearchBlog extends Component
{
    public $search;
    #[On('search')]
    public function updateSearch($search){
        $this->search =  Post::published()->where('title', 'like',"%{$this->search}%")->paginate(6);
    }
 
    public function mount($search){
        $this->search =  Post::published()->where('title', 'like',"%{$this->search}%")->paginate(6);
    }

    public function render()
    {
        return view('livewire.blog.search-blog',
    ['search' => $this->search]);
    }
}
