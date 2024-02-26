<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CantonController;


Route::controller(CantonController::class)->group(function (){


    // The Route to display all the cantons
    Route::get('{language}/cantons', 'index');


    // The Route to display a specific canton
    Route::get('{language}/cantons/{name}', 'show');


});