{{-- @extends('layouts.mainLayout') --}}
@extends('dashboard.index')
@section('title', 'Kelas') {{-- ditangkap yield --}}

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Kelas</h1>
@endsection

@section('content')
    {{--  --}}
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Siswa</th>
                    <th>Wali Kelas</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($classList as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>
                            @foreach ($data->siswa as $siswa)
                                - {{ $siswa->name }} <br>
                            @endforeach
                        </td>
                        <td>{{ $data->waliKelas->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
