<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ReportsCountries extends Component
{
    public $data;
    public function render()
    {
        return view('livewire.reports-countries', ['data' => $this->data]);
    }
}
