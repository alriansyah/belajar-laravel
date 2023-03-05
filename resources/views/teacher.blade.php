@extends('layouts.mainLayout')
@section('title', 'Teacher') {{-- ditangkap yield --}}

@section('content')
    {{--  --}}
    <div class="container">
        <h1>Halaman Teacher</h1>
        <h3>Teacher List</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teacherList as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
