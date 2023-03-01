@extends('layouts.mainLayout')
@section('title', 'Kelas') {{-- ditangkap yield --}}

@section('content')
    {{--  --}}
    <div class="container">
        <h1>Halaman Kelas</h1>
        <h3>Class List</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($classList as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->nama }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
