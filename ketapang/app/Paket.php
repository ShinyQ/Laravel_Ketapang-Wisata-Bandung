<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    public $timestamps = true;
    protected $fillable = ['nama','harga'];
}
