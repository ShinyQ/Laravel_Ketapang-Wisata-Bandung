@extends('template.navigation2')

@section('konten')
<section class="transaksi-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 style="margin-bottom: 10px;">{{ $data->pakets->nama }}</h2>
                    <h6>  {{ date('D, d F Y', strtotime($data->tanggal)) }}</h6>
                    <p>Isinya paket miskin</p>
                </div>
                <div class="col-lg-6">
                    <h6>Status:
                      @if($data->status == "Jadwal Wisata Diterima")
                      <span style="color:green">{{ $data->status }} [Lunas]</span>
                      @elseif($data->status == "Menunggu Konfirmasi")
                      <span style="color:orange">{{ $data->status }}</span>
                      @else
                      <span style="color:red">{{ $data->status }}</span>
                      @endif
                    </h6>
                    <div class="payment-method">

                        @if($data->status == "Jadwal Wisata Diterima")
                          <h5> <center>Bukti Bayar :</center> </h5>
                          <img style="display:block; margin:auto;" src="{{asset('assets/images/bukti')}}/{{ $data->bukti }}" width="50%"></p>
                        @elseif($data->status == "Menunggu Konfirmasi")
                          <span>Please choose your preferred payment method</span>
                          <hr>
                          <img src="https://upload.wikimedia.org/wikipedia/id/f/fa/Bank_Mandiri_logo.svg"
                              alt="mandiri-logo" height="30">
                          <hr>
                          <div class="container">
                              <p style="text-align: center">Mandiri 130119427660 <br>
                                  a/n Ketapang Tours<br>
                                  Telkom University Bandung 40257</p>
                          </div>
                          <img style="display:block; margin:auto;" src="{{asset('assets/images/bukti')}}/{{ $data->bukti }}" width="50%"></p>
                          <input type="file" style="border-bottom: none!important;"/>
                          <a class="btn btn-primary" href="#" style="width: 100%">Upload Bukti Pembayaran</a>
                        @else
                        @endif
                    </div>
                    <h4>Total: <span>Rp{{ number_format($data->pakets->harga ,2,',','.') }}</span></h4>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-6">
                    <h5>Invoiced To</h5>
                    <p>{{ $data->users->name }}</p>
                </div>
                <div class="col-lg-6">
                    <h5>Pay to</h5>
                    <p>Ketapang Tours</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer  -->
    <section class="footer">
        <div class="container">
          <center>
            <img src="{{url('assets/images/logo/KetapangLogo-White.png')}}" width="150px" alt="Logo">
             <font color="#f5f5f5" class="font-segoe text-center nopadding">&#8212; &nbsp; Copyright &copy; 2019 - Ketapang - Telkom University</p>
          </center>
        </div>
    </section>
    <!-- End of Footer  -->

    <script src="{{url('assets/scripts/jquery.min.js')}}"></script>
    <script src="{{url('assets/scripts/bootstrap/bootstrap.min.js')}}"></script>

    @endsection
