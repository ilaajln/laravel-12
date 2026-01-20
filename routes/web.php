<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

//import product controller
use App\Http\Controllers\Controller;

//route resource for products
Route::resource('/products', ProductController::class);

Route::get('/', function () {
    return view('welcome');
});
