<?php

namespace App\Models\Apartment;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    protected $fillable = [
        'number', 'block'
    ];

    protected $guarded =[];
}
