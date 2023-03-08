{{-- @extends('layouts.mainLayout') --}}
@extends('dashboard.index')
@section('title', 'Siswa') {{-- ditangkap yield --}}

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Siswa</h1>
@endsection

@section('content')
    {{--  --}}
    <div class="container">
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
                @foreach ($siswaList as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->gender }}</td>
                        <td>{{ $data->nim }}</td>
                        <td><a href="/siswa-detail/{{ $data->id }}"><i class="fa-regular fa-eye"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
