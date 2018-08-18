<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\User;

class ImageController extends Controller
{
    public function uploadfile()
    {
        return view('fileUpload');
    }
    public function uploadImagePost(Request $request) {
      $request->validate([
            'fileToUpload' => 'required|file|max:1024',
        ]);
 
        $fileName = "image-" . Auth::id() . "." . request()->fileToUpload->getClientOriginalExtension();
        $request->fileToUpload->storeAs('profileImages', $fileName);
 
        //Storage::delete('/storage/profileImages/' . Auth::user()->image);
 
        $user = Auth::user();
        $user -> image = $fileName;
        $user -> save();
 
        return back();
    }

}
