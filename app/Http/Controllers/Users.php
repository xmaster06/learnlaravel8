<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Users extends Controller
{
    public function index(Request $req){
        $data = ['data' => $req->input()];
        return view("users",$data);
    }
}
