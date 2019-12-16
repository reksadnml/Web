<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paketcantik extends Model
{
    protected $table='paketcantiks';
    protected $fillable = [
        'nama_paket','deskripsi','harga'
    ];

}
