@extends('dashboard.index')
@section('title', 'Detail Kelas')

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Detail Kelas</h1>
@endsection

@section('content')
    <style>
        th {
            width: 20%;
        }
    </style>

    <h5>Halaman Detail Kelas : {{ $class->nama }}</h5>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Siswa</th>
                <th>Wali Kelas</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $class->nama }}</td>
                <td>
                    @foreach ($class->siswa as $siswa)
                        - {{ $siswa->name }} <br>
                    @endforeach
                </td>
                <td>{{ $class->waliKelas->name }}</td>
            </tr>
        </tbody>
    </table>
@endsection
