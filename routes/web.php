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

     
Route::group(['middleware'=>['superadmin','auth']], function(){
    Route::resource('schools','controls\superadmin\SchoolController');
    Route::resource('users','UserController');

});


Route::group(['middleware'=>['schooladmin','auth']], function(){

    Route::resource('students','controls\schools\StudentController');
    Route::resource('teachers','controls\schools\TeacherController');

});


Route::group(['middleware'=>['student','auth']], function(){

    Route::resource('student', 'controls\students\StudentController');
});


Route::group(['middleware'=>['teacher','auth']], function(){

    Route::get('students','controls\schools\StudentController@index')->name('mystudents');
    Route::resource('teacher', 'controls\teachers\TeacherController');
});
