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
/*
Route::get('/hello', function () {
    return '<h1>Ganesh Mandapati</h1>';
});
*/

/*Route ::get('/users/{id}/{name}',function($id,$name){
    return 'This is user '.$name.' 
    with id '.$id;
   });*/

   /*
   Route::get('/','PagesController@index');
   Route::get('/about','PagesController@about');
   Route::get('/services','PagesController@services');
   */


  Route::get('/','Main@testfunction');
  Route::view('/index','index');
  Route::view('/index2','index2');
  Route::post('/signup_val','Controller1@valid');
  Route::post('/login_submit','Controller1@login2');
  Route::get('/logout','Controller1@logout');
  Route::view('/contactus','contactus');
  Route::view('/signup','signup');
  Route::view('/login','login');
  Route::view('/file1','fileupload');
  Route::post('/submit5','dbcon@file_upload');
  Route::post('/dispv','Main@dispv1');
   ?>