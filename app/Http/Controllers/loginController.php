<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login(Request $request){
        $credentials = $request->only('email', 'password');

       
        if(Auth::attempt($credentials)){
            return redirect()->intended('/nDeal/accueil');
        }else{
            return back()->withErrors([
                'email' => 'Aucun utilisateur trouver'
            ]);
        }
    }
}
