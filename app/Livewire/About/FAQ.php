<?php

namespace App\Livewire\About;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\cms;
use Livewire\WithPagination;

class FAQ extends Component
{
    use WithPagination;
    // public function mount(){
    //     $this->faqs = cms::where([['contentId','faq'],['startDate', '<=', Carbon::now()]])
    //     ->paginate(10);
    // }

    public function render()
    {
        return view('livewire.about.f-a-q',[
            'faqs' =>  cms::where([['contentId','faq'],['startDate', '<=', Carbon::now()]])
            ->latest()->get()
        ])->layout('layouts.app')
        ->slot('content');;
    }
}
