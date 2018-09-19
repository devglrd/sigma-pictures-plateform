<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function showLoginAdmin()
    {
        return view('app.entities.admin.login');
    }
}
