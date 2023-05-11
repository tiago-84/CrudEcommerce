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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('index', function(){
    return view('ecommerce/index');
});

Route::get('produto', function(){
    return view('ecommerce/produto');
});

Route::get('admin-home', function(){
    return view('ecommerce/admin-home');
});

Route::get('admin-adicionar-produto', function(){
    return view('ecommerce/admin-adicionar-produto');
});
