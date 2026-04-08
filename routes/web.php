<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// Practice Areas
Route::get('/areas-de-practica', function () {
    return view('pages.practice-areas');
})->name('practice-areas');

// About
Route::get('/sobre-nosotros', function () {
    return view('pages.about');
})->name('about');

// Contact
Route::get('/contacto', function () {
    return view('pages.contact');
})->name('contact');

Route::post('/contacto', [ContactController::class, 'send'])->name('contact.send');
