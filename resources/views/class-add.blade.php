{{-- @extends('layouts.mainLayout') --}}
@extends('dashboard.index')
@section('title', 'Kelas | Add New') {{-- ditangkap yield --}}

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Tambah Data Kelas</h1>
@endsection

@section('content')
<div class="col-8">
    <form action="/class" method="POST">
        @csrf
        <div class="mb-4">
            <label for="nama">Name</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>

        <div class="mb-4">
            <label for="nama">Wali Kelas</label>
            <select name="teacher_id" id="teacher" class="form-control" required>
                <option value="">Select One</option>
                @foreach ($teacher as $list)
                    <option value="{{ $list->id }}">{{ $list->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <button class="btn btn-success" title="submit">Save</button>
        </div>
    </form>
</div>
@endsection