{{-- @extends('layouts.mainLayout') --}}
@extends('dashboard.index')
@section('title', 'Siswa | Add New') {{-- ditangkap yield --}}

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Tambah Data Siswa</h1>
@endsection

@section('content')
    <div class="col-8">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/siswa" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="nama">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="mb-4">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-control">
                    <option value="">Select One</option>
                    <option value="L">L</option>
                    <option value="P">P</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="nim">NIM</label>
                <input type="number" class="form-control" id="nim" name="nim">
            </div>

            <div class="mb-4">
                <label for="class">Kelas</label>
                <select name="class_id" id="class" class="form-control">
                    <option value="">Select One</option>
                    @foreach ($class as $list)
                        <option value="{{ $list->id }}">{{ $list->nama }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="photo">Foto</label>
                <div class="input-group">
                    <input type="file" class="form-control" id="photo" name="photo">
                </div>
            </div>

            <div class="mb-4">
                <button class="btn btn-success" title="submit">Save</button>
            </div>
        </form>
    </div>
@endsection
