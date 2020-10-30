<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    public function index($user){
        echo $user;
        echo " Hello from User Controller";
    }

    public function api(){
        return ["name"=>"Hakan","surname"=>"Turko"];
    }
}
