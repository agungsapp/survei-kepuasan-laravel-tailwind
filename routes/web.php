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
    return redirect()->to(route('home'));
});


Route::get('/home', function () {
    return view('survei.home.index');
})->name('home');
Route::get('/survei', function () {
    return view('survei.survei.index');
})->name('survei');
// Route::get('/home', function () {});




// next : buat bagian surveinya yang benar  done !