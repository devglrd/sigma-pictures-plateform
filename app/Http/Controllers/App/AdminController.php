<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
    
    public function showEditUser(Request $request)
    {
        return view("app.entities.admin.editUser");
    }
}
