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

    return view('home', compact('title', 'subtitle'));
});


Route::get('/about', function () {

    $title = 'About Laravel';
    $description = "Laravel è un framework PHP open-source per lo sviluppo di applicazioni web. Creato da Taylor Otwell, Laravel è progettato per facilitare la costruzione di applicazioni robuste e scalabili seguendo il paradigma di Model-View-Controller (MVC). Offre una serie di strumenti e funzionalità integrate che semplificano compiti comuni nello sviluppo web. Laravel è apprezzato per la sua eleganza, l'architettura moderna, e la facilità d'uso, il che lo rende una scelta popolare per sviluppatori di tutti i livelli.";

    return view('about', compact('title', 'description', 'prova'));
});


Route::get('/characteristics', function () {

    $title = 'Characteristics';
    $list_title = 'Cosa possiamo fare con Laravel?';
    $list = ['Creare API RESTful', 'Gestire la rotta', 'Autenticazione e Autorizzazione', 'Sistema di Templating', 'Gestione del Database', 'Migrazione e Gestione delle Tabelle'];

    return view('characteristics', compact('title', 'list_title', 'list'));
});


Route::get('/account', function () {

    $title = 'Account';
    $user = [
        'name' => 'Simo',
        'surname' => 'Martinucci',
        'message' => 'per aver scoperto tutti i segreti di Laravel'
    ];

    return view('account', compact('title', 'user'));
});

