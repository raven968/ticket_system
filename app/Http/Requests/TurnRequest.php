<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TurnRequest extends FormRequest
{
    
    public function rules(): array
    {
        return [
            'turn' => 'required',
            'active' => 'boolean'
        ];
    }
}
