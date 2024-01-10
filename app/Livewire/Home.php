<?php

namespace App\Livewire;

use Carbon\Carbon;
use App\Models\cms;
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

    // public function create(){
    //     dd($this->sub);
    // }

    public function mount(){
        $this->slide = cms::where([['contentId','slide'],['startDate', '<=', Carbon::now()]])
        ->where('endDate', '>=', Carbon::now())
        ->get();

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
    }
    public function render()
    { 
        // $slide = cms::where('contentId', 'slide')->latest()->take(5)->get();
       
        return view('livewire.home', ['slide' => $this->slide, 
        'welcome' => $this->welcome, 
        'president' => $this->president, 
        'team' => $this->team, 
        'gallery' => $this->gallery, 
        'faq' => $this->faq, 
        'testimony' => $this->testimony, 
        ]
    )->extends('welcome');
    }
}
