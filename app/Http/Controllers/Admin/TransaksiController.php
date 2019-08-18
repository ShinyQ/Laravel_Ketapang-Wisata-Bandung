<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Transaksi;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
  public function __construct()
  {
    if(Auth::user()){
        if(Auth::user()->role == "user"){
          return redirect()->back();
        }
      }
    else{
      return view('auth.login');
    }
  }

  public function terima(){
    $data = Wisata::find($id);
    $data->status = "Jadwal Wisata Diterima"
    $request->session()->flash('message','Berhasil Menerima Jadwal Wisata');
    return redirect()->back();
  }

  public function tolak(){
    $data = Wisata::find($id);
    $data->status = "Jadwal Wisata Ditolak"
    $request->session()->flash('message','Berhasil Menolak Data');
    return redirect()->back();
  }
}
