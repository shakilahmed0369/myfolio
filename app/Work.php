<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Work_cat;
class Work extends Model
{
    protected $fillable = [
        'title', 'work_image', 'description', 'link', 'work_cat_id'
    ];

    //making a relationship between work_cat and work model
    public function work_cat()
    {
        return $this->belongsTo(Work_cat::class);
    }
}
