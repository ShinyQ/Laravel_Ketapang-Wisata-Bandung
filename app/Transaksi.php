<?php

namespace App;

use App\Paket;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    public $timestamps = true;
    protected $fillable = ['id_user', 'id_paket', 'bukti', 'status'];

    public function pakets()
    {
      return $this->hasOne(Paket::class, 'id', 'id_paket');
    }

    public function users()
    {
      return $this->hasOne(User::class, 'id', 'id_user');
    }
}
