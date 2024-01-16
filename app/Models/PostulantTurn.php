<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Turn;

class PostulantTurn extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function turn()
    {
        return $this->belongsTo(Turn::class);
    }
}
