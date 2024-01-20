<?php

namespace App\Livewire;

use Carbon\Carbon;
use App\Models\cms;
use App\Models\Post;
use Livewire\Component;
use App\Models\imageGallery;

class Home extends Component
{
    public $slide;
    public $welcome;
    public $president;
    public $team; 
    public $gallery; 

    public $testimony;
    public $faq;
    public $posts;

    // public function create(){
    //     dd($this->sub);
    // }

    public function mount(){
        $this->slide = cms::where([['contentId','slide'],['startDate', '<=', Carbon::now()]])
        ->where('endDate', '>=', Carbon::now())
        ->get();

        $this->welcomePics = cms::with('imageVideo')->where([['contentId','welcome'],['startDate', '<=', Carbon::now()]])
        ->where('endDate', '>=', Carbon::now())
        ->latest()->take(6)->get();
        
        $this->welcome = cms::where([['contentId','welcome'],['startDate', '<=', Carbon::now()]])
        ->where('endDate', '>=', Carbon::now())
        ->latest()->first();

        $this->president = cms::where([['contentId','presidentSpeech'],['startDate', '<=', Carbon::now()]])
        ->where('endDate', '>=', Carbon::now())
        ->latest()->first();

        $this->team = cms::where([['contentId','teamMembers'],['startDate', '<=', Carbon::now()]])
        ->where('endDate', '>=', Carbon::now())
        ->latest()->take(4)->get();

        $this->faq = cms::where([['contentId','faq'],['startDate', '<=', Carbon::now()]])
        ->where('endDate', '>=', Carbon::now())
        ->latest()->take(6)->get();

        $this->testimony = cms::where([['contentId','testimonial'],['startDate', '<=', Carbon::now()]])
        ->where('endDate', '>=', Carbon::now())
        ->latest()->take(6)->get();

        $this->gallery = imageGallery:: 
        latest()->take(6)->get();

        $this->posts = Post::published()->latest()->take(12)->get();
    }
    public function render()
    { 
        // $slide = cms::where('contentId', 'slide')->latest()->take(5)->get();
       
        return view('livewire.home', [
            'slide' => $this->slide, 
            'welcomePics' => $this->welcomePics, 
        'welcome' => $this->welcome, 
        'president' => $this->president, 
        'team' => $this->team, 
        'gallery' => $this->gallery, 
        'faq' => $this->faq, 
        'testimony' => $this->testimony, 
        'post' => $this->posts
        ]
    )->extends('welcome');
    }
}
