<?php

namespace App\Models\Traits\Zone;

trait Functions
{
    public function getLinkAttribute()
    {
        return route('zones.show', [ 'zone' => $this->id ]);
    }
}