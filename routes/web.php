<?php

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
    return redirect("about");   // Route redirect etme
});


Route::get('/about', function () {  // about.blade.php getFonksiyonu ile çağırma
    return view('about');
});

Route::view('/about','about')->name("about");  // about.blade.php viewFonksyionu ile çağırma
Route::view('/contact', 'contact')->name("contact"); // Rota isimlendirme

Route::get('/about/{name}', function ($name) {  // getFonksiyonu ile parametre alma
    return view('about',['isim'=>$name]);
});