<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{ Area };
use App\Http\Requests\AreaRequest;

class AreaController extends Controller
{
    
    public function index(Request $req)
    {

        $areas = Area::all();

        return view('areas.index', [
            'areas' => $areas
        ]);

    }

    public function create(Request $req)
    {

        return view('areas.create');

    }

    public function store(AreaRequest $req)
    {

        $area = Area::create($req->validated());

        return redirect()->route('areas.show', [
            'area' => $area->id
        ])->message('info', 'Area creada correctamente');

    }

    public function show(Request $req, Area $area)
    {

        return view('areas.show', [
            'area' => $area
        ]);

    }

    public function update(AreaRequest $req, Area $area)
    {

        $area->update($req->validated());

        return redirect()->back()->message('info', 'Area actualizada correctamente');
        
    }
}
