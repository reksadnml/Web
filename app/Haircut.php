<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class haircut extends Model
{
    protected $table='haircuts';
    protected $fillable = [
        'nama_paket','deskripsi','harga'
    ];

}
