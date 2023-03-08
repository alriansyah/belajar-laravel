@extends('dashboard.index')
@section('title', 'Detail Teacher')

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Detail Teacher</h1>
@endsection

@section('content')
    <style>
        th {
            width: 20%;
        }
    </style>

    <h5>Halaman Detail Teacher : {{ $teacher->name }}</h5>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Wali Kelas Di</th>
                <th>Siswa Yang Diajar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $teacher->name }}</td>
                <td>
                    @if ($teacher->class)
                        {{ $teacher->class->nama }}
                    @else
                        -
                    @endif
                </td>
                @if ($teacher->class === null)
                    <td>--</td>
                @else
                    <td>
                        @foreach ($teacher->class->siswa as $siswa)
                            - {{ $siswa->name }} <br>
                        @endforeach
                    </td>
                @endif
            </tr>
        </tbody>
    </table>
@endsection
