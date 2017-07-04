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
Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');

Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
Route::get('/admin/show', 'AdminController@show');
Route::get("/admin/doctors",'AdminController@doctors_form');
Route::post("/admin/store",'AdminController@store');
Route::get("/admin/show_doctors",'AdminController@show_doctors');


Route::group(['middleware' => ['auth:admin']],function ()
{
route::resource('blog','BlogController');

}
);





//Route::prefix('admin')->group(function()
////



//});

