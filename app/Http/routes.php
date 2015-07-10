<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
 * Top Page
 */
Route::get('/', ['middleware' => 'auth', 'uses' => 'SalesController@three']);

/*
 * login/logout
 */
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

/*
 * sales
 */
Route::get('sales/edit/{user_id}', ['middleware' => 'auth', 'uses' => 'SalesController@edit']);

/*
 * timecard
 */
Route::get('timecard', ['middleware' => 'auth', 'uses' => 'TimeCardsController@index']);
Route::get('timecard/register', ['middleware' => 'auth', 'uses' => 'TimeCardsController@getRegister']);
Route::post('timecard/register', ['middleware' => 'auth', 'uses' => 'TimeCardsController@postRegister']);
