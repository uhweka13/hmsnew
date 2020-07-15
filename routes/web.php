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
// Pages routes
Route::post('/login_control','LoginController@login_control');
Route::get('/', 'PagesController@index');
Route::get('/intro', 'PagesController@intro');
Route::post('/add-hospital', 'PagesController@addHospital');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Hospital Controller
Route::resource('/hospital-index', 'HospitalsController');
Route::get('/personel', 'HospitalsController@personel');
Route::get('/patient', 'HospitalsController@patient');
Route::post('/add-personel', 'HospitalsController@addPersonel');
Route::post('/add-patient', 'HospitalsController@addPatient');
//Doctor Control
Route::resource('/doctor-index', 'DoctorsController');