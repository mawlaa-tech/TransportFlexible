<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'short_des',
        'long_des',
        'city_departure',
        'city_delivery',
        'weight',
        'dimension',
        'name',
        'email',
        'phone',
        'message',
        'image'
    ]
}
