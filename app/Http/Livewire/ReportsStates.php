<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ReportsStates extends Component
{
    public $data;
    public function render()
    {
        return view('livewire.reports-states', ['data' => $this->data]);
    }
}
