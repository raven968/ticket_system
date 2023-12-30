<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EducationLevelRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'education_level' => 'required',
            'active' => 'boolean|required'
        ];
    }
    
}
