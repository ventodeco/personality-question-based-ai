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

Route::get('/', 'HomeController@index')->name('home');

Route::get('questions', 'PersonalityQuestionController@index');


// graduation
Route::get('graduation', 'GraduationController@index')->name('graduation.index');
Route::get('graduation/eight-semester', 'GraduationController@eightSemester')->name('graduation.eight-semester');
Route::post('graduation/predict', 'GraduationController@predict')->name('graduation.predict');
Auth::routes();

