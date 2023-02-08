<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Contracts\Service\Attribute\Required;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// get

Route::get('/', function () {
    return view('app');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/delivery', function () {
    return view('delivery');
});
Route::get('/payment', function () {
    return view('payment');
});
Route::get('/guarantee', function () {
    return view('guarantee');
});
Route::get('/contacts', function () {
    return view('contacts');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/registration', function () {
    return view('registration');
});

// post