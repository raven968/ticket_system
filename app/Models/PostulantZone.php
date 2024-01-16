<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Zone;

class PostulantZone extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }
}
