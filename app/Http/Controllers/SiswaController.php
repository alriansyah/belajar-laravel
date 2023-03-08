<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        // Eloquent ORM (rekomendasi)
        $siswa = Siswa::get(); // $siswa = NamaModel::with('namaMethodRelationship')->get(); // ini cara Eager Loading
        return view('/siswa', ['siswaList' => $siswa]);
    }

    public function show($id)
    {
        $siswa = Siswa::with(['class.waliKelas', 'extracurriculars'])->findOrFail($id);
        return view('/siswa-detail', ['siswa' => $siswa]);
    }
}