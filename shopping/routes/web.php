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

Route::get('/', [
    'uses' => 'ProductController@getHome',
    'as' => 'product.home'
]);

Route::get('/products', [
    'uses' => 'ProductController@getIndex',
    'as' => 'product.index'
]);

Route::get('/products/create', 'ProductController@create');

Route::post('/products', 'ProductController@store');


Route::get('/add-to-cart/{id}', [
    'uses' => 'ProductController@addToCart',
    'as' => 'product.addToCart'
]);

Route::get('/reduce/{id}', [
    'uses' => 'ProductController@getReduceByOne',
    'as' => 'product.reduceByOne'
]);

Route::get('/remove/{id}', [
    'uses' => 'ProductController@getRemoveItem',
    'as' => 'product.removeItem'
]);

Route::get('/product/{id}', [
    'uses' => 'ProductController@show',
    'as' => 'shop.show'
]);

Route::get('shopping-cart', [
    'uses' => 'ProductController@getCart',
    'as' => 'product.shoppingCart'
]);

Route::get('/checkout', [
    'uses' => 'ProductController@getCheckout',
    'as' => 'checkout'
]);

Route::post('/checkout', [
    'uses' => 'ProductController@postCheckout',
    'as' => 'checkout'
]);

Route::group(['prefix' => 'user'], function () {

    Route::group(['middleware' => 'guest'], function () {

        Route::get('/register', [
            'uses' => 'UserController@getRegister',
            'as' => 'user.register'
        ]);

        Route::post('/register', [
            'uses' => 'UserController@postRegister',
            'as' => 'user.register'
        ]);

        ////////////////////////////////////////////////////

        Route::get('/login', [
            'uses' => 'UserController@getLogin',
            'as' => 'user.login'
        ]);

        Route::post('/login', [
            'uses' => 'UserController@postLogin',
            'as' => 'user.login'
        ]);
    });

        ////////////////////////////////////////////////////

    Route::group(['middleware' => 'auth'], function () {

        Route::get('/profile', [
            'uses' => 'UserController@Profile',
            'as' => 'user.profile'
        ]);

        ///////////////////////////////////////////////////

        Route::get('/logout', [
            'uses' => 'UserController@Logout',
            'as' => 'user.logout'
        ]);
    });

});