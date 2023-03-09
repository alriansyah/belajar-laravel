@extends('dashboard.index')
@section('title', 'Kelas | Edit') {{-- ditangkap yield --}}

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Edit Data Kelas</h1>
@endsection

@section('content')
    <div class="col-8">
        <form action="/class/{{ $class->id }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-4">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $class->nama }}" required>
            </div>

            <div class="mb-4">
                <label for="nama">Wali Kelas</label>
                <select name="teacher_id" id="teacher" class="form-control" required>
                    <option value="{{ $class->waliKelas->id }}">{{ $class->waliKelas->name }}</option>
                    @foreach ($teacher as $list)
                        <option value="{{ $list->id }}">{{ $list->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <button class="btn btn-success" title="submit">Update</button>
            </div>
        </form>
    </div>
@endsection
