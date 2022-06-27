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
}
