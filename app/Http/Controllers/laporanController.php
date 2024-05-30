<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barke;
use App\Models\Barsto;
use Carbon\Carbon;
use DB;

class laporanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function laporan(Request $request){
        $cari_laporan = $request->cari_laporan;
        $dtLaporan = Barke::with('barsto')
                          ->where('tgl_barke', 'LIKE', '%'.$cari_laporan.'%')
                          ->paginate(20);
        $dtBarsto = Barsto::all();
        return view('laporan', compact('dtLaporan', 'dtBarsto'));
    }


    public function cetaklaporan(Request $request){
        $bln_cetak = $request->bln_cetak;
        $cetakLaporan = Barke::with('barsto')
                          ->where('tgl_barke', 'LIKE', '%'.$bln_cetak.'%')
                          ->get();

        $dateString = $request->bln_cetak;
        $carbonDate = Carbon::createFromFormat('Y-m', $dateString);
        $bulan = $carbonDate->format('M Y');

        $bulan_angka = intval($carbonDate->format('m'));
        $jmlh_barang = DB::table('barke')->whereMonth('tgl_barke', '=', $bulan_angka)->sum('jmlh_barke');

        $jmlh_omset = DB::table('barke')->whereMonth('tgl_barke', '=', $bulan_angka)->sum('omset');

        $jmlh_profit = DB::table('barke')->whereMonth('tgl_barke', '=', $bulan_angka)->sum('profit');

        return view('cetak-laporan', compact('cetakLaporan', 'bulan', 'jmlh_barang', 'jmlh_omset', 'jmlh_profit'));
    }

}