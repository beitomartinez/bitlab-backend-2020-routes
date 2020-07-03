<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

Route::prefix('team-member')->group(function () {               // team-member
    Route::get('', 'TeamMemberController@index');               // team-member
    Route::get('crear', 'TeamMemberController@create');         // team-member/create
    Route::get('store', 'TeamMemberController@store');          // team-member/store

    Route::prefix('{id}')->group(function () {                  // team-member/{id}
        Route::get('show', 'TeamMemberController@show');        // team-member/{id}/show
        Route::get('edit', 'TeamMemberController@edit');        // team-member/{id}/edit
        Route::get('update', 'TeamMemberController@update');    // team-member/{id}/update
        Route::get('destroy', 'TeamMemberController@destroy');  // team-member/{id}/destroy
    });
});


Route::get('login', function () {
    return 'Esta sería la página de inicio de sesión';
})->name('login');

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('contacto', 'WelcomeController@contact')->name('contact-page');

// Route::get('sucursales/centro', 'StoreController@centro');
Route::get('sucursales/centro', [StoreController::class, 'centro'])
    ->name('stores.centro');

Route::get('productos/{id}', [ProductController::class, 'show'])
    ->name('products.show');

Route::get(
    'productos/{id}/comentarios',
    'ProductController@productComments'
)->name('products.show.comments');


Route::get(
    'productos/{id}/comentarios/por-tipo/{type?}',
    'ProductController@productCommentsByType'
)->name('products.comments.by_type');

Route::get('users/{id}', 'UserController@showNumeric')->where('id', '[0-9]+');

Route::get('users/{username}', function ($username) {
    return 'Esta es con letras';
})->where('username', '[A-Za-z]+');

Route::fallback(function() {
    echo 'no encontrado :(';
});