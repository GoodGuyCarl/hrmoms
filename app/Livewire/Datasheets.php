<?php

namespace App\Livewire;

use App\Models\Datasheet;
use Livewire\Component;

class Datasheets extends Component
{

    public function render()
    {
        $approved_datasheets = Datasheet::where('status', 'approved')->get();
        $pending_datasheets = Datasheet::where('status', 'pending')->get();
        $validated_datasheets = Datasheet::where('status', 'validated')->get();
        return view('livewire.datasheets', [
            'datasheets' => $approved_datasheets,
            'pending_datasheets' => $pending_datasheets,
            'validated_datasheets' => $validated_datasheets,
        ]);
    }
}
