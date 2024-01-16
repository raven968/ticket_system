<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turn;
use App\Http\Requests\TurnRequest;

class TurnController extends Controller
{

    public function index(Request $req)
    {

        $turns = Turn::all();

        return view('turns.index', [ 
            'turns' => $turns
         ]);

    }

    public function create(Request $req)
    {
        return view('turns.create');
    }

    public function store(TurnRequest $req)
    {

        $turn = Turn::create($req->validated());

        return redirect()->route('turns.show', [ 'turn' => $turn->id ])->message('info', 'Turno creado correctamente');

    }

    public function show(Request $req, Turn $turn)
    {
        return view('turns.show', [ 
            'turn' => $turn 
        ]);
    }

    public function update(TurnRequest $req, Turn $turn)
    {

        $turn->update($req->validated());

        return redirect()->back()->message('info', 'Turno Actualizado');

    }

    public function apiRouteGetTurns()
    {

        $turns = Turn::select(['id','turn'])->where('active', 1)->get();

        return response()->json($turns);

    }
}
