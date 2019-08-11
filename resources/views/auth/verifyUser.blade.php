<html>
  <head>
      <title>Konfirmasi Email</title>
  </head>

  <body style="font-family:-apple-system, '.SFNSText-Regular', 'Helvetica Neue', Roboto, 'Segoe UI', sans-serif; color: #666666; background:white; text-decoration: none;">
    <style>
      .btn{
        display: inline-block;
        font-weight: 400;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        user-select: none;
        border: 1px solid transparent;
        padding: .375rem .75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: .25rem;
        transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
      }

      .btn-primary {
      color: #fff;
      background-color: #F8BA10;
      border-color: #F8BA10;
      }
    </style>
    <div class="container" style="margin-top:50px;">
      <div class="card">
        <div class="card-body">
          <center>
            <img src="{{ $message->embed(public_path() . '/img/logo.png') }}" width="200px;"/><br /><br />
            <h2>Halo, {{$user['name']}}</h2>
            <br/>
            Alamat Email Kamu : {{$user['email']}}, Telah Berhasil Diregistrasi, <br /> Klik Link Dibawah Untuk Melakukan Konfirmasi
            <br/><br/>
            <a class="btn btn-primary" href="{{url('user/verify', $user->token)}}">Verifikasi Email</a><br />
          </div>
          </center>
      </div>
    </div>
  </body>

</html>
