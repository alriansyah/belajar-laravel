<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use App\Models\Teacher;
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
        $class = ClassRoom::get(); // $class = NamaModel::with('namaMethodRelationship')->get();
        // Cara req data
        // select * from class;
        // select * from siswa where in('1A', '1B', '1C', '1D');
        return view('/classroom', ['classList' => $class]);
    }

    public function show($id) {
        $class = ClassRoom::with('siswa', 'waliKelas')->findOrFail($id);
        return view('/class-detail', ['class' => $class]);
    }

    public function create()
    {
        $teacher = Teacher::select('id', 'name')->get();
        return view('/class-add', ['teacher' => $teacher]);
    }

    public function store(Request $request)
    {
        $class = ClassRoom::create($request->all());
        return redirect('/class');
    }
}