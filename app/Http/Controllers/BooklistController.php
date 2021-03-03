<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class BooklistController extends Controller
{
    public function getBooklist()
    { 
        if (Auth::check()){
			$booklist = DB::table("booklists")->where("booker_email",Auth::user()->email)->get();
			$count = $booklist->count();
        	return view("booklist")->with("mybooklist",$booklist)->with('count',$count);
		}
		// else{
		// 	return view("booklist")->with("noresult","No booklist found");
		// }
    }
}
