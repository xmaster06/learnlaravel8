<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    public function index(){
        return view("users",['users'=>['Mehmet','Ahmet','Ali','Emel','Herhangi biri']]);
    }
}
