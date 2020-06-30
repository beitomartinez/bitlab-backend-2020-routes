<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('contacto', 'WelcomeController@contact')->name('contact-page');

// Route::get('sucursales/centro', 'StoreController@centro');
Route::get('sucursales/centro', [StoreController::class, 'centro'])->name('stores.centro');


Route::get('productos/{id}', [ProductController::class, 'show'])
    ->name('products.show');

Route::get(
    'productos/{id}/comentarios',
    'ProductController@productComments'
)->name('products.comments.show');


Route::get(
    'productos/{id}/comentarios/por-tipo/{type?}',
    'ProductController@productCommentsByType'
)->name('products.comments.by-type');

Route::get('users/{id}', 'UserController@showNumeric')->where('id', '[0-9]+');

Route::get('users/{username}', function ($username) {
    return 'Esta es con letras';
})->where('username', '[A-Za-z]+');