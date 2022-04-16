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
    return view('w3soft.index',[
        'route' => 'index'
    ]);
})->name('index');

Route::get('/about', function () {
    return view('w3soft.about',[
        'route' => 'about'
    ]);
})->name('about');

Route::get('/portfolio', function () {
    return view('w3soft.portfolio',[
        'route' => 'portfolio'
    ]);
})->name('portfolio');

Route::get('/services', function () {
    return view('w3soft.services',[
        'route' => 'services'
    ]);
})->name('services');

Route::get('/contact', function () {
    return view('w3soft.contact',[
        'route' => 'contact'
    ]);
})->name('contact');

Route::get('/blog', function () {
    return view('w3soft.blog',[
        'route' => 'blog'
    ]);
})->name('blog');

Route::get('/blog-details', function () {
    return view('w3soft.blog-details',[
        'route' => 'blog-details'
    ]);
})->name('blog-details');