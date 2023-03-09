{{-- @extends('layouts.mainLayout') --}}
@extends('dashboard.index')
@section('title', 'Teacher | Edit') {{-- ditangkap yield --}}

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Edit Data Teacher</h1>
@endsection

@section('content')
<div class="col-8">
    <form action="/teacher/{{ $teacher->id }}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-4">
            <label for="nama">Name</label>
            <input type="text" class="form-control" id="nama" name="name" value="{{ $teacher->name }}" required>
        </div>

        <div class="mb-4">
            <button class="btn btn-success" title="submit">Update</button>
        </div>
    </form>
</div>
@endsection