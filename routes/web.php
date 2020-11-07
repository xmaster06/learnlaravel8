<?php
use App\Http\Controllers\Members;
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

Route::get('members',[Members::class,'tum']);

Route::get('members/{id}', [Members::class, 'tek']);

Route::get('ekle', [Members::class, 'ekle']);

Route::get('guncelle/{id}', [Members::class, 'guncelle']);

Route::get('sil/{id}', [Members::class, 'sil']);