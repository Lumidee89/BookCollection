<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    $books = App\Models\Book::all();
    return Inertia::render('Layouts/AppLayout', ['books' => $books]);
});