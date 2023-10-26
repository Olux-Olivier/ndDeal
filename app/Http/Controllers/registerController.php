<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class registerController extends Controller
{
    public function register(Request $request){
        $new_user = User::create([
            'name' => $request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'birthday' => $request->birthday,
            'phone' => $request->phone,
            'address' => $request->address,
            'google_id' => $request->google_id
        ]);

        Auth::login($new_user);
        
        return redirect()->intended('/nDeal/accueil');
    }

    public function next_register(Request $request){
        $id = $request->id;
        User::where('id', $id)
        ->update(['birthday' => $request->birthday, 'phone' => $request->phone, 'address' => $request->address]);
        return redirect()->intended('/nDeal/accueil');
    }
}
