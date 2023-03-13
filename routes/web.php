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

Route::get('/trim-string', function () {
    $string = '  Hello World!  ';
    return trim($string);
});


Route::get('/trim-string-with-parameters', function () {
    $string = '  Hello World!  ';
    return trim($string, ' !');
});

Route::get('/trim-string-with-parameters-and-flags', function () {
    $string = '  Hello World!  ';
    return trim($string, ' !', STR_PAD_BOTH);
});

Route::get('/trim-string-with-parameters-and-flags-and-encoding', function () {
    $string = '  Hello World!  ';
    return trim($string, ' !', STR_PAD_BOTH, 'UTF-8');
});
