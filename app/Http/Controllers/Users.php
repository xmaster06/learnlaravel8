<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Users extends Controller
{
    public function index(Request $req){
        $req->validate([
            'username'  =>  'required | max:10',
            'password'  =>  'required | min:5'
        ]);
        return $req->input();
    }

    public function getUser(){
        return User::all();
    }
}
