<?php

namespace App\Http\Controllers\App;

use App\Mail\showPassword;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        return view('app.entities.admin.dashboard');
    }
    public function showLoginAdmin()
    {
        return view('app.entities.admin.login');
    }
    public function showAdminList()
    {
        return view('app.entities.admin.UserList');
    }
    
    public function showAddUser(Request $request)
    {
        return view("app.entities.admin.addUser");
    }
    
    public function editUser(Request $request, $id)
    {
        $user = User::where('id', $id)->first();
        return view("app.entities.admin.user.edit")->with([
            'user' => $user
        ]);
    }
    
    public function postEditUser(Request $request, $id)
    {
        if (!$request->first_name ||!$request->last_name ||!$request->email){
            return redirect()->back()->with("error", "Un problème est survenue");
        }
        
        $user = User::where("id", $id)->first();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->save();
        return redirect()->action('App\AdminController@showAllUser')->with('success', "Modification du compte ". $request->first_name . $request->last_name);
    
    }
    
    public function showAllUser(Request $request)
    {
        $users = User::orderBy('id', "DESC")->get();
        return view('app.entities.admin.user.index')->with([
            'users' => $users
        ]);
    }
    
    public function createUser(Request $request)
    {
        return view("app.entities.admin.user.create");
    }
    
    public function postCreateUser(Request $request)
    {
        if (!$request->first_name ||!$request->last_name ||!$request->email){
            return redirect()->back()->with("error", "Un problème est survenue");
        }
        $password = str_random(8);
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = bcrypt($password);
        $user->is_admin = 0;
        $user->token_url = str_random(32);
        $user->save();
    
        \Mail::to($user->email)->send(new showPassword($user));
    
        return redirect()->action('App\AdminController@showAllUser')->with('success', "Un utilisateur à été ajouté");
    }
    
    public function deleteUser(Request $request, $id)
    {
        $user = User::where('id', $id)->first();
        $user->delete();
        
        return redirect()->back()->with('success', "Un utilisateur à été suprimé");
    }
}
