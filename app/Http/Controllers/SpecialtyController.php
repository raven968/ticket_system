<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specialty;
use App\Http\Requests\SpecialtyRequest;

class SpecialtyController extends Controller
{
    
    public function index(Request $req)
    {

        $specialties = Specialty::all();

        return view('specialties.index', [
            'specialties' => $specialties
        ]);

    }

    public function create(Request $req)
    {

        return view('specialties.create');

    }

    public function store(SpecialtyRequest $req)
    {

        $specialty = Specialty::create($req->validated());

        return redirect()->route('specialties.show', [
            'specialty' => $specialty->id
        ])->message('info', 'Especialidad creada correctamente');

    }

    public function show(Request $req, Specialty $specialty)
    {

        return view('specialties.show', [
            'specialty' => $specialty
        ]);

    }

    public function update(SpecialtyRequest $req, Specialty $specialty)
    {

        $specialty->update($req->validated());

        return redirect()->back()->message('info', 'Especialidad actualizada correctamente');
        
    }

}
