{{-- @extends('layouts.mainLayout') --}}
@extends('dashboard.index')
@section('title', 'Siswa') {{-- ditangkap yield --}}

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Siswa</h1>
@endsection

@section('content')
    {{--  --}}
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>NIM</th>
                    <th>Kelas</th>
                    <th>Eskul</th>
                    <th>Wali Kelas</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswaList as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->gender }}</td>
                        <td>{{ $data->nim }}</td>
                        <td>{{ $data->class->nama }}</td> {{-- Hasil join siswa -> class (many to one) menggunakan eloquent relatioship --}}
                        {{-- <td>{{ $data->class['nama'] }}</td> bisa gini jg, ini cara dari tutorial cara fajar --}}
                        <td>
                            @foreach ($data->extracurriculars as $items)
                                - {{ $items->name }} <br>
                            @endforeach
                        </td>
                        <td>{{ $data->class->waliKelas->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
