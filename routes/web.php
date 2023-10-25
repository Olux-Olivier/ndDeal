<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GooogleAuthController;

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
Route::get('auth/google', [GooogleAuthController::class, 'redirect'])->name('google-auth');

Route::get('auth/google/call-back', [GooogleAuthController::class, 'callbackgoogle']);

Route::get('/nDeal/createAccount', function () {
    return view('createAccount');
});

Route::get('/nDeal/accueil', function () {
    return view('accueil');
    //commentaire
})->name('acceuil');

Route::get('/nDeal/completeform', function (){
    return view('othersinformation');
})->name('completeform');

Route::get('/collections', function(){
    return view('acceuil');
});

