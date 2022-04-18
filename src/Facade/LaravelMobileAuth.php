<?php

namespace Nikahitec\LaravelMobileAuth\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * @method static string doSomeTing()
 * 
 * 
 * @see \Nikahitec\LaravelMobileAuth\LaravelMobileAuth
 */
class LaravelMobileAuth extends Facade{

    protected static function getFacadeAccessor(){
        return 'LaravelMobileAuth';
    }
}