<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Page1Controller;
use App\Http\Controllers\Page2Controller;

Route::get('/', function() {
    return view('welcome');
});
Route::get('/page1', [Page1Controller::class, 'index'])->name('profile');
Route::get('/page2', [Page2Controller::class, 'index'])->name('kampus');
