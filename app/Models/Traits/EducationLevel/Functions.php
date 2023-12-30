<?php

namespace App\Models\Traits\EducationLevel;

trait Functions
{
    public function getLinkAttribute()
    {
        
        return route('education_levels.show', [ 'education_level' => $this->id ]);

    }
}