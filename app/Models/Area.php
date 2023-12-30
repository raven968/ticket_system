<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Area\{ Functions };

class Area extends Model
{
    use HasFactory, Functions;

    protected $guarded = [];
    
}
