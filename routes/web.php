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
Route::post('/uploadProfileImage', 'PagesController@uploadProfileImg');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Hospital Controller
Route::resource('/hospital-index', 'HospitalsController');
Route::get('/personel', 'HospitalsController@personel');
Route::get('/patient-hospital', 'HospitalsController@patient_hospital');
Route::get('/setup', 'HospitalsController@department');
Route::post('/add-personel', 'HospitalsController@addPersonel');
Route::post('/', 'HospitalsController@addPatient');
Route::post('/add-department', 'HospitalsController@addDepartment');
//Doctor Control
Route::resource('/doctor-index', 'DoctorsController');
Route::resource('/diagnose', 'DoctorsController');
Route::get('/patient-records', 'DoctorsController@record');
Route::get('/doc-consultancy', 'DoctorsController@consultancy');

//Nurce controller
Route::resource('/nurse-index', 'nurseController');
Route::resource('/add-patient', 'nurseController');
Route::get('/patient', 'nurseController@patient');
Route::post('/booking', 'nurseController@booking');
Route::post('/delete-patient-nurse', 'nurseController@deletePatient');
Route::get('/nurse-consultancy', 'nurseController@consultancy');
Route::post('/update-patient-nurse', 'nurseController@updatePatient');