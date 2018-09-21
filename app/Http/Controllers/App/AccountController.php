<?php

namespace App\Http\Controllers\App;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function showAccount(Request $request, $token)
    {
        if (Auth::check()){
            Auth::logout();
        }
        $user = User::where('token_url', $token)->first();
        $password = str_random(8);
        $user->password = bcrypt($password);
        $user->save();
        
        return view('app.entities.account.show')->with([
            'user' => $user,
            'password' => $password
        ]);
    }
}
