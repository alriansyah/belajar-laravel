{{-- @extends('layouts.mainLayout') --}}
@extends('dashboard.index')
@section('title', 'Teacher') {{-- ditangkap yield --}}

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Teacher</h1>
@endsection

@section('content')
    {{--  --}}
    <div class="container">

        <div class="mb-3">
            <a href="/teacher-add" class="btn btn-primary">Tambah Data <i class="fa-solid fa-plus"></i></a>
        </div>

        <table class="table table-hover table-bordered border-dark">
            <thead class="bg-success text-gray-800">
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teacherList as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->name }}</td>
                        <td><a href="/teacher-detail/{{ $data->id }}"><i class="fa-regular fa-eye"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
