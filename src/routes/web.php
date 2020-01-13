<?php

Route::group(['namespace' => 'EdeskMd\Panel\Http\Controllers'], function () {
    Route::get('contact', 'ContactController@index')->name('contact');
    Route::post('contact', 'ContactController@send');
});