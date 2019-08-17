<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use ApiBuilder;
use Session;
use Hash;
use Bcrypt;
use Carbon\Carbon;
use App\User;
use App\Mail\VerifyMail;
use Mail;
use Auth;
use Validator;
use App\Http\Requests\RegisterValidation;

class RegisterController extends Controller
{
   public function index(){
       if(Auth::user()){
         if(Auth::user()->role == "admin"){
           return redirect('/admin/wisata');
         }else{
           return redirect('/');
         }
       }
       else{
         return view('auth.register');
       }
   }

    public function doRegister(RegisterValidation $request)
    {

      $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'role' => 'user',
        'password' => Bcrypt($request->password),
        'token' => str_random(40)
      ]);
      Mail::to($request->email)->send(new VerifyMail($user));
      Session::flash('message', 'Sukses Mendaftar Akun Silahkan, Cek Email Untuk Konfirmasi');
      return redirect('/login');
    }


    public function verifyUser($token)
    {
      $verifyUser = User::where('token', $token)->first();
      if(isset($verifyUser) ){
          if($verifyUser->email_verified_at == null) {
              $time = Carbon::now();
              $verifyUser->email_verified_at = $time;
              $verifyUser->save();
              Session::flash('message', 'Sukses Melakukan Konfirmasi, Silahkan Login');
          }else{
            Session::flash('message_gagal', 'Anda Sudah Mengkonfirmasi Akun');
          }
      }else{
          Session::flash('message_gagal', 'Akun Tersebut Tidak Ditemukan');
          return redirect('/login');
      }

      return redirect('/login');
    }


}
