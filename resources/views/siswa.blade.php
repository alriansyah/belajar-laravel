{{-- @extends('layouts.mainLayout') --}}
@extends('dashboard.index')
@section('title', 'Siswa') {{-- ditangkap yield --}}

@section('keterangan')
    <h1 class="h3 mb-0 text-gray-800">Siswa</h1>
@endsection

@section('content')
    {{--  --}}
    <div class="container">

        <div class="mb-3 d-flex justify-content-between">
            <a href="/siswa-add" class="btn btn-primary">Tambah Data <i class="fa-solid fa-plus"></i></a>
            @if (Auth::user()->role_id == 1)
                <a href="/siswa-deleted" class="btn btn-danger">Show Deleted Data</a>    
            @endif
        </div>

        @if (Session::has('status'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('message') }}
            </div>
        @endif

        <div class="my-3 col-12 col-sm-8 col-md-5 reset">
            <form action="" method="get">
                <div class="input-group">
                    <input type="text" class="form-control" name="cari" placeholder="Cari....">
                    <button class="input-group-text badge-primary">Search</button>
                </div>
            </form>
        </div>

        <table class="table table-hover table-bordered border-dark">
            <thead class="bg-success text-gray-800">
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>NIM</th>
                    <th>Kelas</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswaList as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->gender }}</td>
                        <td>{{ $data->nim }}</td>
                        <td>{{ $data->class->nama }}</td>
                        <td class="w-15">
                            <div class="container d-flex justify-content-around reset">
                                @if (Auth::user()->role_id != 1 && Auth::user()->role_id != 2)
                                    -
                                @else
                                    <a href="/siswa-detail/{{ $data->id }}"><i class="fa-regular fa-eye fa-lg"></i></a>    
                                    <a href="/siswa-edit/{{ $data->id }}"><i class="fa-solid fa-pen-to-square fa-lg"></i></a>
                                @endif
                                
                                @if (Auth::user()->role_id == 1)
                                    <a href="/siswa-delete/{{ $data->id }}" data-bs-toggle="modal"
                                        data-bs-target="#siswa-delete-/siswa/{{ $data->id }}"><i
                                            class="fa-solid fa-trash-can"></i></a>
                                    <!-- Button trigger modal -->

                                    <!-- Modal -->
                                    <div class="modal fade" id="siswa-delete-/siswa/{{ $data->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah anda yakin untuk menghapus data siswa : {{ $data->name }}.?
                                                </div>
                                                <div class="modal-footer">

                                                    <form action="/siswa-destroy/{{ $data->id }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                    <a href="/siswa" class="btn btn-primary">Cancel</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="my-4">
            {{ $siswaList->withQueryString()->links() }}
        </div>
    </div>
@endsection
