<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class PageController extends Controller
{
    public function home(){
        $course = DB::table("courses")->get();
        if(Auth::check()){
            $booklist = DB::table("booklists")->where("booker_email", Auth::user()->email)->get();
            $count = $booklist->count();
            return view("home")->with("courses",$course)->with('count',$count);
        }else{
            return view("home")->with("courses",$course);
        }

    }

    
    public function instructorHome()
    {
        return view('instructor.Home');
    }
    
    public function mybooklist(){
        return view("booklist");
    }

    public function aboutus(){
    	return view('aboutus');
    }

    public function profile(){
        /*$profile = DB::table("users")->where("email",Auth::user()->email)->get();
        return view("profile")->with("profile",$profile);*/
        return view("profile");
    }

    public function register(){
    	return view('register');
    }
    public function instructorRegister()
    {
        return view('Auth.register')->with('role','instructor');
    }


    public function try(){
        return view('try');
    }
}
