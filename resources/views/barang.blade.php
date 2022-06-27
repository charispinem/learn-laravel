@extends('layouts.app')
@section('title','Barang')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
            Stock Barang
            </div>
            <div class="card-body">
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
                                <td>{{ $barang->id_pegawai }}</td>
                                <td>{{ $barang->kode_barang }}</td>
                                <td>{{ $barang->nama_barang }}</td>
                                <td>{{ $barang->jenis_barang }}</td>
                                <td>{{ $barang->keterangan }}</td>
                                <td>{{ $barang->created_at }}</td>
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