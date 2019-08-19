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
        "wisata.nama", "like", "%" . request()->query("search") . "%"
      );
    }

    $pagination = 8;
    $wisata = $wisata->paginate($pagination);
    if( request()->has('page') && request()->get('page') > 1){
      $counter += (request()->get('page')- 1) * $pagination;
    }

    return view('admin.wisata', compact('wisata','counter'));
  }

  public function create()
  {
      return view('admin.wisata_add');
  }

  public function store(WisataValidation $request)
  {
    $data = new Wisatas($request->except("_token"));
    $imageName = time().'.'.request()->background->getClientOriginalExtension();
    request()->background->move(public_path('images'), $imageName);
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
        Session::flash('message','Berhasil menghapus Data');
    }
    return redirect()->back();
  }

  public function detail($id)
  {
    $data = Wisatas::find($id);
    return view('wisata_detail', compact('data'));
  }

  public function edit($id)
  {
    $data = Wisatas::find($id);
    return view('admin.wisata_edit', compact('data'));
  }

  public function update($id, Request $request)
  {
    $data = Wisatas::find($id);
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
