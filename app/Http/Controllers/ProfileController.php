<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user_infos;
use Auth;
use DB;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('profile');
        $profile = DB::table("user_infos")->where("email",Auth::user()->email)->get();
        return view("profile")->with("profile",$profile);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'fileUpload' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);
       if ($files = $request->file('fileUpload')) {
           $destinationPath =  public_path('images/profile/'); // upload path
           $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profileImage);
           $insert['photo'] = $profileImage;
           $insert['email'] = Auth::user()->email;
        }
        $check = user_infos::insertGetId($insert);
        return redirect()->back()->withSuccess('Great! Image has been successfully uploaded.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profile = DB::table("user_infos")->where("email",Auth::user()->email)->get();
        return view("profile")->with("profile",$profile);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        request()->validate([
            'fileUpload' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);
       if ($files = $request->file('fileUpload')) {
            $destinationPath =  public_path('images/profile/'); // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $user = user_infos::where('email', Auth::user()->email)->first();
            $insert['photo'] = $profileImage;
            $files->move($destinationPath, $profileImage);
        }
        $user->update($insert);
        return redirect()->back()->withSuccess('Great! Image has been successfully uploaded.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
