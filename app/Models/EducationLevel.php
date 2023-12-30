<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\EducationLevel\Functions;

class EducationLevel extends Model
{
    use HasFactory, Functions;

    protected $guarded = [];
}
