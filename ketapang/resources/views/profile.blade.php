@extends('template.navigation2')

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
				<div class="profile-user shadow">
          <h3><font color="#f8ba10"><strong><font color="#f8ba10"><a style="color: #f8ba10;" href="/">< &nbsp;</a></font>Profil Pengguna</strong></font></h3><br>
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-12">
							<div class="foto-user">
								<img class="img-fluid" src="{{asset('assets/images/icons')}}/user.png" alt="">
							</div>
						</div>
						<div class="col-lg-9 col-md-9 col-sm-12">
							<div class="nama-user">
								<div class="row">
									<div class="col-12">
										<h3><strong>{{ $data->name }}</strong></h3>
									</div>
									<div class="informasi-user">
										<div class="row">
											<div class="col-lg-6 col-sm-12 p-2">
												<div class="email">
													<img class="img-fluid" src="{{asset('assets/images/icons')}}/envelope.png" alt="" width="20px">&nbsp; <font color="#f8ba10"> Email : </font>
													<p>{{ $data->email }}</p>
												</div>
											</div>
											<div class="col-lg-6 col-sm-12 p-2">
												<div class="telp">
													<img class="img-fluid" src="{{asset('assets/images/icons')}}/phone-call.png" alt="" width="20px">&nbsp;  <font color="#f8ba10">Telepon : </font>
                          @if($data->telepon == "")
                          <p>Anda Belum Memasukkan Telepon</p>
                          @else
                          <p>{{ $data->telepon }}</p>
                          @endif
												</div>
											</div>
											<div class="col-lg-6 col-sm-12 p-2">
												<div class="password">
													<img class="img-fluid" src="{{asset('assets/images/icons')}}/key.png" alt="" width="20px">&nbsp; <font color="#f8ba10"> Password : </font>
                          @if($data->password == "")
                          <p>Anda Belum Membuat Password</p>
                          @else
                          <p>{{ $data->password }}</p>
                          @endif
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
							<div class="changer">
								<div class="row">
									<div class="col-12">
										<a href="/user/profil/edit/{{ $data->id }}">
											<center>
												<button type="button" class="btn btn-primary">Edit Profil</button>
											</center>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
  <!-- Footer  -->
  <section style="margin-top:98px!important" class="footer">
      <div class="container">
        <center>
          <img src="{{url('assets/images/logo/KetapangLogo-White.png')}}" width="150px" alt="Logo">
           <font color="#f5f5f5" class="font-segoe text-center nopadding">&#8212; &nbsp; Copyright &copy; 2019 - Ketapang - Telkom University</p>
        </center>
      </div>
  </section>
  <!-- End of Footer  -->
@endsection
