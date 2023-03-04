<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        // lazy loading 
        // $class = ClassRoom::all(); // cara request data => ketika dibutuhkan ambil data
        // select * from class;
        // select * from siswa where class='1A';
        // select * from siswa where class='1B';
        // select * from siswa where class='1C';
        // select * from siswa where class='1D';
        
        // eager loading
        $class = ClassRoom::with('siswa')->get(); // $class = NamaModel::with('namaMethodRelationship')->get();
        // Cara req data
        // select * from class;
        // select * from siswa where in('1A', '1B', '1C', '1D');
        return view('/classroom', ['classList' => $class]);
    }
}