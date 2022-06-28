@extends('layouts.app')
@section('title','Data-Pegawai')

@section('content')

<div class="row">
    <div class="col-10">
        <div class="card">
            <div class="card-header">
            Data Pegawai
            </div>
            <div class="card-body">
                <div class="card-tools mb-3">
                    <a href="{{ route('create-pegawai') }}" class="btn btn-success">Tambah Data</a>
                </div>
                <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">ID Pegawai</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tanggl Lahir</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Dibuat</th>
                            <th scope="col">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            {{-- insert database to table --}}
                            @foreach ($pegawais as $key => $pegawai)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td>{{ $pegawai->id_pegawai }}</td>
                                <td>{{ $pegawai->nama }}</td>
                                <td>{{ $pegawai->tgllahir }}</td>
                                <td>{{ $pegawai->alamat }}</td>
                                <td>{{ $pegawai->created_at }}</td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>

@endsection