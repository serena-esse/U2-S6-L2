<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() 
    {//dal db prendiamo la lista di libri
        return view('books.index');
    }
    public function create() 
    {
        return view('books.create');
    }
    public function show($id) 
    {
        return view('books.show', ['id'=>$id]);
    }
    public function edit($id) 
    {// Passare i dati alla vista usando compact
        return view('books.edit', compact('id'));
    }
}
