<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');
Route::view('contacto', 'contact')->name('contact-page');

Route::get('person', 'PersonController@show');

Route::name('products.')->prefix('productos/{id}')->group(function () {
    Route::get('', [ProductController::class, 'show'])->name('show');

    Route::prefix('comentarios')->group(function () {
        Route::get('', 'ProductController@productComments')->name('show.comments');
        Route::get('por-tipo/{type?}', 'ProductController@productCommentsByType')->name('comments.by_type');
    });
});

Route::namespace('Admin')->prefix('admin/team-member')->group(function() {
    Route::get('students', 'StudentController@index');          // admin/team-member/students

    Route::get('', 'TeamMemberController@index');               // admin/team-member
    Route::get('crear', 'TeamMemberController@create');         // admin/team-member/create
    Route::get('store', 'TeamMemberController@store');          // admin/team-member/store

    Route::prefix('{id}')->group(function () {                  // admin/team-member/{id}
        Route::get('show', 'TeamMemberController@show');        // admin/team-member/{id}/show
        Route::get('edit', 'TeamMemberController@edit');        // admin/team-member/{id}/edit
        Route::get('update', 'TeamMemberController@update');    // admin/team-member/{id}/update
        Route::get('destroy', 'TeamMemberController@destroy');  // admin/team-member/{id}/destroy
    });
});


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



// Route::get('sucursales/centro', 'StoreController@centro');
Route::get('sucursales/centro', [StoreController::class, 'centro'])
    ->name('stores.centro');

Route::get('users/{id}', 'UserController@showNumeric')->where('id', '[0-9]+');

Route::get('users/{username}', function ($username) {
    return 'Esta es con letras';
})->where('username', '[A-Za-z]+');

Route::fallback(function() {
    echo 'no encontrado :(';
});