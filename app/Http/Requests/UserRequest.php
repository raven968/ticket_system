<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UserRequest extends FormRequest
{

    function rules(Request $request): array
    {
        return [
        	'name' => 'required',
            'last_name' => 'nullable',
        	'username' => 'required',
        	'email' => 'required|email|unique:users,email,' . $request->id,
            'phone' => 'string|nullable',
        	'password' => 'sometimes|required_without:id',
            'password_confirmation' => 'sometimes|same:password|required_with:password',
            'active' => 'boolean',
            'company_id' => 'required',
            'is_admin' => 'required'
        ];
    }

    function validated($key = null, $default = null)
    {
        $validated = parent::validated();

        unset($validated['password_confirmation']);
        $validated = array_filter($validated, 'strlen');
        return $validated;
    }

}
