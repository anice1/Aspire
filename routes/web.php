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


Route::group(['middleware'=>['superadmin','auth']], function(){
    Route::resource('schools','controls\superadmin\SchoolController');
    Route::resource('users','UserController');

});

/**
     * I wrote my own custom middleware to handle the bug of routing 
     * earliear before now a superadmin could visit the teachers and students route of all schools and vise versa
     */

Route::group(['middleware'=>['schooladmin','auth']], function(){

    Route::resource('students','controls\schools\StudentController');
    Route::resource('teachers','controls\schools\TeacherController');

});
