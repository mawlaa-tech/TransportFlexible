<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [

        'title_1',
         'title_2',
         'description_1',
         'description_2',
         'description_3',
         'description_4',
         'quality_1',
         'quality_2',
         'quality_3',
         'image_1',
         'image_2',
         'image_3'
    ];
}
