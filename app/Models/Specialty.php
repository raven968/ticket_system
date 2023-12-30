<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Specialty\Functions;

class Specialty extends Model
{
    
    use HasFactory, Functions;

    protected $guarded = [];

}
