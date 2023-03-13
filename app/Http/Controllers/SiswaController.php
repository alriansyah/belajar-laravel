<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Siswa;
use App\Models\ClassRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\SiswaCreateRequest;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        // Eloquent ORM (rekomendasi)
        $cari = $request->cari;
        $siswa = Siswa::with('class')
            ->where('name', 'LIKE', '%' . $cari . '%')
            ->orWhere('gender', $cari)
            ->orWhere('nim', 'LIKE', '%' . $cari . '%')
            ->orWhereHas('class', function ($query) use ($cari) {
                $query->where('nama', 'LIKE', '%' . $cari . '%');
            })
            ->paginate(15);
        return view('siswa', ['siswaList' => $siswa]);
    }

    public function show($id)
    {
        $siswa = Siswa::with(['class.waliKelas', 'extracurriculars'])->findOrFail($id);
        return view('siswa-detail', ['siswa' => $siswa]);
    }

    public function create()
    {
        $class = ClassRoom::select('id', 'nama')->get();
        return view('siswa-add', ['class' => $class]);
    }

    public function store(SiswaCreateRequest $request)
    {
        $newName = '';
        if ($request->file('photo')) {
            $extension = $request->file('photo')->getClientOriginalExtension();
            $newName = $request->name . '-' . now()->timestamp . '.' . $extension;
            $request->file('photo')->storeAs('photo', $newName);
        }

        $request['image'] = $newName;
        $siswa = Siswa::create($request->all());

        if ($siswa) {
            Session::flash('status', 'success');
            Session::flash('message', 'Add new siswa success.!');
        }

        return redirect('/siswa');
    }

    public function edit(Request $request, $id)
    {
        $siswa = Siswa::with('class')->findOrFail($id);
        $class = ClassRoom::where('id', '!=', $siswa->class_id)->get(['id', 'nama']);
        return view('siswa-edit', ['siswa' => $siswa, 'class' => $class]);
    }

    public function update(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->update($request->all());

        if ($siswa) {
            Session::flash('status', 'success');
            Session::flash('message', 'Update data berhasil.!');
        }

        return redirect('/siswa');
    }

    public function delete($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa', ['siswa' => $siswa]);
    }

    public function destroy($id)
    {
        $deletedSiswa = Siswa::findOrFail($id);
        $deletedSiswa->delete();

        if ($deletedSiswa) {
            Session::flash('status', 'success');
            Session::flash('message', 'Delete siswa success.!');
        }

        return redirect('/siswa');
    }

    public function deletedSiswa()
    {
        $deletedSiswa = Siswa::onlyTrashed()->get();
        return view('siswa-deleted-list', ['siswa' => $deletedSiswa]);
    }

    public function restore($id)
    {
        $deletedSiswa = Siswa::withTrashed()->where('id', $id)->restore();

        if ($deletedSiswa) {
            Session::flash('status', 'success');
            Session::flash('message', 'Restore siswa success.!');
        }

        return redirect('/siswa');
    }
}
