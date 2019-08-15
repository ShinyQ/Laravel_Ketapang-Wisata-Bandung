<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Session;
use Hash;
use Bcrypt;
use App\User;
use App\Http\Requests\LoginValidation;

class LoginController extends Controller
{

  public function index(){
       if(Auth::user()){
         if(Auth::user()->role == "admin"){
           return redirect('/admin');
         }else{
           return redirect('/');
         }
       }
       else{
         return view('auth.login');
       }
  }

  public function doLogin(LoginValidation $request){
      if(!Auth::attempt([
        'email' => $request->email,
        'password' => $request->password
      ])){
          Session::flash('message_gagal', 'Username Atau password Salah');
          return redirect()->back();
      }elseif((Auth::user()->email_verified_at == null) && Auth::user()->role == "user"){
          Session::flash('message_gagal', 'Anda Harus Verifikasi Email Dahulu');
          Auth::logout();
          return redirect()->back();
      }
      elseif(Auth::user()->role == "admin"){
          Session::flash('message', 'Halo Admin Selamat Datang !');
          return redirect('/admin');
      }
      else{
        Session::flash('message', 'Halo Penguna Selamat Datang !');
          return redirect('/');
      }
   }

  /**
  * logout user
  */


  public function doLogout()
  {
    Auth::logout();
    Session::flash('message', 'Sukses Keluar Akun');
    return redirect('/login');
  }


}
