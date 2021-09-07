pk<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'StaticController@index' 
)->name('personaggi');

 Route::get('/comics', function () {

    $comics = config('comics-database');
    $data = ['volumi' => $comics];
     return view('comics', $data);
 })->name('fumetti');

//  rotta dei dettagli

 Route::get('/detail/{id}', function ($id) {
    $comics = config('comics-database');
    $data = ['volumi' => $comics[$id]];

    return view('dettaglio', $data);
})->name('dettaglio-comics');




 Route::get('/movies','StaticController@movies' )->name('film');

 Route::get('/tv','StaticController@tv' )->name('televisione');

 Route::get('/games','StaticController@games' )->name('giochi');

 Route::get('/collectibles','StaticController@collectibles' )->name('collezione');

 Route::get('/videos','StaticController@videos')->name('video');

 Route::get('/fans','StaticController@fans')->name('fan');

 Route::get('/news','StaticController@news' )->name('notizie');

 Route::get('/shop','StaticController@shop' )->name('negozio');
