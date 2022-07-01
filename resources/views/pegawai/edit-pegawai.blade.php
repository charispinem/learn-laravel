@extends('layout.app')
@section('title','Data-Pegawai')

@section('content')

<div class="row">
    <div class="col-10">
        <div class="card">
            <div class="card-header">
                <h4>Edit Data Pegawai</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('save-pegawai') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" id="id_pegawai" name="id_pegawai" class="form-control" placeholder="ID Pegawai">
                    </div>
                    <div class="form-group">
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Pegawai">
                    </div>
                    <div class="form-group">
                        <input type="date" id="tgllahir" name="tgllahir" class="form-control" placeholder="Tanggal Lahir">
                    </div>
                    <div class="form-group">
                        <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat Pegawai"></textarea>
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