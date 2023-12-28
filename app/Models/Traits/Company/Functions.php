<?php

namespace App\Models\Traits\Company;

trait Functions
{
    public function getLinkAttribute()
    {
        return route('companies.show',[ 'company' => $this->id ]);
    }
}