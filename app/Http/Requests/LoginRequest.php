<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginRequest extends FormRequest
{

    function rules()
    {
        return [
            'email' => 'string|required',
            'password' => 'string|required',
        ];
    }

    function login()
    {
        $user = User::where('email', $this->email)->where('active', 1)->first();

        return (isset($user->id) && Hash::check($this->password, $user->password) && !is_null(\Auth::loginUsingId($user->id, true)));
    }
}
