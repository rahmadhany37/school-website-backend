<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    //eloquent one category has many post
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

}
