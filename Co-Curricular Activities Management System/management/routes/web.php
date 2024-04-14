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
//logout
Route::get('/logout','AdminController@logout');


Route::get('/', function () {
   // return view('performer_login');
	return view('home');
});

Route::get('/backend', function () {
    return view('admin.admin_login');
});


//admin login
Route::post('/adminlogin','AdminController@login_dashboard');
Route::get('/admin_dashboard','AdminController@admin_dashboard');

//home to gallary
//Route::get('/gallery','gallary@galleryfunction');
//uporer ta lagbe
//home to home 


Route::get('/home','homeController@homefunction');

//home to news
Route::get('/news','homeController@newsfunction');

//Route::get('gallery/home','homeController@gallerytohome');
Route::get('/contact','homeController@contactfunction');

Route::get('/admin.admin_login','homeController@loginfunction');

Route::get('/gallery','homeController@galleryfunction');

Route::get('/addstudent','AddstudentController@addstudent');

Route::post('/save_student','AddstudentController@savestudent');


//all students
Route::get('/allstudent','AddstudentController@allstudent');

//dlt student
Route::get('/student_delete/{student_id}','AllstudentController@studentdelete');
//view student profile like fb 
Route::get('/student_view/{student_id}','AllstudentController@studentview');
//view student
Route::get('/studentview','AllstudentController@viewstudent'); //use korba na 

//edit student
Route::get('/student_edit/{student_id}','AllstudentController@studentedit');



//singer 
Route::get('/singer','singer@singerfunction');
//Route::get('/singer','AddstudentController@singerfunction');

Route::get('/anchor','singer@anchorfunction');

Route::get('/dancer','singer@dancerfunction');

Route::get('/designer','singer@designerfunction');

Route::get('/speaker','singer@speakerfunction');

//fee
Route::get('/tutionfee','TutionController@feefunction');



Route::get('/p1','speaker@p1function');
Route::get('/p2','speaker@p2function');


//search _ allstudent
Route::get('/search','singer@search');