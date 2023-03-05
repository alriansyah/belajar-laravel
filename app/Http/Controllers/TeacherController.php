<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    function index()
    {
        // Eloquent ORM (rekomendasi)
        $teacher = Teacher::all();
        return view('/teacher', ['teacherList' => $teacher]);
    }
}