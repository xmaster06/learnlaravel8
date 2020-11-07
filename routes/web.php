<?php

use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserController;
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


Route::get("/users",[UserController::class,'all']);

Route::view("add","addmember");

Route::post("add",[MemberController::class, 'addData']);

Route::get("/list",[MemberController::class, 'list']);

Route::get("/list/delete/{id}", [MemberController::class, 'delete']);

Route::get("/list/edit/{id}", [MemberController::class, 'edit']);

Route::post("/list/edit", [MemberController::class, 'update'])->name("update");