<?php

namespace App\Livewire;

use App\Models\Datasheet;
use Livewire\Component;

class Dashboard extends Component
{
    public $pending_datasheets;
    public $valid_datasheets;
    public function render()
    {
        $this->pending_datasheets = Datasheet::where('status', 'pending')->get();
        $this->valid_datasheets = Datasheet::where('status', 'validated')->get();
        return view('livewire.dashboard', [
            'pending_datasheets' => $this->pending_datasheets,
            'valid_datasheets' => $this->valid_datasheets,
        ]);
    }
}
