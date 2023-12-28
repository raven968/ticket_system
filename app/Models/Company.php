<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Company\{ Functions };

class Company extends Model
{
    use HasFactory, Functions;

    protected $guarded = [];
}
