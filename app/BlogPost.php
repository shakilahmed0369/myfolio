<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Blog_cat;
class BlogPost extends Model
{
    public function blog_cat()
    {
        return $this->belongsTo(Blog_cat::class);
    }
}
