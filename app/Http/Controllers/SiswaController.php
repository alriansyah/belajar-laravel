<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        // // Eloquent ORM (rekomendasi)
        // $siswa = Siswa::all(); // SELECT * FROM siswa;
        // return view('/siswa', ['siswaList' => $siswa]);

        $nilai = [9, 8, 7, 6, 5, 4, 3, 2, 1, 10];

        // dd($nilai);

        // php biasa
        // 1. hitung jumlah nilai
        // 2. hitung berapa banyak nilsi
        // 3. hitung nilai rata-rata

        // $countNilai = count($nilai);
        // $totalNilai = array_sum($nilai);
        // $nilaiRataRata = $totalNilai / $countNilai;
        // dd($nilaiRataRata);



        // Collection
        // 1. hitung rata-rata

        // $nilaiRataRata = collect($nilai)->avg();
        // dd($nilaiRataRata);

        // Beberapa method pada Collection:

        // Contains = cek apakah sebuah array memiliki sesuatu : Menghasilkan Boolean
        // $cekNilai = collect($nilai)->contains(10);
        // $cekNilai = collect($nilai)->contains(function ($value) {
        //     return $value < 6;
        // });

        // Diff
        // $restaurantA = ["burger", "siomay", "pizza", "spaghetti", "makaroni", "martabak", "bakso"];
        // $restaurantB = ["pizza", "fried chicken", "martabak", "sayur asem", "pecel lele", "bakso"];
        // // Menu restoran apa aja sih yang ada di restaurant A tapi ga ada di restaurant B:
        // $menuRestoA = collect($restaurantA)->diff($restaurantB);

        /* 
            Filter
            Untuk menyaring data 
        */
        // Menampilkan nilai lebih dari 7
        // $filterNilai = collect($nilai)->filter(function($value) {
        //     return $value > 7;
        // })->all();

        // Pluck
        // $biodata = [
        //     ['nama' => 'budi', 'umur' => 17],
        //     ['nama' => 'ani', 'umur' => 16],
        //     ['nama' => 'siti', 'umur' => 17],
        //     ['nama' => 'rudi', 'umur' => 20],
        // ];

        // $dapatkanNama = collect($biodata)->pluck('nama')->all();

        /*  
            Map
            Lebih ke perulangan / looping

            - kita akan mencari tahu hasil dari nilai jika dikali 2 dari data2 yang ada di array $nilai
        */
        // Manual php :
        // $nilaiKaliDua = [];
        // foreach($nilai as $value) {
        //     array_push($nilaiKaliDua, $value * 2);
        // }

        // Otomatis menggunakan Map:
        $nilaiKaliDua = collect($nilai)->map(function($value) {
            return $value * 2;
        })->all();
        
        dd($nilaiKaliDua);
    }
}