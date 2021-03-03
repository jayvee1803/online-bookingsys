<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::resource("course","CourseController");
Route::post('/course/{course_name}','CourseController@store');

//Route::get("/profile","PageController@profile");
Route::get("/aboutus","PageController@aboutus");

Route::get("register","PageController@register");
Route::get("instructor/register","PageController@instructorRegister");


Route::get('/teacher/{courselist_name}','TeacherlistController@show');
Route::post('/teacher/{courselist_name}','TeacherlistController@store');

//Auth::routes(['verify' => true]);
//Route::get("/home","PageController@home")->middleware('verified');
Auth::routes();
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}/{hash}','Auth\VerificationController@verify')->name('verification.verify');
Route::post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

Route::get("/home","PageController@home");
Route::get('instructor/home', 'PageController@instructorHome')->name('instructor.home')->middleware('is_instructor');

Route::get("/my-booklist/","BooklistController@getBooklist");

Route::get('profile', 'ProfileController@index');
Route::post('save', 'ProfileController@update'); //for updating profile pic


//admin routes
Route::get("/admin/dashboard","backend\adminPageController@dashboard");
