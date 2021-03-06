<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

$this->post('login', 'Auth\LoginController@login')->middleware('permission');
Route::get('/team', 'Team\TeamController@index');

Route::get('/project', 'Project\ProjectController@index');
Route::any('/projectUpImg', 'Project\ProjectController@projectUpImg');




Route::get('/adddesign', 'Project\ProjectController@addDesign');



Route::any('/upinfo', 'Common\CommonController@upInfo');


Route::get('/course', 'Team\CourseController@index');
Route::get('/webcourse', 'Team\CourseController@webCourse');
Route::get('/designcourse', 'Team\CourseController@designCourse');
Route::get('/backcourse', 'Team\CourseController@backCourse');

Route::get('/admin', 'Admin\AdminController@index');



Route::get('/manage', 'Manage\ManageController@index');
Route::get('/department', 'Manage\ManageController@department');
Route::any('/addDepartment','Manage\ManageController@addDepartment');