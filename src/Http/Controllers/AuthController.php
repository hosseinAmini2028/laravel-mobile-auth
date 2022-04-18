<?php

namespace Nikahitec\LaravelMobileAuth\Http\Controllers;


class AuthController extends BaseController{

    public function index(){
        return view('LaravelMobileAuth::auth');
    }
}


