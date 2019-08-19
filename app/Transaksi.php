<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    public $timestamps = true;
    protected $fillable = ['id_user', 'id_paket', 'bukti', 'status'];
}
