<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GooogleAuthController extends Controller
{
    public function redirect(){
        return Socialite::driver('google')->redirect();
    }

    public function callbackgoogle(){
        try{
            $google_user = Socialite::driver('google')->user();
            $user = User::where('google_id', $google_user->getId())->first();
            dd($google_user);
            if(!$user){
                $new_user = User::create([
                    'name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId(),
                ]);

                Auth::login($new_user);
               
                return redirect()->intended('completeform');
            }else{
                Auth::login($user);
                
                return redirect()->intended('dashboard');
            }
       }catch (\Throwable $th){
            dd('Error ...');
       }
    }
}
