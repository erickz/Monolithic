<?php 

Route::group(['prefix' => 'api'], function(){

	Route::get('checkout', 'App\Http\Controllers\CheckoutController');
});