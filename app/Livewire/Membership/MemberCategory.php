<?php

namespace App\Livewire\Membership;

use Carbon\Carbon;
use App\Models\cms;
use Livewire\Component;

class MemberCategory extends Component
{
    public $memberCategory; 

    public function mount(){
        $this->memberCategory = cms::where([['contentId','membershipCategory'],['startDate', '<=', Carbon::now()]])
        ->where('endDate', '>=', Carbon::now())
        ->latest()->first();
    }
    public function render()
    {
        return view('livewire.member.member-category',
        [ 'memberCategory' => $this->memberCategory ]
        )
        ->extends('welcome');
    }
    
}
