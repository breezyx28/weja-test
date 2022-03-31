<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ReportsNeighborhoods extends Component
{
    public $data;

    public function render()
    {
        return view('livewire.reports-neighborhoods', [
            'data' => $this->data
        ]);
    }
}
