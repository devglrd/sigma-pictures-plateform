<?php

namespace App\Http\Controllers\App\Files;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FilesController extends Controller
{
    public function showAFile(Request $request)
    {
        dd($request);
    }
    
    public function postFile(Request $request)
    {
        
        if ($request->hasFile("file")){
            $file = $this->uploadImage($request->file('file'), $request->name);
        }
    }
    
    public function showUserFile(Request $request)
    {
        
        if (!Auth::check()){
            return redirect()->back()->with("error", "vous devez être connectée pour acoir accès a cette page");
        }
        
        return view('app.entities.files.index');
    }
}
