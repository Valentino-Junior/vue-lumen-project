<?php

use Illuminate\Http\Request;

Route::get('/products', 'ProductController@index');
Route::get('/products/{id}', 'ProductController@show');

// Add additional routes as needed (e.g., for product creation, update, deletion)
