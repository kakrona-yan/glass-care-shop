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
            //  Product Route
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
            // News Route
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
            // Customers
            Route::group(['prefix' => 'customers', 'as' => 'customer.'], function() {
                Route::get('/', 'CustomersController@index')->name('index');
                Route::get('/create', 'CustomersController@create')->name('create');
                Route::post('/store', 'CustomersController@store')->name('store');
                Route::get('/show/{id}', 'CustomersController@show')->name('show');
                Route::get('/edit/{id}', 'CustomersController@edit')->name('edit');
                Route::post('/update/{id}', 'CustomersController@update')->name('update');
                Route::post('/destroy', 'CustomersController@destroy')->name('destroy');
            });
            // Staffs
            Route::group(['prefix' => 'staffs', 'as' => 'staff.'], function() {
                Route::get('/', 'StaffsController@index')->name('index');
                Route::get('/create', 'StaffsController@create')->name('create');
                Route::post('/store', 'StaffsController@store')->name('store');
                Route::get('/show/{id}', 'StaffsController@show')->name('show');
                Route::get('/edit/{id}', 'StaffsController@edit')->name('edit');
                Route::post('/update/{id}', 'StaffsController@update')->name('update');
                Route::post('/destroy', 'StaffsController@destroy')->name('destroy');
            });
            // Staffs
            Route::group(['prefix' => 'sales', 'as' => 'sale.'], function() {
                Route::get('/', 'SalesController@index')->name('index');
                Route::get('/create', 'SalesController@create')->name('create');
                Route::post('/store', 'SalesController@store')->name('store');
                Route::get('/show/{id}', 'SalesController@show')->name('show');
                Route::get('/edit/{id}', 'SalesController@edit')->name('edit');
                Route::post('/update/{id}', 'SalesController@update')->name('update');
                Route::post('/destroy', 'SalesController@destroy')->name('destroy');
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
        Route::get('/', 'CollectionsController@index')->name('index');
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
