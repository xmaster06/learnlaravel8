<?php

use App\Http\Controllers\AddMember;
use Illuminate\Support\Facades\Route;
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

Route::view("add","add");

Route::post("add",[AddMember::class,"add"]);