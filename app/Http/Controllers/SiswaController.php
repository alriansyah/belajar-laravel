<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
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

    public function create()
    {
        $class = ClassRoom::select('id', 'nama')->get();
        return view('/siswa-add', ['class' => $class]);
    }

    public function store(Request $request)
    {
        // Manual
        // $siswa = new Siswa;
        // $siswa->name = $request->name;
        // $siswa->gender = $request->gender;
        // $siswa->nim = $request->nim;
        // $siswa->class_id = $request->class_id;
        // $siswa->save();

        // mass assigment | wajib didaftarkan menggunakan fillable di model untuk data apa aja yang boleh diisi
        // $siswa = new Siswa;
        // $siswa->create($request->all());
        $siswa = Siswa::create($request->all());
        return redirect('/siswa');
    }

    public function edit(Request $request, $id)
    {
        $siswa = Siswa::with('class')->findOrFail($id);
        $class = ClassRoom::where('id', '!=', $siswa->class_id)->get(['id', 'nama']);
        return view('/siswa-edit',['siswa' => $siswa, 'class' => $class]);
    }
 
    public function update(Request $request, $id) {
        // Manual
        // $siswa = Siswa::findOrFail($id);
        // $siswa->name = $request->name;
        // $siswa->gender = $request->gender;
        // $siswa->nim = $request->nim;
        // $siswa->class_id = $request->class_id;
        // $siswa->save();

        // mass assigment | wajib didaftarkan menggunakan fillable di model untuk data apa aja yang boleh diisi
        $siswa = Siswa::findOrFail($id);
        $siswa->update($request->all());
        return redirect('/siswa');
        
    }
}