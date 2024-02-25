<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TattooArtistController;


Route::controller(TattooArtistController::class)->group(function (){


    // Ili est possible de grouper toute ces routes, mettre PUT, DELETE, UPDATE dans les methode URL, mettre au pluriel mais à confirmer
    
    // The Route to display all the tattooartists
    Route::get('/tattooartists', 'index');

    // The Route to display a specific tattooartist
    Route::get('/tattooartist/{id}', 'show');

    // The Route to create a new tattoo artist
    Route::post('/createtattooartist', 'create');

    //The Route to update a specific tattoo artist
    Route::post('/updatetattooartist/{id}', 'update');

    // The Route to delete a specific tattooartist
    Route::post('/deletetattooartist/{id}', 'delete');
    
});