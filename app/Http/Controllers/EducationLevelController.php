<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EducationLevel;
use App\Http\Requests\EducationLevelRequest;

class EducationLevelController extends Controller
{
    public function index(Request $req)
    {

        $education_levels = EducationLevel::all();

        return view('education_levels.index',[
            'education_levels' => $education_levels
        ]);

    }

    public function create(Request $req)
    {

        return view('education_levels.create');

    }

    public function store(EducationLevelRequest $req)
    {

        $education_level = EducationLevel::create($req->validated());

        return redirect()->route('education_levels.show', [  'education_level' => $education_level->id ])->message('info', 'Nivel de educación creado exitosamente');

    }

    public function show(Request $req, EducationLevel $education_level)
    {

        return view('education_levels.show', [
            'education_level' => $education_level
        ]);

    }

    public function update(EducationLevelRequest $req, EducationLevel $education_level)
    {

        $education_level->update($req->validated());

        return redirect()->back()->message('info', 'Nivel de educación actualizado');

    }

    public function apiRouteGetEducationLevels()
    {

        $education_levels = EducationLevel::selectRaw('id, education_level AS scholarship')->where('active', 1)->get();

        return response()->json($education_levels);

    }
}
