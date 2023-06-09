<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BreweriesController;

// Public routes
Route::get('/breweries', [BreweriesController::class, 'index']);
Route::get('/breweries/{brewery}', [BreweriesController::class, 'search'])->where('brewery', '[a-zA-Z0-9 _\-]+');
