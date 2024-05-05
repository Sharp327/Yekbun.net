<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class PolicyAndTerm extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'privacy_policy',
        'disclaimer'
    ];
}
