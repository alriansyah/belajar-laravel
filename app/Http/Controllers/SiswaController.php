<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        // Eloquent ORM (rekomendasi)
        // Query Builder (ini masih oke)
        // Raw Query (tidak rekomen karena rawan sql injection)

        // Eloquent ORM (rekomendasi)
        $siswa = Siswa::all(); // SELECT * FROM siswa;
        return view('/siswa', ['siswaList' => $siswa]);
    }
}