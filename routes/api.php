<?php

use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */
Route::get('getProperties/{per_page}', 'PropertyController@getProperties');
Route::get('getClients/{per_page}', 'ClientController@getClients');
Route::get('getCivilStatus', 'GeneralsController@getCivilStatus');
Route::get('getCountry', 'GeneralsController@getCountry');
Route::get('getDepartament/{country_id}', 'GeneralsController@getDepartament');
Route::get('getMunicipality/{departament_id}', 'GeneralsController@getMunicipality');
Route::get('getLocation/{municipality_id}', 'GeneralsController@getLocation');
Route::get('getNeighborhood/{location_id}', 'GeneralsController@getNeighborhood');
Route::get('getIdentification', 'GeneralsController@getIdentification');
Route::resource('clients', 'ClientController');

Route::group(['prefix' => 'auth'], function () {
    Route::post('login', 'Auth\AuthController@login');
    Route::post('signup', 'Auth\AuthController@signup');

    Route::group(['middleware' => 'auth:api'], function () {
        Route::get('logout', 'Auth\AuthController@logout');
        Route::resource('users', 'UserController');
        Route::resource('roles', 'RoleController');
        Route::resource('permissions', 'PermissionController');
        Route::resource('clients', 'ClientController');
        Route::resource('properties', 'PropertyController');
    });
});