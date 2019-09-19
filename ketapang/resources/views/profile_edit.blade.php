@extends('template.navigation')

@section('konten')
<style>
  .profile-user{
    margin-top: 90px;
    background-color: white;
    padding: 30px 0px 30px 30px;
    font-family: 'Roboto', sans-serif;
    border-radius: 2%;
  }
  .profile-user h4{
    font-size: 23px;
    font-style: normal;
  }
  .profile-user h5{
    font-size: 20px;
    font-style: italic;
    font-weight: normal;
  }
  .profile-user p{
    margin-top: 5px;
    font-size: 17px;
    font-style: normal;
    font-weight: normal;
  }
  .foto-user img{
    border-radius: 50%;
    max-width: 100%;
    width: 160px;
  }
  .dots{
    height: 15px;
    width: 15px;
    background-color: #F8BA10;
    border-radius: 50%;
    display: inline-block;
  }
  .informasi-user{
    padding-top: 20px;
    margin-left: 20px;
  }
  .input-container {
    position: relative;
  }
  .saver, .changer{
    padding-right: 40px;
  }

  .input-container-edit{
    clear: both;
    max-width: 300px;
  }
  input {
    border: 0;
    border-bottom: 2px solid #9e9e9e;
    outline: none;
    transition: 0.2s ease-in-out;
    box-sizing: border-box;
    background: none;
  }
  input, label {
    width: 100%;
    height: 3rem;
    font-size: 1rem;
  }

  /* Interation */
  input:valid,
  input:focus {
  /* border-bottom: 2px solid #f8ba10;   */
  }

  input:valid + label,
  input:focus + label {
    color: #f8ba10;
  /* font-size: .8rem; */
    top: 0px;
    pointer-events: none;
  }

  input[type=number]::-webkit-outer-spin-button,
  input[type=number]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }

  input[type=number] {
    -moz-appearance:textfield;
  }
</style>
<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 offset-md-2">
        <form action="/user/profil/update/{{ $data->id }}" method="post">
          @csrf
          <div class="profile-user shadow">
            <h3 style="margin-bottom: 20px"><font color="#f8ba10"><strong><a style="color: #f8ba10;" href="/user/profil/{{ $data->id }}">< &nbsp;</a> Edit Profil Pengguna</strong></font></h3>
            @if (Session::has('message'))
              <h6 style="margin-top: 5px"><font color="green"><strong><center>{{ Session::get('message') }}</center></strong></font></h6><br>
            @endif
  					<div class="row">
  						<div class="col-lg-3 col-md-3 col-sm-12">
  							<div class="foto-user">
  								<img class="img-fluid" src="{{asset('assets/images/icons')}}/user.png" alt="">
  							</div>
  						</div>
  						<div class="col-lg-9 col-md-9 col-sm-12">
  							<div class="nama-user">
  								<div class="row">
  									<div class="col-5">
  										<h3><strong><input name="name" placeholder="Nama" class="input-edit" type="text" required value="{{ $data->name }}"/></strong></h3>
  									</div>
  									<div class="informasi-user">
  										<div class="row">
  											<div class="col-lg-6 col-sm-12 p-2">
  												<div class="email">
  													<img class="img-fluid" src="{{asset('assets/images/icons')}}/envelope.png" alt="" width="20px">&nbsp; <font color="#f8ba10"> Email : </font>
                            <div class="input-container-edit">
  														<input disabled name="email" class="input-edit" placeholder="Email" type="email" required value="{{ $data->email }}"/>
  													</div>
  												</div>
  											</div>
  											<div class="col-lg-6 col-sm-12 p-2">
  												<div class="telp">
  													<img class="img-fluid" src="{{asset('assets/images/icons')}}/phone-call.png" alt="" width="20px">&nbsp;  <font color="#f8ba10">Telepon : </font>
                            <div class="input-container-edit">
  														<input name="telepon" class="input-edit" placeholder="Telepon" type="number" required value="{{ $data->telepon }}"/>
  													</div>
  												</div>
  											</div>
  											<div class="col-lg-6 col-sm-12 p-2">
  												<div class="password">
  													<img class="img-fluid" src="{{asset('assets/images/icons')}}/key.png" alt="" width="20px">&nbsp; <font color="#f8ba10"> Password : </font>
                            <div class="input-container-edit">
  														<input name="password" class="input-edit" placeholder="Password" type="password" required value="{{ $data->password }}"/>
  													</div>
  												</div>
  											</div>
  											<div class="col-lg-6 col-sm-12 p-2">
  												<div class="verify">
  													<img class="img-fluid" src="{{asset('assets/images/icons')}}/check.png" alt="" width="20px">&nbsp; <font color="#f8ba10"> Status Akun : </font>
  													<p class="text-success" style="display: block">Akun Telah Terverfikasi</p>
  													<p class="text-danger" style="display: none">Akun Belum Terverfikasi</p>
  												</div>
  											</div>
  										</div>
  									</div>
  								</div>
  							</div>
  						</div>
  						<div class="col-lg-12 col-md-12 col-sm-12">
  							<div class="changer" style="margin-top:20px">
  								<div class="row">
  									<div class="col-12">
  											<center>
  												<button type="submit" class="btn btn-primary">Simpan Data</button>
  											</center>
  									</div>
  								</div>
  							</div>
  						</div>
  					</div>
  				</div>
        </form>
			</div>
		</div>
	</div>
  <!-- Footer  -->
  <section style="margin-top:92px!important" class="footer">
      <div class="container">
        <center>
          <img src="{{url('assets/images/logo/KetapangLogo-White.png')}}" width="150px" alt="Logo">
           <font color="#f5f5f5" class="font-segoe text-center nopadding">&#8212; &nbsp; Copyright &copy; 2019 - Ketapang - Telkom University</p>
        </center>
      </div>
  </section>
  <!-- End of Footer  -->
@endsection
