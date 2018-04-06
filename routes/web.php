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
Route::get('/', 'IndexController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );
Auth::routes();
Route::group(['prefix' => 'admin' ,
              'middleware' => 'auth'], function() {
    Route::get('dashboard', 'HomeController@index')->name('admin.dashboard');
    Route::resource('alumno' , 'AlumnoController')->names([
      'index' => 'alumno.index'
      ]);
    Route::resource('competidor' , 'CompetidorController');


});
