<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::controller(UserController::class)->group(function () {

    // The Route to display all the users
    Route::get('/users', 'index');

    //The Route to display a specific user
    Route::get('/user/{id}', 'show');

    // The Route to create a new user
    Route::post('/createuser', 'create');

    //The Route to update a specific user
    Route::post('/updateuser/{id}', 'update');

    //The Route to delete a specific user
    Route::post('/deleteuser/{id}', 'delete');

});
