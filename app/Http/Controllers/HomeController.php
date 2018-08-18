<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', ['page' => 'home']);
    }
    public function uploadfile()
    {
        return view('profile');
    }
   
    public function store(Request $request)
    {
       
    
        $fileName = "image-" . Auth::id() . "." . request()->fileToUpload->getClientOriginalExtension();
        $request->fileToUpload->storeAs('upload', $fileName);

        $user = Auth::user();
        $user -> image = $fileName;
        $user -> save();
 
        return back();
     }
}
