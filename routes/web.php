<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
    //commentaire
});

Route::get('/nDeal/login',function () {
    return view('login');
});
Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');

Route::get('auth/google/call-back', [GoogleAuthController::class, 'callbackgoogle']);

Route::get('/nDeal/createAccount', function () {
    return view('createAccount');
});

Route::get('/accueil', function () {
    return view('accueil');
    //commentaire
});

Route::get('nDeal/completeform', function (){
    return view('othersinformation');
});

Route::get('/collections', function(){
    return view('acceuil');
});

