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

    Route::resource('roles','frontend\RoleController');

    Route::resource('users','UserController');

});



//School Admin Routes

Route::group(['middleware' => ['auth']], function (){
    Route::get('/', 'frontend\DashboardController@index');
    Route::resource('students','frontend\StudentController');
    Route::resource('teachers','frontend\TeacherController');
    Route::get('/profile','frontend\TeacherController@profile')->name('profile');
});


Route::resource('schools','frontend\SchoolController');
