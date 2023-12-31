<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Zone\{ Functions };

class Zone extends Model
{
    use HasFactory, Functions;

    protected $guarded = [];
}
