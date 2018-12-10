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


Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index')->name('/');
Route::get('sobre-nosotros', 'HomeController@about')->name('about');
Route::get('marca', 'HomeController@brand')->name('marca');

Route::get('Inmobiliaria', 'HomeController@properties')->name('properties');
Route::get('results_inmobiliarias', 'HomeController@propertiesDetails')->name('properties_details');
Route::get('property_income', 'HomeController@propertyIncome')->name('property_income');
Route::get('blog', 'HomeController@blog')->name('blog');
Route::get('contactenos', 'HomeController@contact')->name('contact');

Route::middleware(['auth'])->group(function () {
    Route::resource('users', 'UserController')->middleware('has.permission:users.index');
    Route::resource('roles', 'RoleController')->middleware('has.permission:roles.index');
    Route::resource('permissions', 'PermissionController')->middleware('has.permission:permissions.index');
    Route::resource('clients', 'ClientController')->middleware('has.permission:clients.index');
    Route::resource('properties', 'PropertyController')->middleware('has.permission:properties.index');
    Route::resource('countries', 'Parameters\CountryController')->middleware('has.permission:countries.index');
    Route::get('panel', function () {
        return view('admin2.content');
    })->middleware('has.permission:parameters');
});