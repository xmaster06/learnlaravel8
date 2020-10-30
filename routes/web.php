<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;

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

Route::get("/users",[Users::class,"index"]);                //Parametresiz controller çağırma

//Parametreli controller çağırma Controller fonksiyonu byName($name) şeklinde parametreyi karşılamalı
Route::get("/users/{name}", [Users::class, "byName"]);      

// Route::get("/users/{name}",function($name){     // Parametreli view çağırma
//     return view("users",["user"=>$name]);       // Burda direk view çağırıyoruz Controller kullanmıyoruz
// });

// Route::view("users","users");    // Parametresiz view çağırma
