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
            // Category Route
            Route::group(['prefix' => 'categories', 'as' => 'category.'], function () {
                Route::get('/', 'CategoriesController@index')
                    ->name('index');
                Route::get('/create', 'CategoriesController@create')
                    ->name('create');
                Route::post('/store', 'CategoriesController@store')
                    ->name('store');
                Route::get('/show/{id}', 'CategoriesController@show')
                    ->name('show');
                Route::get('/edit/{id}', 'CategoriesController@edit')
                    ->name('edit');
                Route::post('/update/{id}', 'CategoriesController@update')
                    ->name('update');
                Route::post('/destroy', 'CategoriesController@destroy')
                    ->name('destroy');
            });
            // Category Route
            Route::group(['prefix' => 'products', 'as' => 'product.'], function () {
                Route::get('/', 'ProductsController@index')
                    ->name('index');
                Route::get('/create', 'ProductsController@create')
                    ->name('create');
                Route::post('/store', 'ProductsController@store')
                    ->name('store');
                Route::get('/show/{id}', 'ProductsController@show')
                    ->name('show');
                Route::get('/edit/{id}', 'ProductsController@edit')
                    ->name('edit');
                Route::post('/update/{id}', 'ProductsController@update')
                    ->name('update');
                Route::post('/destroy', 'ProductsController@destroy')
                    ->name('destroy');
            });
            // Category Route
            Route::group(['prefix' => 'news', 'as' => 'news.'], function () {
                Route::get('/', 'NewsController@index')
                    ->name('index');
                Route::get('/create', 'NewsController@create')
                    ->name('create');
                Route::post('/store', 'NewsController@store')
                    ->name('store');
                Route::get('/show/{id}', 'NewsController@show')
                    ->name('show');
                Route::get('/edit/{id}', 'NewsController@edit')
                    ->name('edit');
                Route::post('/update/{id}', 'NewsController@update')
                    ->name('update');
                Route::post('/destroy', 'NewsController@destroy')
                    ->name('destroy');
            });
            // Setting Route
            Route::group(['prefix' => 'settings', 'as' => 'setting.'], function () {
                Route::get('/', 'SettingsController@index')
                    ->name('index');
                Route::get('/create', 'SettingsController@create')
                    ->name('create');
                Route::post('/storeOrUpdate', 'SettingsController@storeOrUpdate')
                    ->name('storeOrUpdate');
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
