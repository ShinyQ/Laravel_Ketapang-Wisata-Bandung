<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;

class TransaksiController extends Controller
{

    public function __construct()
    {
      $this->middleware(function ($request, $next){
        if(\Auth::user()){
          return $next($request);
        }
        else{
          \Session::flash('message_gagal', 'Anda Harus Login Dahulu');
          return redirect('/login');
          return $next($request);
        }
      });
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $transaksi = Transaksi::where('id_user', \Auth::user()->id)->orderBy('updated_at', 'desc')->get();
      return view('transaksi', compact('transaksi'));
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
        $data = new Transaksi($request->except("_token"));
        $data->status = "Upload Bukti Bayar";
        $data->id_user = \Auth::user()->id;
        $data->save();
        $request->session()->flash('message','Sukses Menambah Jadwal, Silahkan Mengupload Bukti Bayar');
        return redirect('transaksi');

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
        if($data){
          return view('transaksi_detail', compact('data'));
        }else{
          return abort('404');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
      $data = Transaksi::find($id);

      $imageName = time().'.'.request()->bukti->getClientOriginalExtension();
      request()->bukti->move(public_path('assets/images/bukti'), $imageName);
      $data->bukti = $imageName;
      $data->status = "Menunggu Konfirmasi";
      $data->save();

      $request->session()->flash('message','Berhasil Menambahkan Bukti Bayar');
      return redirect()->back();
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
