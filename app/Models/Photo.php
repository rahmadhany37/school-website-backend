<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $guarded = [];

    //get image path from photo data
    public function getImageAttribute($image)
    {
        return asset('storage/photos' . $image);
    }
}
