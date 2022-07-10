@extends('layouts.app')
@section('title','Edit-Barang')

@section('content')

<div class="row">
    <div class="col-10">
        <div class="card">
            <div class="card-header">
            <h4>Tambah Data Barang</h4>
            </div>
            <div class="card-body">
                
                <form action="{{ route('update-barang',$barang->id) }}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" id="kode_barang" name="kode_barang" class="form-control" placeholder="Kode Barang" value="{{ $barang->kode_barang }}">
                    </div>
                    <div class="form-group">
                        <input type="text" id="nama_barang" name="nama_barang" class="form-control" placeholder="Nama Barang" value="{{ $barang->nama_barang }}">
                    </div>
                    <div class="form-group">
                        <input type="text" id="jenis_barang" name="jenis_barang" class="form-control" placeholder="Jenis Barang" value="{{ $barang->jenis_barang }}">
                    </div>
                    <div class="form-group">
                        <input type="text" id="keterangan" name="keterangan" class="form-control" placeholder="Keterangan" value="{{ $barang->keterangan }}">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection