<?php

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('index');
});


/**
 * Info Pages
 * 
 * All information about the website
 * 
 */
Route::get('/about', 'AboutController@about')->name('about');
Route::get('/donate', 'AboutController@donate')->name('donate');
Route::get('/faq', 'AboutController@faq')->name('faq');

Route::get('/contact', 'LegalController@contact')->name('contact');
Route::post('/contact', 'LegalController@storeContact');

Route::prefix('/legal')->group(function () {
    Route::get('/privacy', 'LegalController@privacy')->name('privacy');
    Route::get('/cookie-policy', 'LegalController@cookie_policy')->name('cookie_policy');
});


Route::middleware('throttle:30|3600,1')->group(function () {
    Route::post('/mail', 'MailController@storeMail');
});


// Route::resource('tools', 'CategoryController');
Route::get      ('/tools',                  'CategoryController@index')     ->name('category.index');
Route::get      ('/tools/create',           'CategoryController@create')    ->name('category.create');
Route::post     ('/tools',                  'CategoryController@store')     ->name('category.store');
Route::get      ('/tools/{category}',       'CategoryController@show')      ->name('category.show');
Route::get      ('/tools/{category}/edit',  'CategoryController@edit')      ->name('category.edit');
Route::put      ('/tools/{category}',       'CategoryController@update')    ->name('category.update');
Route::delete   ('/tools/{category}',       'CategoryController@destroy')   ->name('category.destroy');


// Route::resource('category.tool', 'ToolController');
Route::get		('/tools/{category}/{tool}', 'ToolController@index')		->name('category.tool.index');
Route::get		('/tools/{category}/{tool}', 'ToolController@show')			->name('category.tool.show');
Route::get		('/tools/{category}/{tool}/edit', 'ToolController@edit')	->name('category.tool.edit');
Route::post		('/tools/store', 'ToolController@store')					->name('category.tool.store');
Route::delete	('/tools/{category}/{tool}', 'ToolController@destroy')		->name('category.tool.destroy');
Route::put		('/tools/{category}/{tool}', 'ToolController@update')		->name('category.tool.update');


/**
 * All Dashboard Routes
 */
// Login and Register Routes
Auth::routes([
  ]);
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
    
	Route::get('settings/category', 'CategoryController@edit_all')->name('settings.category.edit');
	Route::get('settings/tool', 'ToolController@edit_all')->name('settings.tool.edit');
    Route::get('tool/create',  ['as' => 'tool.create', 'uses' => 'ToolController@create']);
});