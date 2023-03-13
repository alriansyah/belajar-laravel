@extends('dashboard.index')
@section('title', 'Detail Siswa')

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Detail Siswa</h1>
@endsection

@section('content')
    <style>
        th {
            width: 20%;
        }
    </style>

    <h5>Halaman Detail Siswa</h5>

    <div class="my-3 d-flex">
        @if ($siswa->image != '')
            <img src="{{ asset('storage/photo/' . $siswa->image) }}" alt="" class="w-15 mx-auto">
        @else
            <img src="{{ asset('images/default.png') }}" alt="" class="w-15 mx-auto">
        @endif
    </div>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jenis Kelamin</th>
                <th>Kelas</th>
                <th>Wali Kelas</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $siswa->name }}</td>
                <td>{{ $siswa->nim }}</td>
                <td>
                    @if ($siswa->gender == 'P')
                        Perempuan
                    @elseif ($siswa->gender == 'L')
                        Laki-laki
                    @endif
                </td>
                <td>{{ $siswa->class->nama }}</td>
                <td>{{ $siswa->class->waliKelas->name }}</td>
            </tr>
        </tbody>
    </table>

    <h5 class="mt-3">Eskul yang diikuti :</h5>
    <ol>
        @foreach ($siswa->extracurriculars as $eskul)
            <li>{{ $eskul->name }}</li>
        @endforeach
    </ol>
@endsection
