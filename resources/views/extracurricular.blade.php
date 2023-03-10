{{-- @extends('layouts.mainLayout') --}}
@extends('dashboard.index')
@section('title', 'Extracurricular') {{-- ditangkap yield --}}

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Eskul</h1>
@endsection

@section('content')
    {{--  --}}
    <div class="container">

        <div class="mb-3">
            <a href="/extracurricular-add" class="btn btn-primary">Tambah Data <i class="fa-solid fa-plus"></i></a>
        </div>

        @if (Session::has('status'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('message') }}
            </div>
        @endif

        <table class="table table-hover table-bordered border-dark">
            <thead class="bg-success text-gray-800">
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($eskul as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->name }}</td>
                        <td class="w-15">
                            <div class="container d-flex justify-content-around reset">
                                <a href="/extracurricular-detail/{{ $data->id }}"><i
                                        class="fa-regular fa-eye fa-lg"></i></a>
                                <a href="/extracurricular-edit/{{ $data->id }}"><i
                                        class="fa-solid fa-pen-to-square fa-lg"></i></a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
