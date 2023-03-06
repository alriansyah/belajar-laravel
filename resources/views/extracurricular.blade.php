{{-- @extends('layouts.mainLayout') --}}
@extends('dashboard.index')
@section('title', 'Extracurricular') {{-- ditangkap yield --}}

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Eskul</h1>
@endsection

@section('content')
    {{--  --}}
    <div class="container">
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
