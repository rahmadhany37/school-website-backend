<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    //get image path from post data
    public function getImageAttribute($image)
    {
        return asset('storage/posts' . $image);
    }
}
