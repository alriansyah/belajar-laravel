@extends('dashboard.index')
@section('title', 'Detail Eskul')

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Detail Eskul</h1>
@endsection

@section('content')
    <style>
        th {
            width: 20%;
        }
    </style>

    <h5>Halaman Detail Eskul : {{ $extracurricular->name }}</h5>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Anggota</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $extracurricular->name }}</td>
                <td>
                    @foreach ($extracurricular->siswa as $siswa)
                        - {{ $siswa->name }} <br>
                    @endforeach
                </td>
            </tr>
        </tbody>
    </table>
@endsection
