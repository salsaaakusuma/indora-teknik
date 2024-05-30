<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barsto extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'barsto';
    protected $fillable = ['kategori_barang','nama_barang', 'stok_barang', 'harga_jual', 'harga_beli'];
    public $timestamps = false;

    public function barmas(){
        return $this->hasMany(Barmas::class);
    }

    public function barke(){
        return $this->hasMany(Barke::class);
    }

}
