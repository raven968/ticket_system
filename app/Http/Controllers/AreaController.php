<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{ Area, State, City };
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

    public function apiRouteGetAreas()
    {
        $areas = Area::select(['id', 'area'])->where('active', 1)->get();

        return response()->json($areas);
    }

    public function apiRouteGetStates()
    {
        $states = State::select(['state'])->get();

        return response()->json($states);
    }

    public function apiRouteGetCities(Request $req)
    {

        $state = State::where('state', $req->state)->first();

        $cities = City::select(['city'])->where('state_id', $state->id)->get();

        return response()->json($cities);
    }
}
