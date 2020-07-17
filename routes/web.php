<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('gachome');
});

//Route::get('student/{id}','StudentController@show');
//Route::get('student/createOrUpdate','StudentController@createOrUpdate')->name('create');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/student/fun','StudentController@fun')->name('f1');
Route::get('/student/func','StudentController@func')->name('f2');

Route::post('/student/studentinfo','StudentController@studentInfo')->name('studentInfo');
Route::post('/student/searchbyname','StudentController@searchByName')->name('searchByName');
Route::post('/student/searchbysubject','StudentController@searchBySubject')->name('searchBySubject');
Route::post('/student/searchbyreligion','StudentController@searchByReligion')->name('searchByReligion');


Route::resource('student','StudentController');

Auth::routes();