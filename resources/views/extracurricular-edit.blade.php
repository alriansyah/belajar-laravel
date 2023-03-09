{{-- @extends('layouts.mainLayout') --}}
@extends('dashboard.index')
@section('title', 'Eskul | Edit') {{-- ditangkap yield --}}

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Edit Data Eskul</h1>
@endsection

@section('content')
<div class="col-8">
    <form action="/extracurricular/{{ $eskul->id }}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-4">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $eskul->name }}" required>
        </div>

        <div class="mb-4">
            <button class="btn btn-success" title="submit">Update</button>
        </div>
    </form>
</div>
@endsection