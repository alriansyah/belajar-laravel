<?php

namespace App\Http\Controllers;

use App\Models\Extracurricular;
use Illuminate\Http\Request;

class ExtracurricularController extends Controller
{
    public function index()
    {
        // Eloquent ORM (rekomendasi)
        $extracurricular = Extracurricular::with('siswa')->get();
        return view('/extracurricular', ['eskul' => $extracurricular]);
    }
}