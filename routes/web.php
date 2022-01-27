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
/*Route::get('/', function () {
    return view('welcome');
});*/
 
Auth::routes();
Route::get('/', 'siteController@home');
Route::get('/contact', 'siteController@contact');
Route::get('/about', 'siteController@about');

Route::get('/testhome', 'HomeController@test')->name('testhome');
Route::get('/test', 'TestController@index')->name('test');
Route::get('/home', 'HomeController@index')->name('home');


/**modification mesinformations */
Route::get('/client/edit', 'ClientController@edit')->name('/client/edit');
Route::post('/client/edit', 'ClientController@update');
Route::get('/­client/parametre','ClientController@parametre')->name('parametre_client');


Route::get('/client/image', 'ClientController@img')->name('/client/image');
Route::post('/client/colorize', 'ClientController@colorize')->name('client.colorize');


Route::get('/client/video', 'ClientController@vid')->name('/client/video');

/**password */
Route::get('/client/change-pwd', 'ClientController@change')->name('client.change');
Route::post('/client/update-pwd', 'ClientController@updatClientPwd')->name('change_password2');
Route::get('/client/check-pwd', 'ClientController@chkPassword')->name('change_password2');




/** forget password */



Route::get('password/reset')->uses('Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');

Route::post('password/email')->uses('Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');

Route::get('password/reset/{token}')->uses('Auth\ResetPasswordController@showResetForm')->name('password.reset');

Route::post('password/reset')->uses('Auth\ResetPasswordController@reset');
