<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function all(){
       // return User::paginate(10);    // Sayfalamayı JSON olarak al
        $data = ['members'=>User::paginate(10)];
        return view('member',$data);
    }
}
