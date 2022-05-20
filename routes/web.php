<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\CanditateController;

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

Auth::routes();

 //Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/',[CanditateController::class,'index']);
Route::get('admin_dashboard',[CanditateController::class,'admin_dashboard']);

//menues routes
Route::get('manage-test',[CanditateController::class,'manage_test']);
Route::get('manage-question',[CanditateController::class,'manage_question']);
Route::get('manage-technology',[CanditateController::class,'manage_technology']);
Route::get('manage-user',[CanditateController::class,'manage_user']);
