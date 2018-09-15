<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function __construct() {
        $this->middleware('guest')->except('destroy');
    }

    public function create()
    {
        return view('sessions.login');
    }
    
    public function store()
    {
        $this->validate(request(), ['email' => 'required|email', 'password' => 'required']);
//        dd( auth()->attempt(request(['email','password'])));
//        dd(request());
        //attemot to autheticate the user
        if(! auth()->attempt(request(['email','password'])))
        {
//            dd("in");
            return back();
        }
        
        
        return redirect()->home();
    }
    
    public function destroy()
    {
        auth()->logout();
        
        return redirect()->home();
    }
}
