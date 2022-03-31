<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Storage;

class Country extends Model
{
    use HasFactory;

    public function class_name()
    {
        return 'Country';
    }

    // accessor the icon
    // protected function icon(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($value) => 'http://127.0.0.1:8000/storage/app/' . $value,
    //     );
    // }
}
