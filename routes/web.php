<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Controller;

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
    return view('welcome');
});



Auth::routes();

Route::resource('categories', 'CategoryController');
Route::resource('accounts', 'AccountController');
Route::resource('extracts', 'ExtractController');

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('clients', 'ClientController');
Route::resource('providers', 'ProviderController');
Route::resource('accountpays', 'AccountPayController');
Route::resource('accountreceives', 'AccountReceiveController');
Route::resource('payReceives', 'PayReceiveController');
