<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barsto;
use DB;


class barstoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function barangstok(Request $request){
        $cari_barsto = $request->cari_barsto;
        $dtBarsto = barsto::where('nama_barang', 'LIKE', '%'.$cari_barsto.'%')
                            ->orWhere('kategori_barang', 'LIKE', '%'.$cari_barsto.'%')
                            ->paginate(15);
        return view('barang-stok', compact('dtBarsto'));
    }


    public function createbarsto(){
        return view('tambah-barsto');
    }

    public function storebarsto(Request $request)
    {
        $this->authorize('create',Barsto::class);

        $this->validate($request, rules:[
            'kategori_barang' => 'required',
            'nama_barang' => 'required',
            'stok_barang' => 'required',
            'harga_jual' => 'required',
            'harga_beli' => 'required',
        ]);

        barsto::create ([
            'id' => $request->id,
            'kategori_barang' => $request->kategori_barang,
            'nama_barang' => $request->nama_barang,
            'stok_barang' => $request->stok_barang,
            'harga_jual' => $request->harga_jual,
            'harga_beli' => $request->harga_beli,
        ]);

        return redirect('barang-stok')->with('succes', 'Data Berhasil Disimpan!');
    }


    public function editbarsto($id){
        return view('edit-barsto', [
            'data' => Barsto::findOrFail($id),
        ]);
        }

    public function updatebarsto(Request $request, $id)
    {
        $this->authorize('update',Barsto::class);

        $this->validate($request, rules:[
            'kategori_barang' => 'required',
            'nama_barang' => 'required',
            'stok_barang' => 'required',
            'harga_jual' => 'required',
            'harga_beli' => 'required',
        ]);

        $barsto = barsto::find($id);
        $barsto->kategori_barang = $request->input('kategori_barang');
        $barsto->nama_barang = $request->input('nama_barang');
        $barsto->stok_barang = $request->input('stok_barang');
        $barsto->harga_jual = $request->input('harga_jual');
        $barsto->harga_beli = $request->input('harga_beli');
        $barsto->update();
        
        return redirect('barang-stok')->with('succes', 'Data Berhasil Diupdate!');
    }


    public function destroybarsto(barsto $barsto, $id)
    {
        $this->authorize('delete',$barsto);

        $dtBarsto = barsto::find($id);
        $dtBarsto->delete();
        return redirect('barang-stok')->with('succes', "Data Berhasil Dihapus!");
    }
}
