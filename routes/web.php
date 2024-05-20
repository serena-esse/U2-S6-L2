<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
//rotte per le pagine generali
//restituisce la rotta e una funzione con il contenuto della pagina. il corpo della funzione si trova in resources/views/nome.blade.php
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/', [PageController::class, 'home'])->name('home');

//rotte per la risorsa del sito
Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');
Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');