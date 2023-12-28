<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CompanyRequest;
use App\Models\{ Company };

class CompanyController extends Controller
{
    public function index(Request $req)
    {

        $companies = Company::where('deleted', 0)->get();

        return view('companies.index',[
            'companies' => $companies
        ]);
    }

    public function create(Request $req)
    {
        return view('companies.create');
    }

    public function store(CompanyRequest $req)
    {
        $company = Company::create($req->validated());

        return redirect()->route('companies.show', [ 'company' => $company->id ])->message('info', 'Compañía creada correctamente');
    }

    public function show(Request $req, Company $company)
    {
        return view('companies.show', [
            'company' => $company
        ]);
    }

    public function update(CompanyRequest $req, Company $company)
    {

        $company->update($req->validated());

        return redirect()->back()->message('info', 'Compañía actualizada correctamente');

    }
}
