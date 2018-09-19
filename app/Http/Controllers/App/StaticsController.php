<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaticsController extends Controller
{
    
    
    //Example de controller
    public function test(Request $request)
    {
        return view('ma vue');
    }
    
    
    public function showHome(Request $request)
    {
        return view("app.entities.statics.home");
    }

    public function showAddUser(Request $request)
    {
        return view("app.entities.admin.addUser");
    }
}

