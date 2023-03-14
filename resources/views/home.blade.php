@extends('dashboard.index')
@section('title', 'Home') {{-- ditangkap yield --}}

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Home</h1>
@endsection

@section('content')
    <h4>Selamat datang {{ Auth::user()->name }}. Anda login sebagai {{ Auth::user()->role->name }}</h4>

@endsection
