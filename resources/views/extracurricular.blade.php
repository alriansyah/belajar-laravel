@extends('layouts.mainLayout')
@section('title', 'Extracurricular') {{-- ditangkap yield --}}

@section('content')
    {{--  --}}
    <div class="container">
        <h1>Halaman Eskul</h1>
        <h3>Eskul List</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Anggota</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($eskul as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->name }}</td>
                        <td>
                            @foreach ($data->siswa as $items)
                                - {{ $items->name }} <br>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
