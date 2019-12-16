<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class facialarea extends Model
{
    protected $table='facialareas';
    protected $fillable = [
        'nama_paket','deskripsi','harga'
    ];

}
