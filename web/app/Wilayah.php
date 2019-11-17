<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    //
    protected $table="tblwilayah";

    protected $fillable = ['origin', 'destination','ongkos'];
}
