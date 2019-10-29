<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/users", "UsersController@show");
Route::get("/customers", "CustomersController@show");
Route::get("/customers/{customerID}", "CustomersController@edit");
Route::post("/customers/store", "CustomersController@store");

Route::put("/customers/{customerID}", "CustomersController@updateCustomer");
