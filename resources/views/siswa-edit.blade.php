{{-- @extends('layouts.mainLayout') --}}
@extends('dashboard.index')
@section('title', 'Siswa | Edit') {{-- ditangkap yield --}}

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Edit Data Siswa</h1>
@endsection

@section('content')
    <div class="col-8">
        <form action="/siswa/{{ $siswa->id }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-4">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $siswa->name }}" required>
            </div>

            <div class="mb-4">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-control" required>
                    <option value="{{ $siswa->gender }}">{{ $siswa->gender }}</option>
                    @if ($siswa->gender == 'L')
                        <option value="P">P</option>
                    @else
                    <option value="L">L</option>
                    @endif
                </select>
            </div>

            <div class="mb-4">
                <label for="nim">NIM</label>
                <input type="number" class="form-control" id="nim" name="nim" value="{{ $siswa->nim }}" required>
            </div>

            <div class="mb-4">
                <label for="class">Kelas</label>
                <select name="class_id" id="class" class="form-control" required>
                    <option value="{{ $siswa->class->id }}">{{ $siswa->class->nama }}</option>
                    @foreach ($class as $list)
                        <option value="{{ $list->id }}">{{ $list->nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <button class="btn btn-success" title="submit">Update</button>
            </div>
        </form>
    </div>
@endsection
