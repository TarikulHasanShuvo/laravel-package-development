<?php


use Illuminate\Support\Facades\Route;
use Tarikul\Contact\Http\Controllers\ContactController;

Route::resource('contact', ContactController::class);
