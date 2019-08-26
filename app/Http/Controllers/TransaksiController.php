<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = Transaksi::where('id_user', \Auth::user()->id);
      return view('transaksi', compact('$data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $now = Carbon::today();

      if($request->tanggal < $now){
        $request->session()->flash('message_gagal','Tanggal Jadwal Sudah Lewat');
        return redirect()->back();
      }
      else{
        $data = new Transaksi($request->except("_token"));
        $data->status = "Belum Mengupload Bukti Bayar";
        $data->save();
        $request->session()->flash('message','Sukses Menambah Jadwal, Silahkan Mengupload Bukti Bayar');
        return redirect('transaksi');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Transaksi::find($id);
        return view('transaksi_detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $now = Carbon::today();
      $data = Transaksi::find($id);
      if($request->tanggal < $now){
        $request->session()->flash('message_gagal','Tanggal Jadwal Sudah Lewat');
        return redirect()->back();
      }
      else{
        if($request->bukti){
          $imageName = time().'.'.request()->foto->getClientOriginalExtension();
          request()->background->move(public_path('images/bukti'), $imageName);
          $data->bukti = $imageName;
          $data->tanggal = $request->tanggal;
          $data->status = "Menunggu Konfirmasi"
          $data->save();
          $request->session()->flash('message','Berhasil Menambahkan Bukti Bayar');
          return redirect()->back();
        }
        else{
          $data->tanggal = $request->tanggal;
          $data->save();

          $request->session()->flash('message','Berhasil Mengubah Tanggal');
          return redirect()->back();
        }
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $data = Transaksi::find($id);
      $data->delete();
      if($data) {
          Session::flash('message','Berhasil menghapus Transaksi');
      }
      return redirect()->back();
    }
}
