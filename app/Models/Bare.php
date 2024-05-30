<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bare extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'bare';
    protected $fillable = ['tgl_bare', 'foto_bare', 'id_barke'];
    protected $dates = ['tgl_bare'];

    public function barke(){
        return $this->belongsTo(Barke::class, 'id_barke');
    }
}
