<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $name = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_STRING);
    return view('about', ['name' => $name]);
});

Route::get('/contact', function () {
    // check is phone number is valid
    $phone = filter_input(INPUT_GET, 'phone', FILTER_SANITIZE_STRING);
    if (preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $phone)) {
        return true;
    } else {
        return false;
    }
});
