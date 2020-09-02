<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'about', 'age', 'residence', 'freelance', 'address'
    ];
}
