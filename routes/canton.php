<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CantonController;


Route::controller(CantonController::class)->group(function (){


    // The Route to display all the cantons
    Route::get('{language_translate}/cantons', 'index');


    // The Route to display a specific canton
    Route::get('{language_translate}/cantons/{name}', 'show');


});