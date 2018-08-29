<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HeroSlider extends Model
{
    protected $table = "heroslider";

    protected $fillable = [
        'link',
    ];

}
