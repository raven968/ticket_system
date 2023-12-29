<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Turn\Functions;

class Turn extends Model
{
    use HasFactory, Functions;

    protected $guarded = [];
}
