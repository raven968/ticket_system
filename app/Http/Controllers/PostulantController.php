<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\{PostulantRequest, ApiLoginRequest};
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Models\Postulant;
use Illuminate\Support\Facades\Storage;

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

    public function login(ApiLoginRequest $req)
    {
        try {
            if(!$token = $req->login())
                return response()->json([ 'status' => false, 'message' => __('auth.failed') ], 401);

            $postulant = Postulant::where('id', auth()->user()->id)->with(['zones.zone', 'areas.area', 'turns.turn'])->first();

            return response()->json($postulant->toArray() + compact('token'));
        } catch (JWTException $e) {
            return response()->json([ 'status' => false, 'message' => __('auth.could_not_create_token') ], 500);
        }
    }

    public function me(Request $req)
    {
        $postulant = Postulant::where('id', $req->id)->with(['zones.zone', 'areas.area', 'turns.turn'])->first();

        return response()->json($postulant->toArray());

    }

    public function update(PostulantRequest $req)
    {
        $postulant = Postulant::find(request()->user_id);

        $postulant->zones()->delete();
        $postulant->areas()->delete();
        $postulant->turns()->delete();

        $postulant->zones()->createMany(request()->zones);
        $postulant->areas()->createMany(request()->areas);
        $postulant->turns()->createMany(request()->turns);

        $postulant->update($req->validated());

        return response()->json([ 'success' => 1, 'message' => 'Guardado exitosamente' ]);
    }

    public function uploadPhoto(Request $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path  = 'storage/' . Storage::disk('public')->putFile('profile_photo', $request->file('image'));

            auth()->user()->update([
                'image' => $path
            ]);

            return response()->json(['message' => 'Foto subida con éxito']);
        } else {
            return response()->json(['error' => 'No se recibió ninguna foto'], 400);
        }
    }

    public function getPhoto(Request $req)
    {
        $postulant = Postulant::where('id', $req->id)->with(['zones.zone', 'areas.area', 'turns.turn'])->first();

        return response()->json([ 'image' => $postulant->image]);

    }
}
