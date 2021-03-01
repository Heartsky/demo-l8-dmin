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



Auth::routes();
Route::get('/export', 'App\Http\Controllers\Backend\ExportController@index')->name('export');


Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
    Route::get('profile', ['as' => 'profile.show', 'uses' => 'App\Http\Controllers\ProfileController@show']);
	Route::get('setting', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('setting', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade');
	 Route::get('map', function () {return view('pages.maps');})->name('map');
	 Route::get('icons', function () {return view('pages.icons');})->name('icons');
	 Route::get('table-list', function () {return view('pages.tables');})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);

    Route::get('user-management', ['as' => 'master.user_management', 'uses' => 'App\Http\Controllers\MasterManagementController@userList']);
    Route::get('user-management/{id}', ['as' => 'master.user_detail', 'uses' => 'App\Http\Controllers\MasterManagementController@userDetail']);
    Route::get('user-management/{id}/edit', ['as' => 'master.user_edit', 'uses' => 'App\Http\Controllers\MasterManagementController@userEdit']);
    Route::put('user-management/{id}', ['as' => 'master.user_update', 'uses' => 'App\Http\Controllers\MasterManagementController@userUpdate']);
    Route::get('customer-management', ['as' => 'master.customer_management', 'uses' => 'App\Http\Controllers\MasterManagementController@customerManagement']);
    Route::get('employee-management', ['as' => 'master.employee_management', 'uses' => 'App\Http\Controllers\MasterManagementController@customerManagement']);
    Route::get('company-management', ['as' => 'master.employee_management', 'uses' => 'App\Http\Controllers\MasterManagementController@customerManagement']);
    Route::get('st-management', ['as' => 'master.st_management', 'uses' => 'App\Http\Controllers\MasterManagementController@customerManagement']);
    Route::get('tsv-management', ['as' => 'master.tsv_management', 'uses' => 'App\Http\Controllers\MasterManagementController@customerManagement']);

});

