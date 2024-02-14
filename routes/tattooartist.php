<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TattooArtistController;


// The Route to display all the tattooartists
Route::get('/tattooartists', [TattooArtistController::class, 'index']);

// The Route to display a specific tattooartist
Route::get('/tattooartist/{id}', [TattooArtistController::class, 'show{$id}']);

