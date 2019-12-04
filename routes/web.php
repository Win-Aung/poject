<?php

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


Route::group(['namespace' => 'User'],function(){
	Route::resource('/','HomeController');
	Route::get('post','PostController@index');
	Route::get('post/{post}','PostController@post')->name('post');
	//Route::resource('post','PostController');
});



Route::group(['namespace' => 'Admin'],function(){

Route::get('admin/home','HomeController@index')->name('admin.home');

Route::resource('admin/user','UserController');	
Route::resource('admin/post','PostController');


Route::resource('admin/role','RoleController');


Route::resource('admin/permession','PermessionController');

Route::resource('admin/tag','TagController');
Route::resource('admin/category','CategoryController');

Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');

Route::post('admin-login', 'Auth\LoginController@login');

Route::resource('students','StudentController');
//class and rows
Route::resource('admin/class','ClassController');

Route::get('admin/classs', 'ClassController@search');

Route::post('admin/class/fetch', 'ClassController@fetch')->name('dynamicdependent.fetch');
//class and rows

//admin setting 
Route::resource('admin/adminsetting', 'AdminSettingController');
//admin setting

//teacher start
Route::resource('admin/teachers','TeacherController');
//student start
Route::resource('admin/students','StudentController');
//Assignment
Route::resource('admin/assignment', 'AssignmentController');
//teacherend
//appreve and no approve
Route::resource('admin/approve','ApproveController');
//Route::get('admin/approve','ApproveController@index');
Route::get('admin/pending/register','ApproveController@pending')->name('register.pending');
Route::get('/register/{id}/approve','ApproveController@approval')->name('register.approve');
//

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/profile','ProController');
Route::resource('/setting','SettingController');
Route::resource('/form','FormController');
Route::resource('/assigment', 'AssignmentController');
Route::resource('/contact','AboutController');

///chat
Route::get('/contacts', 'ContactsController@get');
Route::get('/conversation/{id}', 'ContactsController@getMessagesFor');
Route::post('/conversation/send', 'ContactsController@send');




