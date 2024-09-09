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

Route::get('/', function () {

    $title = 'Benvenuti in Laravel';
    $subtitle = 'Muoviamo i primi passi';
    $list_title = 'Cosa possiamo fare con Laravel?';
    $list = ['Creare API RESTful', 'Gestire la rotta', 'Autenticazione e Autorizzazione', 'Sistema di Templating', 'Gestione del Database', 'Migrazione e Gestione delle Tabelle'];

    return view('home', compact('title', 'subtitle', 'list_title', 'list'));
});
