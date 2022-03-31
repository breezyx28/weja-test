<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $with = ['country'];

    public function class_name()
    {
        return 'State';
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
