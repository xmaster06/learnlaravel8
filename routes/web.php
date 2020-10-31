<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view("welcome");   // Route redirect etme
});


//Route::get("users",[Users::class,'index']);
//Route::post("users", [Users::class, 'index']);


Route::get("users", [Users::class, 'index']);
Route::post("users",[Users::class,'index']);

Route::post("/login",[UserAuth::class,'userLogin']);

Route::view("/profile", "profile");

Route::get("/login", function () {
    if (session()->has('user')) {
        return redirect("profile");
    }else{
        return view("login");
    }
})->name("logout");

Route::get("/logout",function(){
    if(session()->has('user')){
        session()->pull('user');
    }
    return redirect("login");
})->name("logout");