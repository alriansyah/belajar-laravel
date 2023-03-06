{{-- @extends('layouts.mainLayout') --}}
@extends('dashboard.index')
@section('title', 'Teacher') {{-- ditangkap yield --}}

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Teacher</h1>
@endsection

@section('content')
    {{--  --}}
    <div class="container">
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
