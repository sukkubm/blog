<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegisterController extends Controller
{
    //
    public function create()
    {
        return view('register.create');
    }
    
    public function store()
    {
        //validate
        $this->validate(request(), ['name' => 'required','email' => 'required|email', 'password' => 'required|confirmed']);
        
        //save
        $user = User::create(['name' => request('name'), 'email'=> request('email'), 'password' => bcrypt(request('password'))]);
        
        //sign in
        auth()->login($user);
        
        return redirect()->home();
        
    }
}
