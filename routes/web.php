<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


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



Route::get('/',[HomeController::Class,'index']);

Route::get('/home',[HomeController::Class,'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/add_doctor_view',[AdminController::Class,'addview']);
Route::post('/upload_doctor',[AdminController::Class,'upload']);
Route::post('/appointment',[HomeController::Class,'appointment']);
Route::get('/myappointment',[HomeController::Class,'myappointment']);
Route::get('/cancel_appoint/{id}',[HomeController::Class,'cancel_appoint']);
Route::get('/show_appoint',[AdminController::Class,'show_appoint']);
Route::get('/approve_appoint/{id}',[AdminController::Class,'approve_appoint']);
Route::get('/deny_appoint/{id}',[AdminController::Class,'deny_appoint']);


