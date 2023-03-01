<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

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
    return view('home', [
        'name' => 'Al Riansyah',
        'alamat' => 'Desa Pelita Jaya',
        'pekerjaan' => 'Fullstack Developer',
        'role' => 'user',
        'buah' => ['Apel', 'Mangga', 'Jeruk', 'Semangka', 'Melon', 'Strawberry']
    ]);
});

// Route::get('/kelas', function(){
//     return view('kelas');
// });

Route::get('/siswa', [SiswaController::class, 'index']);