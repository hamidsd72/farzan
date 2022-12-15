<?php
use App\Http\Controllers\Admin\SliderController;

Route::group([ 'middleware' => ['auth', 'Admin']], function () {
    Route::name('admin.')->group(function () {

        Route::resource('sliders', SliderController::class);
    });
});
