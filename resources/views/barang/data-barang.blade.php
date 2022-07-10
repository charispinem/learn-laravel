@extends('layouts.app')
@section('title','Stock-Barang')

@section('content')

<div class="row">
    <div class="col-11">
        <div class="card">
            <div class="card-header">
            <h3>Data Barang</h3>
            </div>
            <div class="card-body">
                <div class="card-tools mb-3">
                    <a href="{{ route('create-barang') }}" class="btn btn-success">Tambah Barang</a>
                </div>
                <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">ID Pegawai</th>
                            <th scope="col">Kode Barang</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Jenis Barang</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Dibuat</th>
                            <th scope="col">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            {{-- insert database to table --}}
                            @foreach ($barangs as $key => $barang)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                
                                {{-- input relasi antar table pegawai -> table barang --}}
                                <td><a href="/pegawai/{{ $barang->pegawai_id }}/data">{{ $barang->pegawai->id_pegawai }}</a></td>

                                <td>{{ $barang->kode_barang }}</td>
                                <td>{{ $barang->nama_barang }}</td>
                                <td>{{ $barang->jenis_barang }}</td>
                                <td>{{ $barang->keterangan }}</td>
                                <td>{{ $barang->created_at }}</td>
                                <td>
                                    <a href="{{ route('tampil-barang',$barang->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="{{ route('delete',$barang->id) }}" class="btn btn-danger btn-sm">Delete</a>
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