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
        // Query Builder (ini masih oke)
        // Raw Query (tidak rekomen karena rawan sql injection)

        // Eloquent ORM (rekomendasi)
        $siswa = Siswa::all(); // SELECT * FROM siswa;
        return view('/siswa', ['siswaList' => $siswa]);




        // create data dengan eloquent
        // Siswa::create([
        //     'name' => 'Al Riansyah',
        //     'gender' => 'L',
        //     'nim' => '12345678',
        //     'class_id' => 1,
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        // ]);


        // update dengan eloquent
        // Siswa::find(28)->update([
        //     'name' => 'Al Riansyah 2',
        //     'class_id' => 3
        // ]);


        // delete data
        // Siswa::find(28)->delete();
    }
}
