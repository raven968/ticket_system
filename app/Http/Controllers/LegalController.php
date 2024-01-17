<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegalController extends Controller
{
    public function aviso()
    {
        return view('aviso');
    }

    public function terminos()
    {
        $file_path = public_path('pdf/terms.pdf');

        if(file_exists($file_path))
        {
            return response()->file($file_path, ['Content-Type' => 'application/pdf']);
        }else{
            abort(404);
        }

    }
}
