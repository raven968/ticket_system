<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{User, Company, Ability};
use App\Http\Requests\UserRequest;

class ContractorController extends Controller
{
    public function index(Request $req)
    {

        $users = User::where('is_admin', 0)->get();

        return view('contractors.index', [
            'users' => $users,
        ]);
    }

    public function show(Request $req, $id)
    {

        $user = User::find($id);

        $companies = Company::where('active', 1)->get();

        return view('contractors.show', [
            'contractor' => $user,
            'companies' => $companies
        ]);
    }

    public function update(UserRequest $req, $id)
    {

        $user = User::find($id);

        $user->update($req->validated());

        $user->update([
            'updated_by' => \Auth::user()->id,
        ]);

        return redirect()->back()->message('success', 'Se actualizo el contratista exitosamente.');
    }
}
