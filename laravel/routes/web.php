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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});



Auth::routes();
Route::get('/home', 'HomeController@index');
route::get('/home/read_blog','HomeController@read_blog');
route::get('/home/show_doctors','HomeController@show_doctors');

Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');

Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
Route::get('/admin/show', 'AdminController@show');
Route::get("/admin/doctors",'AdminController@doctors_form');
Route::post("/admin/store",'AdminController@store');
Route::get("/admin/show_doctors",'AdminController@show_doctors');
Route::get('/admin/change_admin','AdminController@change_admin');
Route::get("/admin/prescribe",'AdminController@student_entry');
Route::post("/admin/entry",'AdminController@entry');
Route::get("/admin/show_entry",'AdminController@show_entry');
Route::get("/admin/search",'AdminController@search');


Route::get("/search",'SearchController@index');

Route::get("/search/1",'SearchController@search');


Route::group(['middleware' => ['auth:admin']],function ()
{
route::resource('blog','BlogController');

}
);





//Route::prefix('admin')->group(function()
////



//});

