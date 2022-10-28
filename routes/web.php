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

use App\Http\Controllers\SignupRegionalController;

Route::get('upload', 'ImageUploadController@upload');
Route::post('upload/store', 'ImageUploadController@store');
Route::post('delete', 'ImageUploadController@delete');

Route::view('/dorpzone', 'tstdropzone');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/subir', function () {
    return view('uploadfiles');
});

Route::get('/codegood', 'SignupRegionalController@Codegood');
Route::get('/searchsponsorValid','SignupRegionalController@searchsponsorValid');

Route::get('/searchsponsor', 'SignupRegionalController@searchsponsor');
Route::get('/playeras', 'SignupRegionalController@playeras');
Route::get('/email', 'SignupRegionalController@validateEmail');
Route::get('/identificacionvalid', 'SignupRegionalController@ValidateIdentification');

Route::get('/typedocuments', 'SignupRegionalController@gettypeDocuments');
Route::get('/banks', 'SignupRegionalController@getbanks');

Route::get('/states','SignupRegionalController@states');
Route::get('/municipality','SignupRegionalController@municipality');
Route::get('/ciudad','SignupRegionalController@ciudad');

Route::get('/index', 'SignupRegionalController@index');

Route::post('/saveper', 'SignupRegionalController@storePeru');

Route::post('/saveecu', 'SignupRegionalController@storeEcuador');

Route::post('/savecri', 'SignupRegionalController@storeCostaRica');

Route::get('/profile/mex', 'SignupRegionalController@mexico');

Route::POST('upload_constancia',[SignupRegionalController::class, 'upload_constancia'])->name('upload_constancia');
Route::get('test',[SignupRegionalController::class, 'test'])->name('test');

Route::get('/profile/per', 'SignupRegionalController@peru');

Route::get('/profile/ecu', 'SignupRegionalController@ecuador');

Route::get('/profile/cri', 'SignupRegionalController@costarica');

Route::get('/profile/pan', 'SignupRegionalController@panama');

Route::get('/profile/col', 'SignupRegionalController@colombia');