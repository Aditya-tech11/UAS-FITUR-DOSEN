<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';
    protected $fillable = ['kode_dosen','nama_dosen','nidn','email','handphone','alamat'];
}

