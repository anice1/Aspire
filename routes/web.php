<?php

use Illuminate\Support\Facades\Route;


/*
|---------------------------------
| Student Registration Route
|---------------------------------
*/


Auth::routes();

Route::group(['middleware' => ['auth']], function() {

    Route::resource('roles','controls\RoleController');


});



//School Admin Routes

Route::group(['middleware' => ['auth']], function (){
    Route::get('/', 'controls\DashboardController@index');
});



/**
     * I wrote custom middlewares to handle the bug of routing 
     * earliear before now a superadmin could visit the teachers and students route of all schools and vise versa
     */

     
Route::name('super.',['middleware'=>['superadmin','auth']])->group(function(){
    Route::resource('schools','controls\superadmin\SchoolController');
    Route::resource('users','UserController');

});


Route::name('school.',['middleware'=>['schooladmin','auth']])->group(function(){

    Route::resource('students','controls\schools\StudentController');
    Route::resource('teachers','controls\schools\TeacherController');

});


Route::name('student.',['middleware'=>['student','auth']])->group(function(){

    Route::resource('student', 'controls\students\StudentController');
});


Route::name('teacher.', ['middleware'=>['teacher','auth']])->group(function(){

    Route::get('student','controls\schools\StudentController@index');
    Route::resource('teacher', 'controls\teachers\TeacherController');
});