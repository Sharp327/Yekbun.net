<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class BackgroundFeed extends Model
{
    use HasFactory;
    protected $fillable = [
        'image' 
    ];
}
