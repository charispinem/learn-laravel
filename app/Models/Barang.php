<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'kode_barang',
        'nama_barang',
        'jenis_barang',
        'keterangan',
    ];

    public function pegawai()
    {
        // satu barang dimiliki satu pegawai
        return $this->belongsTo(Pegawai::class);
    }
}
