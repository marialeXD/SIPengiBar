<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kurir extends Model
{
    //
    protected $table="tblkurir";

    protected $fillable = ['nama', 'alamat','telepon','email'];
}
