<?php

namespace App\Models\Traits\User;

use App\Models\User;

trait Functions
{
    public function getLinkAttribute()
    {
        return route('users.show', [ 'user' => $this->id ]);
    }
}