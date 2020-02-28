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

Auth::routes();
Route::get('/', function () {
    return view('auth.login');
});

Route::get('error', function () {
    return view('errors.admin');
})->name('errors.admin');

Route::get('/about', function(){
return view('about');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

	Route::get('labreports', function () {
		return view('patients.labreport');
    });    

    Route::get('help', 'HelpController@index')->name('help');
    Route::get('doctors', 'DoctorsController@index')->name('doctors');
    Route::get('contact', 'ContactController@index')->name('contact');
    Route::resource('users', 'UserController')->middleware('admin');
    Route::resource('patients', 'PatientController');
    Route::resource('services', 'ServiceController');
    Route::resource('medical-records', 'MedicalRecordController');
});
