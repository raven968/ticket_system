<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

use App\Http\ViewComposers\{
    AbilitiesComposer
};

class ViewComposerProvider extends ServiceProvider
{
    function boot(){
    	View::composer('layout.general', AbilitiesComposer::class);
    }
}
