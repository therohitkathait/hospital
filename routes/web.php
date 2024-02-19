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
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class, 'index']);

Route::get('/home',[HomeController::class, 'redirect'])->middleware('auth', 'verified');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//-------------------------- admin routes-------------------------------------------------------------------
Route::get('/add_doctor_view',[AdminController::class, 'addview'])->name('add_doctor_view');

Route::post('/upload_doctor',[AdminController::class, 'upload']);

Route::get('/show_appointments',[AdminController::class, 'show_appointments']);

Route::get('/approved/{id}',[AdminController::class, 'approved']);

Route::get('/cancel/{id}',[AdminController::class, 'cancel']);

Route::get('/show_doctors',[AdminController::class, 'show_doctors']);

Route::get('/delete_doctor/{id}',[AdminController::class, 'delete_doctor']);

Route::get('/update_doctor/{id}',[AdminController::class, 'update_doctor']);

Route::post('/update_doctor/{id}',[AdminController::class, 'edit_doctor']);


//--------------------------- user routes--------------------------------------------------------------------
Route::get('/about',function(){
    return view('user.about');
});

Route::get('/doctors',function(){
    return view('user.doctors');
});

Route::get('/blog',function(){
    return view('user.blog');
});

Route::get('/contact',function(){
    return view('user.contact');
});

Route::post('/appointment',[HomeController::class, 'appointment']);

Route::get('/my_appointment',[HomeController::class, 'my_appointment']);

Route::get('/cancel_appoint/{id}',[HomeController::class, 'cancel_appoint']);
