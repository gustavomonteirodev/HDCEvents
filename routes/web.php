<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {

    $name = 'Gustavo';
    $age = 26;
    $arr = [10,20,30,40,50];
    $names = ['Matheus', 'Maria', 'João', 'Saulo'];

    return view('welcome',
    [
        'name' => $name,
        'age' => $age,
        'occupation' => 'programador',
        'arr' => $arr,
        'names' => $names
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
