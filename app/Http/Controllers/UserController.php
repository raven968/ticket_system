<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{User, Company, Ability};
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function index(Request $req)
    {

        $users = User::where('is_admin', 1)->get();

        return view('users.index', [
            'users' => $users,
        ]);
    }

    public function create(Request $req)
    {

        $companies = Company::where('active', 1)->get();

        return view('users.create',[
            'companies' => $companies
        ]);
    }

    public function store(UserRequest $req)
    {
        $user = User::create($req->validated());

        return redirect()->route('users.show', ['user' => $user->id])->message('success', 'Se creó el usuario exitosamente.');
    }

    public function show(Request $req, User $user)
    {

        $companies = Company::where('active', 1)->get();
        $abilities = Ability::whereIsListable(1)->orderBy('group')->get();

        return view('users.show', [
            'user' => $user,
            'companies' => $companies,
            'abilities' => $abilities
        ]);
    }

    public function update(UserRequest $req, User $user)
    {
        $user->update($req->validated());

        $user->update([
            'updated_by' => \Auth::user()->id,
        ]);

        $abilities = $req->get('abilities', []);

        \Bouncer::sync($user)->abilities( $abilities );

        return redirect()->back()->message('success', 'Se actualizo el usuario exitosamente.');
    }
}
