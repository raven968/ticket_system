<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

use App\Resources\Composers\{
    AbilitiesComposer
};

class ViewComposerProvider extends ServiceProvider
{
    function boot(){
    	View::composer('layout.general', AbilitiesComposer::class);
    }
}
