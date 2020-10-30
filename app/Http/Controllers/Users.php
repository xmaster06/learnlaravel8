<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    public function index(){
        return view("users");
    }

    public function byName($user)
    {
        return view("users", ["user" => $user]);
    }

    public function api(){
        return ["name"=>"Hakan","surname"=>"Turko"];
    }
}
