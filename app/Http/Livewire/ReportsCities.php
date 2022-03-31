<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ReportsCities extends Component
{
    public $data;
    public function render()
    {
        return view('livewire.reports-cities', ['data' => $this->data]);
    }
}
