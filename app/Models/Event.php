<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $guarded = [];

    //get image path from events data
    public function getImageAttribute($image)
    {
        return asset('storage/events' . $image);
    }
}
