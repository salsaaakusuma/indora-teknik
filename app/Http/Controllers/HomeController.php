<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barsto;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $dtStok = Barsto::where('stok_barang', '<=', 5)->get();
        return view('dashboard', compact('dtStok'));
    }
}
