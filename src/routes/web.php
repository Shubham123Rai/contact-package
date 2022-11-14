<?php

use bitfume\contact\Http\Controllers\ContactController;

// Route::group(['namespace'=>'bitfume\contact\Http\Controllers'], function () {

    Route::get('contact', [ContactController::class, 'index'])->name('contact');
    Route::post('contact', [ContactController::class, 'send']);

// });