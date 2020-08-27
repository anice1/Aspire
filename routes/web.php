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

Route::get('/', function () {
    return view('frontend.welcome');
});

Route::get('/student', function () {
    return view('frontend.students.index');
})->name('student');
Route::get('/create', function () {
    return view('frontend.students.create');
});

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
//    Route::post('/teacher/store', 'UserRegistrationController@create_teacher');

/*
|---------------------------------
| Student Registration Route
|---------------------------------
*/
//    Route::post('/student/create', 'UserRegistrationController@create_student');
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
//Route::group(['middleware' => ['auth']], function() {
//
//    Route::resource('roles','RoleController');
//
//    Route::resource('users','UserController');
//
//    Route::resource('students','StudentController');
//
//    Route::resource('teachers','TeacherController');
//
//
//});
