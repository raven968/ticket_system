<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\{ PostulantZone, PostulantArea, PostulantTurn };

class Postulant extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable;

    protected $casts = [
        'password' => 'hashed',
    ];
    protected $guarded = [];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    public function getToken($remember = true) {
        return \Auth::login($this, $remember);
    }

    public function zones()
    {
        return $this->hasMany(PostulantZone::class);
    }

    public function areas()
    {
        return $this->hasMany(PostulantArea::class);
    }

    public function turns()
    {
        return $this->hasMany(PostulantTurn::class);
    }
}
