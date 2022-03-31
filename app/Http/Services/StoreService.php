<?php

namespace App\Http\Services;

use Error;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class StoreService
{

    public function __construct(FormRequest $formRequet, Model $model)
    {

        $validate = $formRequet->validated();

        // clear nullable data
        $validate = (object) array_filter($validate, function ($item) {
            return $item != null || $item != '';
        });

        foreach ($validate as $key => $value) {
            $model->$key = $value;
            if ($key == 'icon') {
                $model->icon = $formRequet->file('icon')->storeAs('Countries', str::replace(' ', '-', $model->name . '.png'));
            }
        }

        try {
            $model->save();
            if ($model->class_name() == 'Neighborhood') {
                // dd($model['city']);
                new StoreWorldCountries($model);
            }

            return true;
        } catch (\Throwable $th) {
            Log::alert("{$model->class_name()} Controller Store Method", ['error' => $th->getMessage()]);
            return throw new Error($th->getMessage());
        }
    }
}
