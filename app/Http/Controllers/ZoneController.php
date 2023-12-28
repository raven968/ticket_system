<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{ Zone };
use App\Http\Requests\ZoneRequest;

class ZoneController extends Controller
{
    public function index(Request $req)
    {
        
        $zones = Zone::all();

        return view('zones.index', [
            'zones' => $zones
        ]);

    }

    public function create(Request $req)
    {
        return view('zones.create');
    } 

    public function store(ZoneRequest $req)
    {

        $zone = Zone::create($req->validated());

        return redirect()->route('zones.show', [ 'zone' => $zone->id ])->message('info', 'Zona creada');

    }

    public function show(Request $req, Zone $zone)
    {

        return view('zones.show', [ 'zone' => $zone ]);

    }

    public function update(ZoneRequest $req, Zone $zone)
    {

        $zone->update($req->validated());

        return redirect()->back()->message('info', 'Zona Actualizada');

    }

}
