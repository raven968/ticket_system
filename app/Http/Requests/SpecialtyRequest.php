<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SpecialtyRequest extends FormRequest
{
    
    public function rules(): array
    {
        
        return [
            'specialty' => 'required',
            'active' => 'boolean|required'
        ];

    }
}
