<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PubblicController;
use App\Http\Controllers\AnnounceController;


// ROTTE PUBBLICHE
Route::get('/',[PubblicController::class,'home'])->name('home');