<?php

namespace App\Livewire\Membership;

use Carbon\Carbon;
use App\Models\cms;
use Livewire\Component;

class MemberUpgrade extends Component
{
    public $memberUpgrade; 

    public function mount(){
        $this->memberUpgrade = cms::where([['contentId','membershipUpgrade'],['startDate', '<=', Carbon::now()]])
        ->where('endDate', '>=', Carbon::now())
        ->latest()->first();
    }

    public function render()
    {
        return view('livewire.member.member-upgrade',
        [ 'memberUpgrade' => $this->memberUpgrade ]
        )
        ->extends('welcome');
    }
    
}
