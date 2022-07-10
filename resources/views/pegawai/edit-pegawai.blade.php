@extends('layouts.app')
@section('title','Data-Pegawai')

@section('content')

<div class="row">
    <div class="col-10">
        <div class="card">
            <div class="card-header">
            <h3>Edit Data Pegawai</h3>
            </div>
            <div class="card-body">
                
                <form action="{{ route('updatedata',$pegawai->id) }}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" id="id_pegawai" name="id_pegawai" class="form-control" placeholder="ID Pegawai" value="{{ $pegawai->id_pegawai }}">
                    </div>
                    <div class="form-group">
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Pegawai" value="{{ $pegawai->nama }}">
                    </div>
                    <div class="form-group">
                        <input type="date" id="tgllahir" name="tgllahir" class="form-control" placeholder="Tanggal Lahir" value="{{ $pegawai->tgllahir }}">
                    </div>
                    <div class="form-group">
                        <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat Pegawai" >{{ $pegawai->alamat }}</textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Update Data</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection