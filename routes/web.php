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

/**
 * Routes for BackEnds
 */
Route::group(
    [
        'prefix' => 'admin',
        'namespace' => 'Backends'
    ],
    function () {
        Route::get('/login', 'Auth\LoginController@showLogin')->name('login');
        Route::post('/login', 'Auth\LoginController@Login')->name('login.post');
        Route::post('/logout', 'Auth\LoginController@Logout')->name('logout');
        // middleware
        Route::group(['middleware' => 'auth'], function () {
            Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
            Route::get('/', function () {
                return redirect()->route('dashboard');
            });
            // User Route
            Route::group(['prefix' => 'users', 'as' => 'user.'], function () {
                Route::get('/', 'UsersController@index')
                    ->name('index');
                Route::get('/create', 'UsersController@create')
                    ->name('create');
                Route::post('/store', 'UsersController@store')
                    ->name('store');
                Route::get('/show/{id}', 'UsersController@show')
                    ->name('show');
                Route::get('/edit/{id}', 'UsersController@edit')
                    ->name('edit');
                Route::post('/update/{id}', 'UsersController@update')
                    ->name('update');
                Route::post('/destroy', 'UsersController@destroy')
                    ->name('destroy');
            });
        });
    }
);

/**
 * Routes for FrontEnds
 */
Route::group([
    'namespace' => 'Frontends'
], function () {
    // Home page
    Route::get('/', 'HomesController@home')->name('home');
    // Pages
    Route::get('/about', 'PagesController@about')->name('about');
    Route::get('/look', 'PagesController@look')->name('look');
    Route::get('/contact', 'PagesController@contact')->name('contact');
    Route::get('/shop', 'PagesController@shop')->name('shop');
    // collection
    Route::group(['prefix' => 'collections', 'as' => 'collections.'], function () {
        Route::get('/', 'CollectionsController@getCollection')->name('index');
        Route::get('/{slug}', 'CollectionsController@getCollectionBySlug')
            ->where('slug', '[A-Za-z0-9_\-]+')->name('detail');
    });
    // news
    Route::group(['prefix' => 'news', 'as' => 'news.'], function () {
        Route::get('/', 'BlogsController@getNews')->name('index');
        Route::get('/{slug}', 'BlogsController@getNewsBySlug')
            ->where('slug', '[A-Za-z0-9_\-]+')->name('detail');
    });
});
