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

    Route::middleware('admin')->group(function () {
        Route::resource('users', 'UserController');
        Route::get('users/archive/index', 'UserController@archive')->name('users.archive');
        Route::delete('users/force-delete/{id}', 'UserController@deleteUser')->name('users.delete');
        Route::get('users/restore/{id}', 'UserController@restoreUser')->name('users.restore');
    });
    
    // Patients
    Route::resource('patients', 'PatientController');
    Route::get('patients/archive/index', 'PatientController@archive')->name('patients.archive');
    Route::delete('patients/force-delete/{id}', 'PatientController@deletePatient')->name('patients.delete');
    Route::get('patients/restore/{id}', 'PatientController@restorePatient')->name('patients.restore');
    Route::post('patients/search', 'PatientController@search')->name('patients.search');
    
    Route::resource('services', 'ServiceController');
    Route::get('services/archive/index', 'ServiceController@archive')->name('services.archive');
    Route::delete('services/force-delete/{id}', 'ServiceController@forceDestroy')->name('services.delete');
    Route::get('services/restore/{id}', 'ServiceController@restore')->name('services.restore');
    
    Route::get('help', 'HelpController@index')->name('help');
    Route::get('doctors', 'DoctorsController@index')->name('doctors');
    Route::get('contact', 'ContactController@index')->name('contact');
    Route::resource('medical-records', 'MedicalRecordController');
});

