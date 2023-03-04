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
        $siswa = Siswa::with('class')->get(); // $siswa = NamaModel::with('namaMethodRelationship')->get(); // ini cara Eager Loading
        return view('/siswa', ['siswaList' => $siswa]);
    }
}