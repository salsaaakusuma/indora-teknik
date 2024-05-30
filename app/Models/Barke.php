<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barke extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'barke';
    protected $fillable = ['tgl_barke', 'resi', 'seller', 'jmlh_barke', 'harga_keluar', 'omset', 'base_prize', 'marketplace_fee', 'profit', 'id_barsto'];
    protected $dates = ['tgl_barke'];

    public function barsto(){
        return $this->belongsTo(Barsto::class, 'id_barsto');
    }

    public function bare(){
        return $this->hasOne(Bare::class);
    }

}
