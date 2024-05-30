<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barsto;
use DB;

class indoraController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function beranda(){
        $dtStok = Barsto::where('stok_barang', '<=', 5)->get();
        return view('dashboard', compact('dtStok'));
    }

    public function informasi(){
        return view('informasi-toko');
    }
}
