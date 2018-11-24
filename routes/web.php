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
    Route::post('/admin/employee/update/{id}', 'admin\EmployeeController@update') ->name('admin.employee.update');
    Route::get('/admin/employee/detail/{id}', 'admin\EmployeeController@detail') ->name('admin.employee.detail');
    
    Route::get('/admin/contract/add-new', 'admin\ContractController@addNew')->name('admin.contract.addNew');
    Route::get('/admin/contract/add-Renew', 'admin\ContractController@addRenew')->name('admin.contract.addRenew');
    Route::get('/admin/contract/list', 'admin\ContractController@list')->name('admin.contract.list');
    Route::get('/admin/contract/form/{id}', 'admin\ContractController@form')->name('admin.contract.form');
    Route::post('/admin/contract/store', 'admin\ContractController@store') ->name('admin.contract.store');
    Route::post('/admin/contract/update/{id}', 'admin\ContractController@update') ->name('admin.contract.update');
    Route::get('/admin/contract/edit/{id}', 'admin\ContractController@edit')->name('admin.contract.edit');
    Route::get('/admin/contract/print/{id}', 'admin\ContractController@edit')->name('admin.contract.edit');
    
    Route::get('/admin/training/add', 'admin\TrainingController@add')->name('admin.training.add');
    Route::get('/admin/training/list', 'admin\TrainingController@list')->name('admin.training.list');
    Route::get('/admin/training/form/{id}', 'admin\TrainingController@form')->name('admin.training.form');
    Route::get('/admin/training/edit/{id}', 'admin\TrainingController@edit')->name('admin.training.edit');
    Route::post('/admin/training/store', 'admin\TrainingController@store') ->name('admin.training.store');
    Route::post('/admin/training/update/{id}', 'admin\TrainingController@update') ->name('admin.training.update');
    
    Route::get('/admin/data_master', 'admin\UserController@dataMaster') ->name('admin.dataMaster');
    
    // Route::get('/admin/employee/detail/{id}', 'admin\EmployeeController@detail') ->name('admin.employee.detail');
    
});

Route::get('/home', 'HomeController@index')->name('home');
