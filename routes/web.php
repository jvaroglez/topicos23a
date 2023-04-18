<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProviderController;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', function () {
    return view('home');
});

Route::get('/users', [UserController::class, 'index'])->name('viewUsers');
Route::get('/user/{id}/detail', [UserController::class, 'detail'])->name('user.detailUser');
Route::get('/newUser', [UserController::class, 'newUser'])->name('newUser');
Route::post('/user/save', [UserController::class, 'save'])-> name('user.save');
Route::get('/user/{id}/editUser', [UserController::class, 'editUser'])->name('user.editUser');
Route::put('/user/{id}', [UserController::class, 'update'])-> name('user.update');
Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');


Route::get('/provider', [ProviderController::class, 'index'])->name('viewProviders');
Route::get('/provider/{id}/detail', [ProviderController::class, 'detail'])->name('provider.detailProvider');
Route::get('/newProvider', [ProviderController::class, 'newProvider'])->name('newProvider');
Route::post('/provider/save', [ProviderController::class, 'save'])-> name('provider.save');
Route::get('/provider/{id}/editProvider', [ProviderController::class, 'editProvider'])->name('provider.editProvider');
Route::put('/provider/{id}', [ProviderController::class, 'update'])-> name('provider.update');
Route::get('/provider/delete/{id}', [ProviderController::class, 'delete'])->name('provider.delete');

Route::get('/client', [ClientController::class, 'index'])->name('viewClients');
Route::get('/client/{id}/detail', [ClientController::class, 'detail'])->name('client.detailClient');
Route::get('/newClient', [ClientController::class, 'newClient'])->name('newClient');
Route::post('/client/save', [ClientController::class, 'save'])-> name('client.save');
Route::get('/client/{id}/editClient', [ClientController::class, 'editClient'])->name('client.editClient');
Route::put('/client/{id}', [ClientController::class, 'update'])-> name('client.update');
Route::get('/client/delete/{id}', [ClientController::class, 'delete'])->name('client.delete');

Route::get('/product', [ProductController::class, 'index'])->name('viewProducts');
Route::get('/product/{id}/detail', [ProductController::class, 'detail'])->name('product.detailProduct');
Route::get('/newProduct', [ProductController::class, 'newProduct'])->name('newProduct');
Route::get('/product/{id}/editProduct', [ProductController::class, 'editProduct'])->name('product.editProduct');
Route::put('/product/{id}', [ProductController::class, 'update'])-> name('product.update');
Route::get('/product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
Route::post('/product/save', [ProductController::class, 'save'])-> name('product.save');

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
		Route::get('icons', ['as' => 'pages.icons', 'uses' => 'App\Http\Controllers\PageController@icons']);
		Route::get('maps', ['as' => 'pages.maps', 'uses' => 'App\Http\Controllers\PageController@maps']);
		Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'App\Http\Controllers\PageController@notifications']);
		Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'App\Http\Controllers\PageController@rtl']);
		Route::get('tables', ['as' => 'pages.tables', 'uses' => 'App\Http\Controllers\PageController@tables']);
		Route::get('typography', ['as' => 'pages.typography', 'uses' => 'App\Http\Controllers\PageController@typography']);
		Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'App\Http\Controllers\PageController@upgrade']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

