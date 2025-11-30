<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});



Route::get('/portfolio/{firstname}/{lastname}', function ($firstname, $lastname) {
   // return view('portfolio');
     return $firstname . " " . $lastname;
});