<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\{PostulantRequest, ApiLoginRequest};
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Models\Postulant;

class PostulantController extends Controller
{
    public function register(PostulantRequest $req)
    {
        $postulant = Postulant::create($req->validated());
        $postulant->zones()->createMany(request()->zones);
        $postulant->areas()->createMany(request()->areas);
        $postulant->turns()->createMany(request()->turns);
        if($postulant->id){
            return response()->json([ 'status' => 1, 'message' => 'Cuenta creada exitosamente' ], 200);
        }else{
            return response()->json(['status' => 0, 'message' => 'Error']);
        }
    }

    function login(ApiLoginRequest $req){
        try {
            if(!$token = $req->login())
                return response()->json([ 'status' => false, 'message' => __('auth.failed') ], 401);

            $postulant = Postulant::where('id', auth()->user()->id)->with(['zones.zone', 'areas.area', 'turns.turn'])->first();

            return response()->json($postulant->toArray() + compact('token'));
        } catch (JWTException $e) {
            return response()->json([ 'status' => false, 'message' => __('auth.could_not_create_token') ], 500);
        }
    }
}
