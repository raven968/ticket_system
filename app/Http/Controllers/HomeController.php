<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Postulant, State, City, Area, EducationLevel };

class HomeController extends Controller
{
    public function index(Request $req)
    {

        $postulants = Postulant::select(['*'])
                        ->when($req->state, function($query) use($req) {
                            return $query->where('state', $req->state);
                        })
                        ->when($req->city, function($query) use($req) {
                            return $query->where('city', $req->city);
                        })
                        ->when($req->area, function($query) use($req) {
                            return $query->where(function($query) use($req) {
                                return $query->where('specialty1', $req->area)
                                            ->orWhere('specialty2', $req->area)
                                            ->orWhere('specialty3', $req->area);
                            });     
                        })
                        ->when($req->education_level_id, function($query) use($req) {
                            return $query->where('education_level_id', $req->education_level_id);
                        })->paginate(20);

        // FILTERS DATA
        $states = State::all();
        $state = 0;
        
        if($req->state){
            $state = State::where('state', $req->state)->first();
        }

        $cities = City::when($req->state, function($query) use($req, $state) {
            return $query->where('state_id',$state->id);
        })->get();

        $areas = Area::where('active', 1)->get();

        $education_levels = EducationLevel::where('active', 1)->get();

        return view('home',[
            'postulants' => $postulants,
            'states' => $states,
            'cities' => $cities,
            'areas' => $areas,
            'education_levels' => $education_levels
        ]);
    }

    public function getCitiesByState(Request $req)
    {
        if($req->state){
            $state = State::where('state', $req->state)->first();
        }

        $cities = City::when($req->state, function($query) use($req, $state) {
            return $query->where('state_id',$state->id);
        })->get();

        return response()->json($cities);
    }
}
