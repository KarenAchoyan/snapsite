<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/template/{id}', 'TemplateController@show');

Auth::routes();

Route::prefix('profile')->middleware('auth')->group(function () {
    Route::get('', 'profile\ProfileController@index');
    Route::get('site/setting/{id}', 'site\SettingController@show');
    Route::post('site/setting/{id}/update', 'site\SettingController@update');
    Route::get('site/buy/{id}', 'site\PageController@show');
    Route::get('site/ordering/{id}', 'site\PageController@store');
});

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('', 'admin\AdminController@index');

    Route::get('category', 'admin\CategoryController@index')->name('admin_category');
    Route::post('category/add', 'admin\CategoryController@store')->name('categories.store');
    Route::get('category/delete/{id}', 'admin\CategoryController@destroy');

    Route::get('template', 'admin\TemplateController@index')->name('admin_template');
    Route::post('template/add', 'admin\TemplateController@store')->name('template.store');
    Route::get('template/delete/{id}', 'admin\TemplateController@destroy');

    Route::get('orders', 'admin\OrdersController@index')->name('admin_orders');
    Route::get('orders/delete/{id}', 'admin\OrdersController@destroy');
    Route::get('orders/active/{id}', 'admin\OrdersController@active');
    Route::get('orders/deactive/{id}', 'admin\OrdersController@deactive');

});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
