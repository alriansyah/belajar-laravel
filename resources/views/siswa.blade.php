@extends('layouts.mainLayout')
@section('title', 'Siswa') {{-- ditangkap yield --}}

@section('content')
    {{--  --}}
    <div class="container">
        <h1>Halaman Siswa</h1>
        <h3>Siswa List</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>NIM</th>
                    <th>Kelas</th>
                    <th>Eskul</th>
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
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
