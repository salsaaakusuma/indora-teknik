<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barmas;
use App\Models\Barsto;
use Illuminate\Support\Facades\Storage;
use DB;

class barmasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function barangmasuk(Request $request){
        $cari_barmas = $request->cari_barmas;
        $dtBarmas = barmas::with('barsto')
                            ->where('tgl_barmas', 'LIKE', '%'.$cari_barmas.'%')
                            ->paginate(15);
        $dtBarsto = Barsto::all();
        return view('barang-masuk', compact('dtBarmas', 'dtBarsto'));
    }


    public function createbarmas(){
        $dtBarsto = Barsto::all();
        return view('tambah-barmas', compact('dtBarsto'));
    }

    public function storebarmas(Request $request)
    {
        $this->validate($request, rules:[
            'tgl_barmas' => 'required',
            'id_barsto' => 'required',
            'resi_barmas' => 'required',
            'jmlh_barmas' => 'required',
        ]);

        barmas::create ([
            'id' => $request->id,
            'tgl_barmas' => $request->tgl_barmas,
            'resi_barmas' => $request->resi_barmas,
            'jmlh_barmas' => $request->jmlh_barmas,
            'id_barsto' => $request->id_barsto,
        ]);

        $Barmas = barsto::where('id', $request->id_barsto)->first();
        $Barmas->stok_barang += $request->jmlh_barmas;
        $Barmas->save();

        return redirect('barang-masuk')->with('succes', 'Data Berhasil Disimpan!');
    }

    
    public function destroybarmas(Request $request, $id)
    {
        $Barmas = barmas::find($id);
        
        $Barsto = barsto::find($Barmas->id_barsto);

        $Barsto->stok_barang -= $Barmas->jmlh_barmas; 
        $Barsto->save();

        $Barmas->delete();

        return redirect('barang-masuk')->with('succes', "Data Berhasil Dihapus!");
    }
}
