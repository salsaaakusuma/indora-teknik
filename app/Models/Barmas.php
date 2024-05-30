<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barmas extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'barmas';
    protected $fillable = ['tgl_barmas', 'resi_barmas', 'jmlh_barmas', 'foto_barmas', 'id_barsto'];
    protected $dates = ['tgl_barmas'];

    public function barsto(){
        return $this->belongsTo(Barsto::class, 'id_barsto');
    }

}
