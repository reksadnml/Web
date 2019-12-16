<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bodyspa extends Model
{
    protected $table='bodyspas';
    protected $fillable = [
        'nama_paket','deskripsi','harga'
    ];

}
