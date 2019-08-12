<?php

namespace App\Http\Controllers;
use App\Wisata;
use Session;
use Illuminate\Http\Request;

class WisataController extends Controller
{
  public function index()
  {
    $counter = 1;
    $wisata = Wisata::query()->latest();
    if (request()->has("search") && strlen(request()->query("search")) >= 1) {
      $wisata->where(
        "wisata.nama", "like", "%" . request()->query("search") . "%"
      );
    }

    $pagination = 4;
    $wisata = $wisata->paginate($pagination);
    if( request()->has('page') && request()->get('page') > 1){
      $counter += (request()->get('page')- 1) * $pagination;
    }

    return view('admin.wisata', compact('wisata','counter'));
  }

  public function store(Request $request)
  {
    $data = new Wisata($request->except("_token"));
    $imageName = time().'.'.request()->background->getClientOriginalExtension();
    request()->background->move(public_path('images'), $imageName);
    $data->background = $imageName;
    $data->save();

    $request->session()->flash('message','Berhasil Menambahkan Data');
    return redirect()->back();
  }

  public function destroy($id)
  {
    $data = Wisata::find($id);
    $data->delete();
    if($data) {
        Session::flash('message','Berhasil menghapus Data');
    }
    return redirect()->back();
  }

  public function edit($id)
  {
    $data = Wisata::find($id);
    return view('admin.wisata_edit', compact('data'));
  }

  public function update($id)
  {
    $data = Wisata::find($id, Request $request);
        if($request->background){
          $imageName = time().'.'.request()->foto->getClientOriginalExtension();
          request()->background->move(public_path('images'), $imageName);
          $data->background = $imageName;
          $data->nama = $request->nama;
          $data->deskripsi = $request->deskripsi;
          $data->alamat = $request->alamat;
          $data->waktu = $request->waktu;
          $data->tanggal_dibangun = $request->tanggal_dibangun;
          $data->telepon = $request->telepon;
          $data->save();

          $request->session()->flash('message','Berhasil Mengedit Data');
          return redirect()->back();
        }
        else{
          $data->nama = $request->nama;
          $data->deskripsi = $request->deskripsi;
          $data->alamat = $request->alamat;
          $data->waktu = $request->waktu;
          $data->tanggal_dibangun = $request->tanggal_dibangun;
          $data->telepon = $request->telepon;
          $data->save();

          $request->session()->flash('message','Berhasil Mengedit Data');
          return redirect()->back();
        }
  }
}
