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

Route::get('/','frontend\FrontendController@index')->name('index');
Route::get('checkdoctor','frontend\FrontendController@checkdoctor')->name('checkdoctor');

Route::resource('departments','backend\DepartmentController');
Route::resource('periods','backend\PeriodController');
Route::resource('doctors','backend\DoctorController');
Route::resource('schedules','backend\ScheduleController');



