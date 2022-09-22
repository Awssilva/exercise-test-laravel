<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/contato', [ContatoController::class, 'index']);

Route::group(['middleware'=>'auth', 'prefix'=>'contatos'], function() {
    Route::get('/', 'ContatoController@index');
    Route::get('/criar', 'ContatoController@create');
    Route::post('/', 'ContatoController@store');
    Route::get('{id}', 'ContatoController@show');
    Route::get('/edit/{id}', 'ContatoController@edit');
    Route::put('{id}', 'ContatoController@update');
    Route::delete('{id}', 'ContatoController@destroy');
});