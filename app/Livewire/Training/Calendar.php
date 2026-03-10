<?php

namespace App\Livewire\Training;

use App\Models\TrainingCalendarMaterial;
use Livewire\Component;

class Calendar extends Component
{
    public function render()
    {
        $materials = TrainingCalendarMaterial::query()
            ->where('is_active', true)
            ->orderByDesc('event_date')
            ->orderByDesc('created_at')
            ->get();

        return view('livewire.training.calendar', [
            'materials' => $materials,
        ])->layout('layouts.app')->slot('content');
    }
}
