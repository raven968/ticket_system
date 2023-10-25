<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function index(Request $req)
    {
        return view('login');
    }

    public function store(LoginRequest $req)
    {
		if(!$req->login())
        {
			return redirect()->back()->message('warning', 'Credenciales incorrectas');
        }

		return redirect()->route('home');
	}

    public function logout(Request $req)
    {
    	\Auth::logout();

    	return redirect()->route('login.index');
    }
}
