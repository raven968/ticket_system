<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Company, User};
use App\Http\Requests\UserRequest;

class RegisterController extends Controller
{
    public function index(Request $req)
    {

        $companies = Company::where('active', 1)->get();

        return view('register',[
            'companies' => $companies
        ]);
    }

    public function store(UserRequest $req)
    {
        
        $user = User::create($req->validated());

        $user->update([
            'is_admin' => 0,
            'is_webmaster' => 0
        ]);

        if(!is_null(\Auth::loginUsingId($user->id, true)))
        {
            return redirect()->route('home');
        }

        return redirect()->back()->message('warning','Ocurrió un error, por favor inténtelo mas tarde');
    }
}
