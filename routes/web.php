<?php

use App\Http\Controllers\iwebController;
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

Route::get('/', function () {
    return view('Admin.mexico');
});


Route::get('validate_dateborn', [iwebController::class, 'validate_dateborn'])->name('validate_dateborn');
Route::post('upload_constancia', [iwebController::class, 'upload_constancia'])->name('upload_constancia');
Route::get('get_colony', [iwebController::class, 'get_colony'])->name('get_colony');
Route::get('search_cp', [iwebController::class, 'search_cp'])->name('search_cp');
Route::get('search_sponsor', [iwebController::class, 'search_sponsor'])->name('search_cp');
Route::post('store', [iwebController::class, 'store'])->name('store');

