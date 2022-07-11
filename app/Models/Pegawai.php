<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'id_pegawai',
        'nama',
        'tgllahir',
        'alamat',
    ];

    public function barang()
    {
        // satu pegawai memiliki banyak barang  
        return $this->hasMany(Barang::class);
    }
}
