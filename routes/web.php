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
Route::group([
        'prefix' => 'admin',
        'namespace' => 'Backends'
    ], function () {
        Route::get('/login', 'Auth\LoginController@showLogin')->name('login');
        Route::post('/login', 'Auth\LoginController@Login')->name('login.post');
        Route::post('/logout', 'Auth\LoginController@Logout')->name('logout');
        // middleware
        Route::group(['middleware' => 'auth'], function () {
            Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
            Route::get('/', function () {
                return redirect()->route('dashboard');
            });
        });
    }
);