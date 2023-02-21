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

Route::get('/home', function () {
    return view('home');
});

Route::get('/bebas', function () {
    return "Cetak string aja";
});

// view route standar
Route::view('/contact', 'contact');

// mengirim argumen ke view
Route::view('/perkenalan', 'perkenalan', ['name' => 'Al Riansyah', 'alamat' => 'Pelita Jaya', 'phone' => '085777889922']);

// Redirect
// Route::redirect('/contact', '/contact-us');

// Route Parameters
Route::get('/product/{id}', function (string $id) {
    return view('product.detail', ['id' => $id]);
});


// Route Prefixes
Route::prefix('admin')->group(function () {
    Route::get('/contact', function () {
        return 'Halaman Kontak Admin';
    });
    
    Route::get('/about', function () {
        return 'Halaman Tentang Admin';
    });
    
    Route::get('/profile', function () {
        return 'Halaman Profile Admin';
    });
});