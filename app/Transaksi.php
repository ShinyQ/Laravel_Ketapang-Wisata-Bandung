<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    public $timestamps = true;
    protected $fillable = ['nama','deskripsi','alamat','waktu','tanggal_dibangun','background'.'telepon1'];
}
