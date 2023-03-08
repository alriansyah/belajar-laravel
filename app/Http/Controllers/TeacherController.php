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
}