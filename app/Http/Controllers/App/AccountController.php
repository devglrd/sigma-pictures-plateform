<?php

namespace App\Http\Controllers\App;

use App\Mail\newPassword;
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
        if (!$user){
            return redirect("/")->with('error', "Un probleme est survenue");
        }
        $password = str_random(8);
        $user->password = bcrypt($password);
        $user->save();
        
        return view('app.entities.account.show')->with([
            'user' => $user,
            'password' => $password
        ]);
    }
    
    public function sendRequestLink(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if (!$user){
            return redirect()->back()->with('error', "Nous n'avons pas ce mail en base de donnée");
        }
        \Mail::to($request->email)->send(new newPassword($user));
        return redirect()->back()->with('success', "Un e-mail vous à été envoyé");
    }
}
