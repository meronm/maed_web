<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', function () {
    return view('home');
})->name('login');

Route::post('/signupAction',[
    'uses' => 'UserController@SignUPAction',
    'as' => 'signupAction'
]);

Route::post('/signin', [
    'uses' => 'UserController@SignIn',
    'as' => 'signin'
]);

Route::get('/signup', function () {
    return view('signup');
})->name('signup');


Route::group(['middleware' => ['auth']], function() {

    Route::get('/activate/{hotel}', [
        'uses' => 'UserController@activate',
        'as' => 'hotel.activate'
    ]);
    Route::get('/deactivate/{hotel}', [
        'uses' => 'UserController@deactivate',
        'as' => 'hotel.deactivate'
    ]);

    Route::get('/dashboard', [
        'uses' => 'UserController@getDashboard',
        'as' => 'dashboard'
    ]);

    Route::get('/logout', [
        'uses' => 'UserController@getLogout',
        'as' => 'logout'
    ]);

    Route::get('/menu', [
        'uses' => 'hotelController@getMenu',
        'as' => 'menu'
    ]);

    Route::post('/addmenu', [
        'uses' => 'hotelController@addMenu',
        'as' => 'hotel.addMenu'
    ]);

    Route::get('/customers', [
        'uses' => 'hotelController@getCustomers',
        'as' => 'customers'
    ]);

    Route::get('menu/delete/{menu_id}', [
        'uses' => 'hotelController@deleteMenu',
        'as' => 'menu.deleteMenu'
    ]);

    Route::get('menu/edit/{menu_id}', [
        'uses' => 'hotelController@editMenu',
        'as' => 'menu.editMenu'
    ]);

    Route::post('menu/update', [
        'uses' => 'hotelController@updateMenu',
        'as' => 'menu.updateMenu'
    ]);

    Route::get('order/delete/{order_id}', [
        'uses' => 'hotelController@deleteOrder',
        'as' => 'order.deleteOrder'
    ]);

    Route::get('orders', [
        'uses' => 'hotelController@getOrders',
        'as' => 'orders'
    ]);

    Route::get('account', [
        'uses' => 'hotelController@getAccount',
        'as' => 'account'
    ]);

    Route::post('account/save', [
        'uses' => 'hotelController@saveAccount',
        'as' => 'account.save'
    ]);

});