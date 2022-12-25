<?php

Route::group([
    //  'prefix'     => 'razorpay',
       'middleware' => ['web', 'theme', 'locale', 'currency']
   ], function () {

       Route::get('razorpay-redirect','Vian\Razorpay\Http\Controllers\RazorpayController@redirect')->name('razorpay.process');
       Route::post('razorpaycheck','Vian\Razorpay\Http\Controllers\RazorpayController@verify')->name('razorpay.callback'); 
});