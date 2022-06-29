<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function data_pegawai()
    {
        return view('pegawai.data-pegawai', [
            // memanggil Data Database
            'pegawais' => Pegawai::all()
        ]);
    }

    public function create_pegawai()
    {
        return view('pegawai.create-pegawai');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        Pegawai::create([
            'id_pegawai' => $request->id_pegawai,
            'nama' => $request->nama,
            'tgllahir' => $request->tgllahir,
            'alamat' => $request->alamat,

        ]);
        return redirect('data-pegawai');
    }
}
