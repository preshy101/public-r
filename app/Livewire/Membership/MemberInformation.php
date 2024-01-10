<?php

namespace App\Livewire\Membership;

use Carbon\Carbon;
use App\Models\cms;
use Livewire\Component;

class MemberInformation extends Component
{
    public $memberInformation; 

    public function mount(){
        $this->memberInformation = cms::where([['contentId','membershipInformation'],['startDate', '<=', Carbon::now()]])
        ->where('endDate', '>=', Carbon::now())
        ->latest()->first();
    }
    public function render()
    {
        return view('livewire.member.member-information',
        [ 'memberInformation' => $this->memberInformation]
        )
        ->extends('welcome');
    }
}
