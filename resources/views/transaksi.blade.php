@extends('template.navigation2')

@section('konten')
<section class="transaksi">
  <div class="container">
      <h2>Transaksi</h2>
      <div class="row">
          @forelse($transaksi as $data)
          <div class="col-lg-12">
              <div class="card-transaksi">
                  <div class="row">
                      <div class="col-lg-3">
                          <div class="bg-card-t">
                              <div class="overlay-t"></div>
                              @if($data->id_paket == "1")
                              <img src="{{asset('assets/images/transaksi/lembang.jpg')}}" alt="">
                              @elseif($data->id_paket == "2")
                                <img src="{{asset('assets/images/transaksi/museum.jpg')}}" alt="">
                              @else
                              <img src="{{asset('assets/images/transaksi/tsb.jpg')}}" alt="">
                              @endif
                          </div>
                      </div>
                      <div class="col-lg-9">
                          <div class="content-card">
                              <div class="row">
                                  <div class="col-lg-5">
                                      <div class="brief-card">
                                          <h5>{{ $data->pakets->nama }}</h5>
                                          <p>Rp{{ number_format($data->pakets->harga ,2,',','.') }}</p>
                                          <hr>
                                      </div>
                                  </div>
                                  <div class="col-lg-7">
                                      <div class="detail-card-t">

                                          <div class="row no-gutters">
                                              <div class="col-lg-6">
                                                  <h6>Tanggal</h6>
                                                  <span> {{ date('D, d F Y', strtotime($data->tanggal)) }}</span>
                                              </div>
                                              <div class="col-lg-6">
                                                  <h6>Status</h6>
                                                  @if($data->status == "Jadwal Wisata Ditolak")
                                                  <strong><span style="color:red">{{ $data->status }}</span></strong>
                                                  @elseif($data->status == "Jadwal Wisata Diterima")
                                                  <strong><span style="color:green">{{ $data->status }}</span></strong>
                                                  @else
                                                  <strong><span style="color:orange">{{ $data->status }}</span></strong>
                                                  @endif
                                              </div>
                                              <a class="btn btn-primary" href="/transaksi/{{ $data->id }}">Detail</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          @empty
          <div class="col-lg-12"><h4>Anda Belum Membuat Transaksi</h4></div>
          @endforelse
      </div>
  </div>
</section>
<script src="{{url('assets/scripts/jquery.min.js')}}"></script>
<script src="{{url('assets/scripts/bootstrap/bootstrap.min.js')}}"></script>
@endsection
