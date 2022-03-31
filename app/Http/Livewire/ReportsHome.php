<?php

namespace App\Http\Livewire;

use App\Models\Country;
use Livewire\Component;

class ReportsHome extends Component
{
    public $data;
    public $selectCountry, $selectState, $selectCity, $selectNeighborhood = Null;
    public $countries, $states, $cities, $neighborhoods;
    public $country, $state, $city, $neighborhood = null;

    public function mount()
    {
        $this->countries = collect(Country::all())->pluck('name')->unique();
        $this->states = [];
        $this->cities = [];
        $this->neighborhoods = [];
    }

    public function render()
    {
        return view('livewire.reports-home', ['data' => $this->data]);
    }

    // countries
    public function updatedSelectCountry($value)
    {
        $this->country = $value;
        foreach ($this->data as $key => $items) {
            $this->data[$key]['state'] = [];
            $this->data[$key]['city'] = [];
            $this->data[$key]['neighborhood'] = [];
        }
        // dd($value);
        $this->data = \App\Models\WorldCountry::whereHas('country', function ($query) use (&$value) {
            $query->where('name', $value);
        })->get()->toArray();

        $country = $this->country;

        $this->states = collect(\App\Models\State::whereHas('country', function ($query) use (&$country) {
            $query->where('name', $country);
        })->get())->pluck('name')->unique();
    }

    // states
    public function updatedSelectState($value)
    {
        $this->state = $value;

        foreach ($this->data as $key => $items) {
            $this->data[$key]['city'] = [];
            $this->data[$key]['neighborhood'] = [];
        }

        $this->data = \App\Models\WorldCountry::whereHas('state', function ($query) use (&$value) {
            $query->where('name', $value);
        })->get()->toArray();

        $state = $this->state;

        $this->cities = collect(\App\Models\City::whereHas('state', function ($query) use (&$state) {
            $query->where('name', $state);
        })->get())->pluck('name')->unique();
    }

    public function updatedSelectCity($value)
    {
        $this->city = $value;
        foreach ($this->data as $key => $items) {
            $this->data[$key]['neighborhood'] = [];
        }

        $this->data = \App\Models\WorldCountry::whereHas('city', function ($query) use (&$value) {
            $query->where('name', $value);
        })->get()->toArray();

        $city = $this->city;

        $this->neighborhoods = collect(\App\Models\Neighborhood::whereHas('city', function ($query) use (&$city) {
            $query->where('name', $city);
        })->get())->pluck('name')->unique();
    }

    public function updatedSelectNeighborhood($value)
    {
        $this->city = $value;

        $this->data = \App\Models\WorldCountry::whereHas('neighborhood', function ($query) use (&$value) {
            $query->where('name', $value);
        })->get()->toArray();
    }
}
