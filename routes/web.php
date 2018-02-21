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

// Route::get('/', function () {
//     return view('login');
// });

Route::get('/', [
  'uses' => 'UserController@getLogin',
  'as' => 'getLogin',
]);

Route::get('/register', function () {
    return view('register');
});

Route::post('register', [
    'uses' => 'UserController@register',
    'as' => 'register'
]);

Route::post('login', [
    'uses' => 'UserController@login',
    'as' => 'login'
]);

Route::get('/logout', [
  'uses' => 'UserController@getLogout',
  'as' => 'logout'
]);

Route::get('/users', [
  'uses' => 'UserController@getUsers',
  'as' => 'users',
  'middleware' => 'auth'
]);

Route::get('/updateUser/{id}', [
  'uses' => 'UserController@updateUser',
  'as' => 'updateUser',
  'middleware' => 'auth'
]);

Route::post('postUpdateUser', [
    'uses' => 'UserController@postUpdateUser',
    'as' => 'postUpdateUser'
]);



Route::get('/vacancies', function () {
    return view('vacancies');
});

Route::post('postAddNewVacancy', [
    'uses' => 'VacancyController@addNew',
    'as' => 'postAddNewVacancy'
]);

Route::get('getvacancies', [
    'uses' => 'VacancyController@get',
    'as' => 'getvacancies'
]);