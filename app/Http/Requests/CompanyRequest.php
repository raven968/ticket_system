<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'company' => 'required',
            'email' => 'required',
            'active' => 'boolean|required',
            'is_webmaster' => 'boolean|required',
            'can_view_progress' => 'boolean|required'
        ];
    }
}
