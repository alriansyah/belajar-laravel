{{-- @extends('layouts.mainLayout') --}}
@extends('dashboard.index')
@section('title', 'Kelas') {{-- ditangkap yield --}}

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Kelas</h1>
@endsection

@section('content')
    {{--  --}}
    <div class="container">

        <div class="mb-3">
            <a href="/class-add" class="btn btn-primary">Tambah Data <i class="fa-solid fa-plus"></i></a>
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
                @foreach ($classList as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->nama }}</td>
                        <td class="w-15">
                            <div class="container d-flex justify-content-around reset">
                                <a href="/class-detail/{{ $data->id }}"><i class="fa-regular fa-eye fa-lg"></i></a>
                                <a href="/class-edit/{{ $data->id }}"><i class="fa-solid fa-pen-to-square fa-lg"></i></a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
