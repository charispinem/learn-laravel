<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Barang;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function barang()
    {
        return view('barang', [
            'barangs' => Barang::all(),
        ]);
    }

    public function contact()
    {
        return view('contact');
    }
}
