<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'username' => 'required',
            'last_access' => 'required',
            'password' => 'required',
            'updated_by' => 'required',
            'is_admin' => 'required',
            'is_webmaster' => 'required',
            'company_id' => 'required'
        ];
    }
}
