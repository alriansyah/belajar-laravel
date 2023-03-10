<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Extracurricular;
use Illuminate\Support\Facades\Session;

class ExtracurricularController extends Controller
{
    public function index()
    {
        // Eloquent ORM (rekomendasi)
        $extracurricular = Extracurricular::get();
        return view('/extracurricular', ['eskul' => $extracurricular]);
    }

    public function show($id)
    {
        $extracurricular = Extracurricular::with('siswa')->findOrFail($id);
        return view('/extracurricular-detail', ['extracurricular' => $extracurricular]);
    }

    public function create()
    {
        return view('/extracurricular-add');
    }

    // tangkap dan insert data
    public function store(Request $request)
    {
        $extracurricular = Extracurricular::create($request->all());

        if ($extracurricular) {
            Session::flash('status', 'success');
            Session::flash('message', 'Add new class success.!');
        }

        return redirect('/extracurricular');
    }

    public function edit($id)
    {
        $eskul = Extracurricular::findOrFail($id);
        return view('/extracurricular-edit', ['eskul' => $eskul]);
    }

    public function update(Request $request, $id)
    {
        $eskul = Extracurricular::findOrFail($id);
        $eskul->update($request->all());
        
        if ($eskul) {
            Session::flash('status', 'success');
            Session::flash('message', 'Update data berhasil.!');
        }
        
        return redirect('/extracurricular');
    }
}