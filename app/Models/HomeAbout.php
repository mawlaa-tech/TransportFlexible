<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeAbout extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'short_dis',
        'long_dis', 
        'title_value_1',
        'des_value_1',
        'title_value_2',
        'des_value_2',
        'title_value_3',
        'des_value_3',
        'image'
    ];
}
