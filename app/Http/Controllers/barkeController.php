<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barke;
use App\Models\Barsto;
use App\Models\Bare;
use DB;

class barkeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function barangkeluar(Request $request){
        $cari_barke = $request->cari_barke;
        $dtBarke = barke::with('barsto')
                          ->where('tgl_barke', 'LIKE', '%'.$cari_barke.'%')
                          ->paginate(15);
        $dtBarsto = Barsto::all();
        return view('barang-keluar', compact('dtBarke', 'dtBarsto'));
    }

    public function createbarke(){
        $dtBarsto = Barsto::all();
        return view('tambah-barke', compact('dtBarsto'));
    }

    public function storebarke(Request $request)
    {
        $this->validate($request, rules:[
            'tgl_barke' => 'required',
            'resi' => 'required',
            'seller' => 'required',
            'id_barsto' => 'required',
            'jmlh_barke' => 'required',
            'harga_keluar' => 'required',
        ]);
        
        $Barke = barsto::where('id', $request->id_barsto)->first();

        $request['omset'] = $request['harga_keluar'] * $request['jmlh_barke'];
        $request['base_prize'] = $request['harga_beli'] * $request['jmlh_barke'];
        $request['marketplace_fee'] = $request['omset'] * 0.04;
        $request['profit'] = $request['omset'] - $request['base_prize'] - $request['marketplace_fee'] - 1000;
        
        if($Barke->stok_barang < $request->jmlh_barke){
            return redirect('barang-keluar')->with('error', 'Stok Barang Tidak Memenuhi!');
        }
        else{
            barke::create ([
                'id' => $request->id,
                'tgl_barke' => $request->tgl_barke,
                'resi' => $request->resi,
                'seller' => $request->seller,
                'jmlh_barke' => $request->jmlh_barke,
                'harga_keluar' => $request->harga_keluar,
                'omset' => $request->omset,
                'base_prize' => $request->base_prize,
                'marketplace_fee' => $request->marketplace_fee,
                'packing' => $request->packing,
                'profit' => $request->profit,
                'status' => $request->status,
                'id_barsto' => $request->id_barsto,
            ]);
            
            $Barke->stok_barang -= $request->jmlh_barke;
            $Barke->save();
    
            return redirect('barang-keluar')->with('succes', 'Data Berhasil Disimpan!');
        }
    }
    
    
    public function destroybarke(barke $barke, $id)
    {
        $Barke = barke::find($id);
        
        $Barsto = barsto::find($Barke->id_barsto);

        $Barsto->stok_barang += $Barke->jmlh_barke; 
        $Barsto->save();

        $Barke->delete();
        return redirect('barang-keluar')->with('succes', "Data Berhasil Dihapus!");
    }

    public function gethargabeli(Request $request){
        $id = $request->input('id');
        $data = Barsto::where('id', $id)->first(); 
        return $data->harga_beli;
    }


}
