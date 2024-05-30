<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_owner';
    protected $table = 'owner';
    protected $fillable = ['nama_owner', 'email_owner', 'no_hp', 'alamat'];
    public $timestamps = false;
}
