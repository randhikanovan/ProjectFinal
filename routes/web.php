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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('questions', 'QuestionController')->middleware('auth');
Route::resource('comments', 'CommentController')->middleware('auth');
// Route::get('/questions', 'LikesController@index');
Route::get('/answer/create', 'AnswerController@create')->name('answer.create')->middleware('auth');
Route::post('/answer/{id}/store', 'AnswerController@store')->middleware('auth');
