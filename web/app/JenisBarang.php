<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisBarang extends Model
{
    //
    protected $table = "tblbarang";
    protected $fillable = ['barang'];
}
