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

//index page
Route::get('/', function () {
    return view('welcome');
})->name('index');

Auth::routes();

//home page
Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');

//help page
Route::get('/help', function(){ 
	return view('help');
})->name('help');

//Routes for questions.

//show all question
Route::get('/questions','QuestionsController@index')->middleware('auth')->name('all_question');

//store the question
Route::post('questions','QuestionsController@store')
->middleware('auth')
->name('store_question');

//create a post
Route::get('/questions/create','QuestionsController@create')
->middleware('auth')
->name('create_question');

//shows a single question
Route::get('/questions/{question}','QuestionsController@show')
->middleware('auth')
->name('single_question');

//ckeditor image upload
Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');

//store the answer
Route::post('answers','AnswersController@store')
->middleware('auth')
->name('store_answer');

//activity
Route::get('/activity','ActivityController@activity')
->middleware('auth')
->name('activity');

//profile
Route::get('/profile/{profile}','ActivityController@profile')
->middleware('auth')
->name('profile');

//2FA
Route::get('/2fa/home', 'Google2FAController@index')->middleware('auth')->name('2fa_home');
Route::get('/2fa/enable', 'Google2FAController@enableTwoFactor')->middleware('auth')->name('2fa_enable');
Route::get('/2fa/disable', 'Google2FAController@disableTwoFactor')->middleware('auth')->name('2fa_disable');
Route::get('/2fa/validate', 'Auth\LoginController@getValidateToken')->name('2fa_validate');
Route::post('/2fa/validate', ['middleware' => 'throttle:5', 'uses' => 'Auth\LoginController@postValidateToken'])->name('2fa_throttle');