<?php

namespace App;

use App\Wisata;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public $timestamps = true;
    protected $fillable = ['foto', 'id_wisata'];

    public function wisatas()
    {
      return $this->hasOne(Wisata::class, 'id', 'id_wisata');
    }
}
