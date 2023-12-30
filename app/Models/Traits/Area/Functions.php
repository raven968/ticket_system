<?php

namespace App\Models\Traits\Area;

trait Functions
{

    public function getLinkAttribute()
    {

        return route('areas.show', [
            'area' => $this->id
        ]);

    }

}