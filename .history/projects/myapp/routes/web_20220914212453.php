<?php

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

Route::get('/', function () {
    // return view('welcome');
    echo '<center>';
    echo '<h1>Página Principal</h1>';
    echo '<img src="https://media2.giphy.com/media/mDFpdL1UxdVZRBN2V4/giphy.gif" />';
    echo '</center>';
});

Route::get('/contato', function () {
    echo '<center>';
    echo '<h1>Página Contato</h1>';
    echo '<img src="https://media2.giphy.com/media/mDFpdL1UxdVZRBN2V4/giphy.gif" />';
    echo '</center>';
});

Route::get('/sobrenos', function () {
    echo '<center>';
    echo '<h1>Página Sobre Nós</h1>';
    echo '<img src="https://media2.giphy.com/media/mDFpdL1UxdVZRBN2V4/giphy.gif" />';
    echo '</center>';
});
