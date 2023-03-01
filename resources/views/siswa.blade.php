@extends('layouts.mainLayout')
@section('title', 'Siswa') {{-- ditangkap yield --}}

@section('content')
    {{--  --}}
    <div class="container">
        <h1>Halaman Siswa</h1>
        <h3>Student List</h3>
        <ol>
            @foreach ($siswaList as $data)
                <li>
                    {{ $data->name }} | {{ $data->gender }} | {{ $data->nim }} | {{ $data->class_id }}
                </li>
            @endforeach
        </ol>
    </div>
@endsection
