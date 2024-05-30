<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bare;
use App\Models\Barke;
use App\Models\Barsto;
use DB;

class bareController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function barangretur(Request $request){
        $cari_bare = $request->cari_bare;
        $dtBare = bare::with('barke')
                        ->where('tgl_bare', 'LIKE', '%'.$cari_bare.'%')
                        ->paginate(15);
        $dtBarke = Barke::all();
        return view('barang-retur', compact('dtBare', 'dtBarke'));
    }


    public function createbare(){
        $dtBarke = Barke::all();
        return view('tambah-bare', compact('dtBarke'));
    }

    public function storebare(Request $request)
    {
        $this->validate($request, rules:[
            'tgl_bare' => 'required',
            'id_barke' => 'required',
            // 'foto_bare' => 'required|mimes:jpeg, jpg, png',
        ]);

        // $foto_bare=$request->foto_bare->getClientOriginalName();
        // $namaFile_bare = 'barang-retur-'.$foto_bare;
        // $request->file('foto_bare')->storeAs('public/foto-bare',$namaFile_bare);

        bare::create ([
            'id' => $request->id,
            'tgl_bare' => $request->tgl_bare,
            // 'foto_bare' => $namaFile_bare,
            'id_barke' => $request->id_barke,
        ]);

        $Bare = barke::where('id', $request->id_barke)->first();
        $Bare->status = '1';
        $Bare->save();

        $Barsto = barsto::find($Bare->id_barsto);
        $Barsto->stok_barang += $Bare->jmlh_barke; 
        $Barsto->save();

        return redirect('barang-retur')->with('succes', 'Data Berhasil Disimpan!');
    }
    
    public function destroybare(barke $Bare, $id)
    {
        $Bare = bare::find($id);

        $Barke = barke::find($Bare->id_barke);
        $Barke->status = '0';
        $Barke->save();

        $Barsto = barsto::find($Barke->id_barsto);
        $Barsto->stok_barang -= $Barke->jmlh_barke; 
        $Barsto->save();

        $Bare->delete();
        return redirect('barang-retur')->with('succes', "Data Berhasil Dihapus!");
    }

    public function getretur(Request $request){
        $id = $request->input('id');
        $data = DB::table('barke')->join('barsto', 'barke.id_barsto', '=', 'barsto.id')->select('barsto.nama_barang', 'barke.jmlh_barke')
                    ->where('barke.id', $id)
                    ->first();
        return [$data->nama_barang, $data->jmlh_barke];
    }
}
