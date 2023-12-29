<?php

namespace App\Models\Traits\Turn;

trait Functions
{
    public function getLinkAttribute()
    {
        return route('turns.show', [ 'turn' => $this->id ]);
    }
}