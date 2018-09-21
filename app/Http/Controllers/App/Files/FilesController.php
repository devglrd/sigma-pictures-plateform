<?php

namespace App\Http\Controllers\App\Files;

use App\Models\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FilesController extends Controller
{
    
    public function create()
    {
        return view("app.entities.files.create");
    }
    
    public function showAFile(Request $request)
    {
        dd($request);
    }
    
    public function postFile(Request $request)
    {
        
        //dd(storage_path('app/public/uploads/files'));
        if (!$request->hasFile("file")) {
            return redirect()->back()->with('error', 'Vous devez passer un fichier');
        }
        //dd($request->file->getClientOriginalExtension());
        if ($request->file->getClientOriginalExtension() === "png" || $request->file->getClientOriginalExtension() === "raw" || $request->file->getClientOriginalExtension() === "mov" || $request->file->getClientOriginalExtension() === "mp4" || $request->file->getClientOriginalExtension() === "jpeg" || $request->file->getClientOriginalExtension() === "wave" || $request->file->getClientOriginalExtension() === "MP4") {
            if ($request->file->getClientOriginalExtension() == "png" || $request->file->getClientOriginalExtension() == "jpeg") {
                $file = $this->uploadImage($request->file('file'), $request->name, $request->get('content'), str_slug($request->name));
                return redirect()->back()->with('success', "Votre fichier a bien été enregistré");
            } else {
                //make for each extension we want
                $filename = $request->file->getClientOriginalName();
                $filename = str_slug($filename) . $request->file->getClientOriginalName();
                $path = '/files';
                $file = Storage::disk('public_uploads')->put($path, request()->file('file'));
                //$pathDb = '/uploads/' . $file;
                $pathDb = asset('uploads/' . $file);
                $file = File::create([
                    'file'       => isset($pathDb) ? $pathDb : '',
                    'type'       => $request->file ? $request->file->getClientOriginalExtension() : '',
                    'name'       => $request->name,
                    'slug'       => $filename,
                    'content'    => $request->get('content'),
                    'fk_user_id' => Auth::check() ? Auth::user()->id : 0,
                ]);
                return redirect()->back()->with('success', "Votre fichier a bien été enregistré");
            }
    
        }else{
            return redirect()->back()->with('error', 'Fichier non pris en charge');
        }
        
        
    }
    
    public function showUserFile(Request $request)
    {
        
        if (!Auth::check()) {
            return redirect()->back()->with("error", "vous devez être connectée pour acoir accès a cette page");
        }
        
        return view('app.entities.files.index');
    }
}
