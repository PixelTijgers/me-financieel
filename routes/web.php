<?php

use Illuminate\Support\Facades\Route;

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

// Protect modules with middleware.
Route::group([
    'namespace' => 'Modules',
], function(){

    // Init dashboard route(s).
    Route::get('/', 'DashboardController@index');

});
