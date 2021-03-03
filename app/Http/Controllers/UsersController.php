<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class UsersController extends Controller
{
    public function index(){
        return view('login');
    }

    public function login(Request $request){

        request()->validate([
        'email' => 'required',
        'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
           return redirect('/');
        } else{
            return back()->with('message','Account is not Valid!');   
        }
        

    }
}
