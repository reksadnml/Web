<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class legsarea extends Model
{
    protected $table='legsareas';
    protected $fillable = [
        'nama_paket','deskripsi','harga'
    ];

}
