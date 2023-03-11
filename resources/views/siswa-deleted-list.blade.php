{{-- @extends('layouts.mainLayout') --}}
@extends('dashboard.index')
@section('title', 'Siswa Terhapus') {{-- ditangkap yield --}}

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Siswa Terhapus</h1>
@endsection

@section('content')
    <div class="container">

        <div class="mb-3">
            <a href="/siswa" class="btn btn-primary">Kembali <i class="fa-regular fa-circle-left"></i></a>
        </div>

        <table class="table table-hover table-bordered border-dark">
            <thead class="bg-success text-gray-800">
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>NIM</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $list)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $list->name }}</td>
                        <td>{{ $list->gender }}</td>
                        <td>{{ $list->nim }}</td>
                        <td class="w-15">
                            <div class="container d-flex justify-content-around reset">
                                <a href="/siswa/{{ $list->id }}/restore"><i class="fa-solid fa-trash-arrow-up"></i></a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
