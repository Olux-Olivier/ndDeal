<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
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
Route::post('/nDeal/login', [loginController::class, 'login']);

Route::get('auth/google', [GooogleAuthController::class, 'redirect'])->name('google-auth');

Route::get('auth/google/call-back', [GooogleAuthController::class, 'callbackgoogle']);

Route::get('/nDeal/createAccount', function () {
    return view('createAccount');
});

Route::post('/nDeal/createAccount', [registerController::class, 'register']);

Route::get('/nDeal/accueil', function () {
    return view('accueil');
    //commentaire
})->name('acceuil');

Route::get('/nDeal/completeform', function (){
    return view('othersinformation');
})->middleware(['auth']);

Route::post('/nDeal/completeform',[registerController::class, 'next_register']);

Route::get('/collections', function(){
    return view('acceuil');
});

