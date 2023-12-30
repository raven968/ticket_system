<?php

namespace App\Models\Traits\Specialty;

trait Functions
{

    public function getLinkAttribute()
    {

        return route('specialties.show', [
            'specialty' => $this->id
        ]);
        
    }
}