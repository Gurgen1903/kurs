<?php



Route::auth();

Route::get('/', 'HomeController@index');
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::post('auth/logout', 'Auth\AuthController@logout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postStore');


// Works routes
Route::get('diplom-works', 'WorksController@diplomWorks');






//ADMIN ROUTES
Route::get('/admin/home', 'Admin\AdminController@index');
Route::get('add-work', 'Admin\AdminController@NewWork');
Route::post('upload-new-work', 'Admin\AdminController@uploadNewWork');
