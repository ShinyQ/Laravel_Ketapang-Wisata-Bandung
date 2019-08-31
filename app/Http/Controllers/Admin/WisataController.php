<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Wisatas;
use Session;
use Illuminate\Http\Request;
use App\Http\Requests\WisataValidation;
use Illuminate\Support\Facades\Auth;

class WisataController extends Controller
{

  public function __construct()
  {
    $this->middleware(function ($request, $next){
      if(!Auth::user()){
        \Session::flash('message_gagal', 'Anda Harus Login Dahulu');
        return redirect('/login');
        return $next($request);
      }
      else if(Auth::user()->role == "admin"){
        return $next($request);
      }
      else{
        return redirect()->back();
        return $next($request);
      }
    });
  }

  public function index()
  {
    $counter = 1;
    $wisata = Wisatas::query()->latest();
    if (request()->has("search") && strlen(request()->query("search")) >= 1) {
      $wisata->where(
        "wisatas.nama", "like", "%" . request()->query("search") . "%"
      );
    }

    $pagination = 8;
    $wisata = $wisata->paginate($pagination);
    if( request()->has('page') && request()->get('page') > 1){
      $counter += (request()->get('page')- 1) * $pagination;
    }
    $active = ["active","",""];
    return view('admin.wisata', compact('wisata','counter', 'active'));
  }

  public function create()
  {
      $active = ["active","",""];
      return view('admin.wisata_add',compact('active'));
  }

  public function store(WisataValidation $request)
  {
    $data = new Wisatas($request->except("_token"));
    $imageName = time().'.'.request()->background->getClientOriginalExtension();
    request()->background->move(public_path('assets/images/wisata'), $imageName);
    $data->background = $imageName;
    $data->save();

    $request->session()->flash('message','Berhasil Menambahkan Data');
    return redirect()->back();
  }

  public function destroy($id)
  {
    $data = Wisatas::find($id);
    $data->delete();
    if($data) {
        Session::flash('message','Berhasil menghapus Data Wisata');
    }
    return redirect()->back();
  }

  public function detail($id)
  {
    $active = ["active","",""];
    $data = Wisatas::find($id);
    if($data){
      return view('wisata_detail', compact('data','active'));
    }else{
      return abort('404');
    }
  }

  public function edit($id)
  {
    $data = Wisatas::find($id);
    $active = ["active","",""];
    if($data){
      return view('admin.wisata_edit', compact('data','active'));
    }else{
      return abort('404');
    }
  }

  public function update($id, Request $request)
  {
    $data = Wisatas::find($id);
    if($data){
      if($request->background){
        $imageName = time().'.'.request()->background->getClientOriginalExtension();
        request()->background->move(public_path('assets/images/wisata'), $imageName);
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
    }else{
      return abort('404');
    }
  }
}
