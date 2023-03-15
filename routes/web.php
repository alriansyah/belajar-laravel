<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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
    return view('home');
})->middleware('auth');

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login')->middleware('guest');
    Route::post('/login', 'authenticating')->middleware('guest');
    Route::get('/logout', 'logout')->middleware(['auth']);
});

Route::controller(SiswaController::class)->group(function () {
    Route::get('/siswa', 'index')->middleware('auth');
    Route::get('/siswa-detail/{id}', 'show')->middleware(['auth', 'must-admin-or-teacher']);
    Route::get('/siswa-add', 'create')->middleware(['auth', 'must-admin-or-teacher']);
    Route::post('/siswa', 'store')->middleware(['auth', 'must-admin-or-teacher']);
    Route::get('/siswa-edit/{id}', 'edit')->middleware(['auth', 'must-admin-or-teacher']);
    Route::put('/siswa/{id}', 'update')->middleware(['auth', 'must-admin-or-teacher']);
    Route::get('/siswa-delete/{id}', 'delete')->middleware(['auth', 'must-admin']);
    Route::delete('/siswa-destroy/{id}', 'destroy')->middleware('auth', 'must-admin');
    Route::get('/siswa-deleted', 'deletedSiswa')->middleware('auth', 'must-admin');
    Route::get('/siswa/{id}/restore', 'restore')->middleware('auth', 'must-admin');
});

Route::controller(ClassController::class)->group(function () {
    Route::get('/class', 'index')->middleware('auth');
    Route::get('/class-detail/{id}', 'show')->middleware('auth');
    Route::get('/class-add', 'create')->middleware('auth');
    Route::post('/class', 'store')->middleware('auth');
    Route::get('/class-edit/{id}', 'edit')->middleware('auth');
    Route::put('/class/{id}', 'update')->middleware('auth');
});

Route::controller(ExtracurricularController::class)->group(function () {
    Route::get('/extracurricular', 'index')->middleware('auth');
    Route::get('/extracurricular-detail/{id}', 'show')->middleware('auth');
    Route::get('/extracurricular-add', 'create')->middleware('auth');
    Route::post('/extracurricular', 'store')->middleware('auth');
    Route::get('/extracurricular-edit/{id}', 'edit')->middleware('auth');
    Route::put('/extracurricular/{id}', 'update')->middleware('auth');
});

Route::controller(TeacherController::class)->group(function () {
    Route::get('/teacher', 'index')->middleware('auth');
    Route::get('/teacher-detail/{id}', 'show')->middleware('auth');
    Route::get('/teacher-add', 'create')->middleware('auth');
    Route::post('/teacher', 'store')->middleware('auth');
    Route::get('/teacher-edit/{id}', 'edit')->middleware('auth');
    Route::put('/teacher/{id}', 'update')->middleware('auth');
});