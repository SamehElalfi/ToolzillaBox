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

Route::get('/', function () {
    return view('index');
});


/**
 * Main Pages
 */
Route::get('/about', function () {
    return view('about');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/contact', function () {
    return view('contact');
});


/**
 * Legal Pages
 */
Route::get('/legal/tos', function () {
    return view('legal.tos');
});
Route::get('/legal/use_policy', function () {
    return view('legal.use_policy');
});
Route::get('/legal/privacy', function () {
    return view('legal.privacy');
});
Route::get('/legal/cookie_policy', function () {
    return view('legal.cookie_policy');
});


Route::get('/soon/{text?}', function () {
    $header_title = 'This page is not ready yet.';
    $header_paragraph = 'This page is under construction.';
    $no_footer = true;
    return view('soon', compact('header_title', 'header_paragraph', 'no_footer'));
});


/**
 * Main tools listed here
 */
// Json Formatter tool
Route::get('/tools/jsonformatter', function () {
    return view('tools.json_formatter');
});

// Display all categories and tools
Route::get('/cates', function () {
    return view('tools.index');
});
Route::get('/tools', function () {
    return view('tools.index');
});
