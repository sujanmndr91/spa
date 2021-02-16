<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index(){
        return view('auth.register');
    }

    public function create(Request $request){
        $this->validate($request, [
            'name' => 'required|max:128',
            'email' => 'required|email|max:255',
            'password' => 'required|min:6|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        auth()->attempt($request->only('email', 'password'));

        return view('admin.index');
    }
}
