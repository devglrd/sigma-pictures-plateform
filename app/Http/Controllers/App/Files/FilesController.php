<?php

namespace App\Http\Controllers\App\Files;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
}
