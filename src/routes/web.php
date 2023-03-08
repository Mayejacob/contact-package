<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use Jayboss\Contact\Http\Controllers\ContactController;

Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact', [ContactController::class, 'save']);