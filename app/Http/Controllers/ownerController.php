<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use DB;

class ownerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function profil(){
        $dtOwner = owner::all();
        return view('profil-owner', compact('dtOwner'));
    }


    public function editowner(Owner $id_owner)
    {
        $dtOwner = owner::all();
        return view('edit-owner', compact('dtOwner'));
    }

    
    public function updateowner(Request $request, $id_owner)
    {
        $this->authorize('update',Owner::class);

        $this->validate($request, rules:[
            'nama_owner' => 'required',
            'email_owner' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);

        $owner = owner::find($id_owner);
        $owner->nama_owner = $request->input('nama_owner');
        $owner->email_owner = $request->input('email_owner');
        $owner->no_hp = $request->input('no_hp');
        $owner->alamat = $request->input('alamat');
        $owner->update();
        
        return redirect('profil-owner')->with('succes', 'Data Berhasil Diupdate!');
    }
}
