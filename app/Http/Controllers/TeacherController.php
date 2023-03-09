<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    function index()
    {
        // Eloquent ORM (rekomendasi)
        $teacher = Teacher::get();
        return view('/teacher', ['teacherList' => $teacher]);
    }

    public function show($id) {
        $teacher = Teacher::with('class.siswa')->findOrFail($id);
        return view('/teacher-detail', ['teacher' => $teacher]);
    }

    public function create()
    {
        return view('/teacher-add');
    }
    
    // tangkap dan insert data
    public function store(Request $request)
    {
        $teacher = Teacher::create($request->all());
        return redirect('/teacher');
    }
    
    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('/teacher-edit', ['teacher' => $teacher]);
    }

    public function update(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->update($request->all());
        return redirect('/teacher');
    }
}