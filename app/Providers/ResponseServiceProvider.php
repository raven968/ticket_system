<?php

namespace App\Providers;

use Illuminate\Support\{ ServiceProvider, Facades\Response };
use Illuminate\Http\RedirectResponse;

class ResponseServiceProvider extends ServiceProvider
{
    function boot(){
        Response::macro('toastr', function ($type, $message, $status = 200, $data = []) {
            return Response::json([
                'handler' => 'toastr',
                'type' => $type,
                'message' => $message,
                'data' => $data
            ], $status);
        });

        RedirectResponse::macro('message', function ($type, $message) {
            return $this->with('message', [
                'type' => $type,
                'message' => $message,
            ]);
        });
    }
}
