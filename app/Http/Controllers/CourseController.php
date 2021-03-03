<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\booklist;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course = DB::table("courses")->get();
        return view("course")->with("course",$course);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        if (booklist::where('booker_email', '=', $request->input("booker_email"))->where('course_name', '=',$request->input("course_name"))->exists()) {
            return redirect()->back()->with('error', 'Sorry you have already booked in this course');
        }
        else{
            if($request->input("booker_email")=="null"){
                return redirect()->back()->with('warning', 'Please login to book this course');
            }else{
                $booklist = new booklist;
                $booklist->booker_email =    $request->input("booker_email");
                $booklist->teacher_name = $request->input("name");
                $booklist->course_name = $request->input("course_name");
                $booklist->save();
                return redirect()->back()->with('success', 'Booked Successful');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\course  $course
     * @return \Illuminate\Http\Response
     */
    public function show($course_name){
        $slugcourse_name = str_replace("-", " ", $course_name);
        $uppercased = Str::ucfirst($slugcourse_name);
        $courselist = DB::table("courselist")->where("course_name",$slugcourse_name)->get();
        $teacherlist = DB::table("teacherlists")->where("course_name",$slugcourse_name)->get();
        $course_learning = DB::table("course_learning")->where("course_name",$slugcourse_name)->get();
        $course_inclusion = DB::table("course_inclusion")->where("course_name",$slugcourse_name)->get();
        return view("courselist2")->withTitle($uppercased)->with("courselist",$courselist)->with("teacherlist",$teacherlist)->with("course_learning",$course_learning)->with("course_inclusion",$course_inclusion);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(course $course)
    {
        //
    }
}
