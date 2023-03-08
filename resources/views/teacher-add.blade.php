{{-- @extends('layouts.mainLayout') --}}
@extends('dashboard.index')
@section('title', 'Teacher | Add New') {{-- ditangkap yield --}}

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Tambah Data Teacher</h1>
@endsection

@section('content')
<div class="col-8">
    <form action="/teacher" method="POST">
        @csrf
        <div class="mb-4">
            <label for="nama">Name</label>
            <input type="text" class="form-control" id="nama" name="name" required>
        </div>

        <div class="mb-4">
            <button class="btn btn-success" title="submit">Save</button>
        </div>
    </form>
</div>
@endsection