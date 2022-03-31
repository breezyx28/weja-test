<?php

namespace App\Http\Services;

use App\Models\WorldCountry;
use Illuminate\Support\Facades\Log;

class StoreWorldCountries
{

    public function __construct($neighborhood)
    {

        // init world class
        $world = new WorldCountry();

        $world->country_id = $neighborhood['city']['state']['country']['id'];
        $world->state_id = $neighborhood['city']['state']['id'];
        $world->city_id = $neighborhood['city_id'];
        $world->neighborhood_id = $neighborhood['id'];

        try {
            //code...
            $world->save();
            return true;
        } catch (\Throwable $th) {
            Log::alert('error', ['World' => $th->getMessage()]);
            return false;
        }
    }
}
