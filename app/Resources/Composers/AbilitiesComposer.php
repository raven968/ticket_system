<?php

namespace App\Resources\Composers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class AbilitiesComposer
{
    function compose(View $view){
        $view->with('abilities', $this->getVars());
    }

    private function getVars(){
    	$abilities = Auth::user()->getAbilities()->filter(function($ability){
    		return $ability->is_listable && Auth::user()->can($ability->name, $ability->entity_type);
    	});

		return $abilities;
    }
}