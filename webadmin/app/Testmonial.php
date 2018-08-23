<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testmonial extends Model
{
    protected $table = "testmonials";
    
    protected $fillable = [
        'name', 'description',
    ];

}
