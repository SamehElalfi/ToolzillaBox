<?php

use Illuminate\Http\Request;

Route::middleware('throttle:3|1,1')->group(function () {
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


    /**
     * Legal Pages
     * 
     * Contains Legal information and privacy Policies
     * 
     */
    Route::prefix('/legal')->group(function () {
        Route::get('/tos', 'LegalController@tos')->name('tos');
        Route::get('/use_policy', 'LegalController@use_policy')->name('use_policy');
        Route::get('/privacy', 'LegalController@privacy')->name('privacy');
        Route::get('/cookie_policy', 'LegalController@cookie_policy')->name('cookie_policy');
    });

    /**
     * Not Prepared pages
     */
    Route::get('/soon/{text?}/{text2?}/{text3?}', function () {
        $header_title = 'This page is not ready yet.';
        $header_paragraph = 'This page is under construction.';
        $no_footer = true;
        return view('soon', compact('header_title', 'header_paragraph', 'no_footer'));
    });


    /**
     * Main tools listed here
     */
    Route::prefix('/tools')->group(function () {
        // Json Formatter tool
        Route::get('/jsonformatter', 'ToolController@jsonFormatter')->name('jsonFormatter');

        // Display all categories and tools
        Route::get('/', 'ToolController@index')->name('tools');
    });
    // Display all categories and tools
    Route::get('/cates', 'ToolController@index');

});

Route::middleware('throttle:3|3600,1')->group(function () {
    Route::post('/mail', 'MailController@storeMail');
});
