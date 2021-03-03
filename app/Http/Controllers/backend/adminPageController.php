<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class adminPageController extends Controller
{
    public function dashboard()
    {
        $totprice = DB::table("booklists")->where("updated_at", '>=', Carbon::today())->sum('price');
        $booklist = DB::table("booklists")->where("updated_at", '>=', Carbon::today())->get();
        $instructor = DB::table("users")->where("is_instructor", 1)->where("updated_at", '>=', Carbon::today())->get();
        $student = DB::table("users")->where("is_instructor", 0)->where("updated_at", '>=', Carbon::today())->get();
        $count = $booklist->count();
        $instructor = $instructor->count();
        $student = $student->count();
        return view('backend.dashboard')->with('totprice',$totprice)->with('count',$count)
        ->with('instructor',$instructor)
        ->with('student',$student);
    }
}
