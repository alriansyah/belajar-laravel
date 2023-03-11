<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ExtracurricularController;

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

// Route::get('/siswa', [SiswaController::class, 'index']);
// Route::get('/siswa/{id}', [SiswaController::class, 'index']);

Route::controller(SiswaController::class)->group(function () {
    Route::get('/siswa', 'index');
    Route::get('/siswa-detail/{id}', 'show');
    Route::get('/siswa-add', 'create');
    Route::post('/siswa', 'store');
    Route::get('/siswa-edit/{id}', 'edit');
    Route::put('/siswa/{id}', 'update');
    Route::get('/siswa-delete/{id}', 'delete');
    Route::delete('/siswa-destroy/{id}', 'destroy');
    Route::get('/siswa-deleted', 'deletedSiswa');
    Route::get('/siswa/{id}/restore', 'restore');
});

Route::controller(ClassController::class)->group(function () {
    Route::get('/class', 'index');
    Route::get('/class-detail/{id}', 'show');
    Route::get('/class-add', 'create');
    Route::post('/class', 'store');
    Route::get('/class-edit/{id}', 'edit');
    Route::put('/class/{id}', 'update');
});

Route::controller(ExtracurricularController::class)->group(function () {
    Route::get('/extracurricular', 'index');
    Route::get('/extracurricular-detail/{id}', 'show');
    Route::get('/extracurricular-add', 'create');
    Route::post('/extracurricular', 'store');
    Route::get('/extracurricular-edit/{id}', 'edit');
    Route::put('/extracurricular/{id}', 'update');
});

Route::controller(TeacherController::class)->group(function () {
    Route::get('/teacher', 'index');
    Route::get('/teacher-detail/{id}', 'show');
    Route::get('/teacher-add', 'create');
    Route::post('/teacher', 'store');
    Route::get('/teacher-edit/{id}', 'edit');
    Route::put('/teacher/{id}', 'update');
});