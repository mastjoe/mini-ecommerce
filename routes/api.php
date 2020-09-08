<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::group([
    "prefix" => "v1",
    "namespace" => "API\V1",
    "middleware" => "json.response"
], function() {
    //
    Route::post('login', 'LoginController@login');
    Route::post('register', 'RegisterController@register');

    // categories
    Route::get('categories', 'CategoryController@index');

    // product
    Route::get('products', 'ProductController@index');
    Route::get('products/{id}', 'ProductController@show');

    Route::get('suppliers', 'SupplierController@index');

    Route::group(['middleware' => 'auth:api'], function(){
        // suppliers
        Route::post('suppliers', 'SupplierController@store');
        Route::get('suppliers/{id}', 'SupplierController@show');
        Route::put('suppliers/{id}', 'SupplierController@update');
        Route::delete('suppliers/{id}', 'SupplierController@destroy');

        // categories
        Route::post('categories', 'CategoryController@store');
        Route::get('categories/{id}', 'CategoryController@show');
        Route::put('categories/{id}', 'CategoryController@update');
        Route::delete('categories/{id}', 'CategoryController@destroy');

        // products
        Route::post('products', 'ProductController@store');
        Route::put('products/{id}', 'ProductController@update');
        Route::delete('products/{id}', 'ProductController@destroy');
        
        // orders
        Route::get('orders', 'OrderController@index');
        Route::post('orders', 'OrderController@store');
        Route::get('orders/{id}', 'OrderController@show');
        Route::delete('orders/{id}', 'OrderController@destory');
        Route::get('orders/{id}/items', 'OrderController@items');

        // order item
        Route::get('orders/items/{id}', 'OrderItemController@show');
        Route::put('orders/items/{id}', 'OrderItemController@update');
        Route::delete('orders/items/{id}', 'OrderItemController@destroy');
    });
});

