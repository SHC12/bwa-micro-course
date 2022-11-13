<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Mentor Routes
Route::get('mentors','App\Http\Controllers\MentorController@index');
Route::get('mentors/{id}','App\Http\Controllers\MentorController@show');
Route::post('mentors','App\Http\Controllers\MentorController@create');
Route::put('mentors/{id}','App\Http\Controllers\MentorController@update');
Route::delete('mentors/{id}','App\Http\Controllers\MentorController@destroy');

// Course Router

Route::post('courses','App\Http\Controllers\CourseController@create');
Route::get('courses','App\Http\Controllers\CourseController@index');
Route::get('courses/{id}','App\Http\Controllers\CourseController@show');
Route::put('courses/{id}','App\Http\Controllers\CourseController@update');
Route::delete('courses/{id}','App\Http\Controllers\CourseController@destroy');

// Chapter Router
Route::post('chapters','App\Http\Controllers\ChapterController@create');
Route::get('chapters','App\Http\Controllers\ChapterController@index');
Route::get('chapters/{id}','App\Http\Controllers\ChapterController@show');
Route::delete('chapters/{id}','App\Http\Controllers\ChapterController@destroy');
Route::put('chapters/{id}','App\Http\Controllers\ChapterController@update');


// Lesson Router
Route::post('lessons','App\Http\Controllers\LessonController@create');
Route::get('lessons','App\Http\Controllers\LessonController@index');
Route::get('lessons/{id}','App\Http\Controllers\LessonController@show');
Route::delete('lessons/{id}','App\Http\Controllers\LessonController@destroy');
Route::put('lessons/{id}','App\Http\Controllers\LessonController@update');


// Image Course Router
Route::post('image-courses','App\Http\Controllers\ImageCourseController@create');
Route::delete('image-courses/{id}','App\Http\Controllers\ImageCourseController@destroy');


// My Course Router
Route::post('my-courses','App\Http\Controllers\MyCourseController@create');
Route::post('my-courses/premium','App\Http\Controllers\MyCourseController@createPremiumAccess');
Route::get('my-courses','App\Http\Controllers\MyCourseController@index');

// Review Router
Route::post('reviews','App\Http\Controllers\ReviewController@create');
Route::put('reviews/{id}','App\Http\Controllers\ReviewController@update');
Route::delete('reviews/{id}','App\Http\Controllers\ReviewController@destroy');
