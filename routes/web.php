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

Route::get('/', 'UserController@Index')->name('home');
Route::post('/logout', 'UserController@postLogout')->name('postLogout');

Route::group(['middleware' => 'visitor'], function() {

    Route::get('/login', 'UserController@login')->name('login');
    Route::post('/login', 'UserController@postLogin')->name('postLogin');
});

Route::group(['middleware' => 'admin'], function() {
    Route::get('/admin/', function(){
        return redirect()->route('admin.dashboard');
    });
    Route::get('/admin/dashboard', 'admin\UserController@dashboard') ->name('admin.dashboard');
    Route::get('/admin/employee/list', 'admin\EmployeeController@list')->name('admin.employee.list');
    Route::get('/admin/employee/add', 'admin\EmployeeController@create')->name('admin.employee.create');
    Route::post('/admin/employee/store', 'admin\EmployeeController@store') ->name('admin.employee.store');
    Route::post('/admin/employee/update/{id}', 'admin\EmployeeController@store') ->name('admin.employee.update');
    
    
});

Route::get('/home', 'HomeController@index')->name('home');
