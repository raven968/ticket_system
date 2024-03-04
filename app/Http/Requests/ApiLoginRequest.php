<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\{ User, Postulant };

class ApiLoginRequest extends FormRequest
{
    function rules(){
        return [
            'cellphone' => 'string|required',
            'password' => 'string|required',
        ];
    }

    function login(){
        $postulant = Postulant::where('cellphone', $this->cellphone)->orderBy('created_at', 'desc')->first();

        if (!is_null($postulant) && Hash::check($this->password, $postulant->password) && $token = $postulant->getToken())
        {
            return $token;
        }

        return false;
    }
}
