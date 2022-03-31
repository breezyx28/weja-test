<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Neighborhood extends Model
{
    use HasFactory;

    protected $with = ['city'];

    public function class_name()
    {
        return 'Neighborhood';
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
