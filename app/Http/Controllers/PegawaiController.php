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

    public function destroy($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->delete();
        return redirect()->route('data-pegawai');
        // dd($id);
        // $pegawai = Pegawai::find($id);
        // $pegawai->delete();
        // return redirect()->route('data-pegawai');
    }

    public function tampildata($id)
    {
        return view('pegawai.edit-pegawai', [
            'pegawai' => Pegawai::findOrFail($id)
        ]);
    }

    public function updatedata(Request $request, $id)
    {
        $pegawai = Pegawai::findOrFail($id)->update($request->all());
        // $pegawai->update($pegawai->all());
        return redirect()->route('data-pegawai');
    }
}
