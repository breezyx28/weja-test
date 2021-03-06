<?php

namespace App\Http\Requests\Country;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|unique:countries,name,id',
            'icon' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:1024',
            'iso' => 'required|string|min:2|max:191'
        ];
    }
}
