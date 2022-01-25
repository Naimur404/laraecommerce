<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home_slider extends Model
{
    protected $table = 'home_slider';
    use HasFactory;
    protected $fillable = [
        'title',
        'subtitle',
        'price',
        'link',
        'image',
        'status'
    ];
}
