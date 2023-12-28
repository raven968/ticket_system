<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ZoneRequest extends FormRequest
{
   
    public function rules(): array
    {
        return [
            'zone' => 'required',
            'active' => 'required|boolean'
        ];
    }
}
