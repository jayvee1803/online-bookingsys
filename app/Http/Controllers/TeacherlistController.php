<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\booklist;
use App\teacherlist;

class TeacherlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        if (booklist::where('booker_email', '=', $request->input("booker_email"))->where('courselist_name', '=', $request->input("courselist_name"))->exists()) {
           // user found
            return redirect()->back()->with('error', 'You have already booked in this course');
        }
        else{
            if($request->input("booker_email")=="null"){
                return redirect()->back()->with('warning', 'Please login to book this course');
            }else{
                $booklist = new booklist;
                $booklist->booker_email =    $request->input("booker_email");
                $booklist->teacher_name = $request->input("name");
                $booklist->subject = $request->input("subject");
                $booklist->courselist_name = $request->input("courselist_name");
                $booklist->courselist_desc = $request->input("courselist_desc");
                $booklist->time_range = $request->input("time");
                $booklist->save();
                return redirect()->back()->with('success', 'Booked Successful');
            }
        }
        
    }


    public function show($courselist_name)
    {
        $slugcourselist_name = str_replace("-", " ", $courselist_name);
        $subject2 = DB::table("teacherlists")->where("courselist_name",$slugcourselist_name)->get();
        return view("teacher")->with("subject2",$subject2);   
    }

    public function edit(teacherlist $teacherlist)
    {
        //
    }

    public function update(Request $request, teacherlist $teacherlist)
    {
        //
    }

    public function destroy(teacherlist $teacherlist)
    {
        //
    }
}
