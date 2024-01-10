<?php

namespace App\Livewire;

use Carbon\Carbon;
use App\Models\cms;
use Livewire\Component;
use Livewire\WithPagination;

class TeamMembers extends Component
{
    use WithPagination;
    public $president; 
    public function render()
    {
        return view('livewire.team-members',
        ['presidentSpeech' => $this->president = cms::where([['contentId','presidentSpeech'],['startDate', '<=', Carbon::now()]])
        ->where('endDate', '>=', Carbon::now())
        ->latest()->first(),

        'teams' => cms::where([['contentId','teamMembers'],['startDate', '<=', Carbon::now()]])
        ->where('endDate', '>=', Carbon::now())
        ->latest()->paginate()])
        ->extends('welcome');
    }
}
