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

Route::get('/', function () {
    return view('welcome');
})->name('index');
Route::get('/admin','AdminController@index');

//Auth::routes();
Auth::routes(['register' => false]);

Route::get('/home','HomeController@index')->name('home');
Route::get('/registration','AdminController@registration')->name('registration');
Route::post('/create_applicant','AdminController@createApplicant')->name('admin.createApplicant');