@extends('layouts.mainLayout')
@section('title', 'Home') {{-- ditangkap yield --}}

@section('content')
    <div class="container">
        <h5>Nama : {{ $name }}</h5>
        <h5>Alamat : {{ $alamat }}</h5>
        <h5>Pekerjaan : {{ $pekerjaan }}</h5>
    </div>
    <br>

    {{-- If Statement --}}
    <div class="container">
        @if ($role === 'admin')
            <p>Selamat Datang Admin {{ $name }}, anda login sebagai <span
                    class="fs-4 fw-bold">{{ $role }}</span></p>
        @elseif ($role === 'user')
            <p>Selamat Datang User {{ $name }}, anda login sebagai <span
                    class="fs-4 fw-bold">{{ $role }}</span></p>
        @else
            <p>Selamat Datang tamu</p>
        @endif
    </div>

    {{-- Switch Case --}}
    <div class="container">
        @switch($role)
            @case('admin')
                <p>Selamat Datang Admin {{ $name }}, anda login sebagai <span class="fs-4 fw-bold">{{ $role }}</span>
                </p>
            @break

            @case('user')
                <p>Selamat Datang User {{ $name }}, anda login sebagai <span class="fs-4 fw-bold">{{ $role }}</span>
                </p>
            @break

            @default
                <p>Selamat Datang tamu</p>
        @endswitch
    </div>
    <br>

    {{-- For Loop --}}
    <div class="container">
        @for ($i = 1; $i <= 10; $i++)
            @for ($j = 1; $j <= $i; $j++)
                *
            @endfor
            <p></p>
        @endfor
    </div>
    <br>

    {{-- Foreach --}}
    <div class="container">
        @foreach ($buah as $data)
            <p>{{ $data }}</p>
        @endforeach
    </div>
    <br>
    {{--  --}}
    <div class="container">
        <table class="table">
            <thead class="bg-warning">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Buah</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($buah as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
