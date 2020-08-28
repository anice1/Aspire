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



// Route::resource('/teacher','TeacherController');
// Route::get('/teacher', 'TeacherController@index');


/*
|---------------------------------
| Admin Registration Route
|---------------------------------
*/
//    Route::get('/register', 'UserRegistrationController@register_page');
//    Route::post('/register/store', 'UserRegistrationController@create_admin');
//
/*
|---------------------------------
| Teacher Registration Route
|---------------------------------
*/

/*
|---------------------------------
| Student Registration Route
|---------------------------------
*/
//
Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth']], function() {
//
    Route::resource('roles','RoleController');
//
    Route::resource('users','UserController');
//
//    Route::resource('students','StudentController');
//
//
//
});
Route::group(['middleware' => ['auth']], function(){

    Route::get('/', function () {
        return view('frontend.welcome');
    });

    Route::resource('students','frontend\StudentController');
    Route::resource('schools','frontend\SchoolController');
    Route::resource('teachers','frontend\TeacherController');



    Route::get('teacher', function () {
        return view('frontend.teachers.create');
    });

});
