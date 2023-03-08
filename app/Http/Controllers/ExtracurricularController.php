<?php

namespace App\Http\Controllers;

use App\Models\Extracurricular;
use Illuminate\Http\Request;

class ExtracurricularController extends Controller
{
    public function index()
    {
        // Eloquent ORM (rekomendasi)
        $extracurricular = Extracurricular::get();
        return view('/extracurricular', ['eskul' => $extracurricular]);
    }

    public function show($id) {
        $extracurricular = Extracurricular::with('siswa')->findOrFail($id);
        return view('/extracurricular-detail', ['extracurricular' => $extracurricular]);
    }
}