@extends('template.navigation2')

@section('konten')
<style>
  .item{
    height: 200!important
  }

  p{
    font-size: 16px!important;
  }
</style>
  @if($data->id == 1)
  <br> <br>
  <section class="transaksi-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 vertical-line">
                  <br><h2 style="margin-bottom: -10px"> {{ $data->nama }} </h2>
                  <div class="owl-carousel">
                      <div class="item">
                        <a href="" class="card-detailpaket">
                          <img class="img-fluid" src="{{url('assets/images/wisata/1566520303.jpg')}}" width="auto" alt="">
                          <p>Floating Market Lembang</p>
                        </a>
                      </div>
                      <div class="item">
                        <div class="card-detailpaket">
                          <img class="img-fluid" src="{{url('assets/images/wisata/1566475566.jpg')}}" width="auto" alt="">
                          <p>Farming House</p>
                        </div>
                      </div>
                      <div class="item">
                        <div class="card-detailpaket">
                          <img class="img-fluid" src="{{url('assets/images/wisata/1566481584.jpg')}}" width="auto" alt="">
                          <p>Gedung Sate</p>
                        </div>
                      </div>
                      <div class="item">
                        <div class="card-detailpaket">
                          <img class="img-fluid" src="{{url('assets/images/wisata/1566519008.jpg')}}" width="auto" alt="">
                          <p>Alun - Alun Bandung</p>
                        </div>
                      </div>
                      <div class="item">
                        <div class="card-detailpaket">
                          <img class="img-fluid" src="{{url('assets/images/wisata/1566560914.jpg')}}" width="auto" alt="">
                          <p>Gedung Asia Afrika</p>
                        </div>
                      </div>
                  </div>
                    <br>
                    <h3>Destinasi Wisata</h3>
                    <div class="detail-content-pkt">
                      <ul class="destinasi-pkt">
                          <li>Floating Market Lembang
                            <span>Rp. 500.000,-</span>
                          </li>
                          <li>Farmhouse Lembang
                            <span>Rp. 450.000,-</span>
                          </li>
                          <li>Gedung Sate
                            <span>Rp. 250.000,-</span>
                          </li>
                          <li>Alun – Alun Bandung
                            <span>Rp. 200.000,-</span>
                          </li>
                          <li>Gedung Asia Afrika
                            <span>Rp. 200.000,-</span>
                          </li>
                      </ul>
                    </div>

                    <div class="map-pkt" id="mapPaket"></div>

                </div>
                <div class="col-lg-3">
                  <div class="sticky-book">
                      <div class="booking-section">
                          <div class="container-fluid">
                              <div class="row">
                                  <form role="form" action="/transaksi" method="POST">
                                  @csrf
                                  <div class="col-12">
                                      <h4>Total</h4>
                                      <p>Rp{{ number_format($data->harga ,2,',','.') }}- /pax</p>
                                  </div>
                                  <input type="hidden" name="harga" value="{{$data->harga}}">
                                  <div class="col-12">
                                    <input name="tanggal" type="date" class="form-control" min="<?php echo date("Y-m-d"); ?>">
                                    <input type="hidden" name="id_paket" value="{{ $data->id }}">
                                        <br>
                                        @if(Auth::user())
                                        <button type="submit" class="btn btn-primary"> Booking Now </button>
                                        @else
                                        <a href="/login" class="btn btn-primary">Login Untuk Booking</a>
                                        @endif
                                  </div>
                                </form>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </section>

    @elseif($data->id == 2)

    <section class="transaksi-detail">
          <div class="container">
              <div class="row">
                  <div class="col-lg-9 vertical-line">
                      <br><br><h2 style="margin-bottom: -10px"> {{ $data->nama }} </h2>
                      <div class="owl-carousel">
                          <div class="item">
                            <div class="card-detailpaket">
                              <img class="img-fluid" src="{{url('assets/images/wisata/1566520303.jpg')}}" width="auto" alt="">
                              <p>Floating Market Lembang</p>
                            </div>
                          </div>
                          <div class="item">
                            <div class="card-detailpaket">
                              <img class="img-fluid" src="{{url('assets/images/wisata/1566475566.jpg')}}" width="auto" alt="">
                              <p>Farming House</p>
                            </div>
                          </div>
                          <div class="item">
                            <div class="card-detailpaket">
                            <img class="img-fluid" src="{{url('assets/images/wisata/1566481584.jpg')}}" width="auto" alt="">
                              <p>Gedung Sate</p>
                            </div>
                          </div>
                          <div class="item">
                            <div class="card-detailpaket">
                              <img class="img-fluid" src="{{url('assets/images/wisata/1566519008.jpg')}}" width="auto" alt="">
                              <p>Alun - Alun Bandung</p>
                            </div>
                          </div>
                          <div class="item">
                            <div class="card-detailpaket">
                              <img class="img-fluid" src="{{url('assets/images/wisata/1566560914.jpg')}}" width="auto" alt="">
                              <p>Gedung Asia Afrika</p>
                            </div>
                          </div>
                          <div class="item">
                            <div class="card-detailpaket">
                              <img class="img-fluid" src="{{url('assets/images/wisata/1566519777.jpg')}}" width="auto" alt="">
                              <p>De’Ranch Lembang</p>
                            </div>
                          </div>
                      </div>
                      <br>
                      <h3>Destinasi Wisata</h3>
                      <div class="detail-content-pkt">
                          <ul class="destinasi-pkt">
                            <li>Floating Market Lembang
                              <span>Rp. 500.000,-</span>
                            </li>
                            <li>Farmhouse Lembang
                              <span>Rp. 450.000,-</span>
                            </li>
                            <li>Gedung Sate
                              <span>Rp. 250.000,-</span>
                            </li>
                            <li>Alun – Alun Bandung
                              <span>Rp. 200.000,-</span>
                            </li>
                            <li>Gedung Asia Afrika
                              <span>Rp. 200.000,-</span>
                            </li>
                            <li>De’Ranch Lembang
                              <span>Rp. 150.000,-</span>
                            </li>
                          </ul>
                      </div>

                      <div class="map-pkt" id="mapPaket"></div>

                  </div>
                  <div class="col-lg-3">
                    <div class="sticky-book">
                        <div class="booking-section">
                            <div class="container-fluid">
                                <div class="row">
                                    <form role="form" action="/transaksi" method="POST">
                                    @csrf
                                    <div class="col-12">
                                        <h4>Total</h4>
                                        <p>Rp{{ number_format($data->harga ,2,',','.') }}- /pax</p>
                                    </div>
                                    <input type="hidden" name="harga" value="{{$data->harga}}">
                                    <div class="col-12">
                                      <input name="tanggal" type="date" class="form-control" min="<?php echo date("Y-m-d"); ?>">
                                      <input type="hidden" name="id_paket" value="{{ $data->id }}">
                                          <br>
                                          @if(Auth::user())
                                          <button type="submit" class="btn btn-primary"> Booking Now </button>
                                          @else
                                          <a href="/login" class="btn btn-primary">Login Untuk Booking</a>
                                          @endif
                                    </div>
                                  </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
              </div>
          </div>
      </section>

      @elseif($data->id == 3)

      <section class="transaksi-detail">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 vertical-line">
                      <br><br><h2 style="margin-bottom: -10px"> {{ $data->nama }} </h2>
                        <div class="owl-carousel">
                            <div class="item">
                              <div class="card-detailpaket">
                                <img class="img-fluid" src="{{url('assets/images/wisata/1566520303.jpg')}}" width="auto" alt="">
                                <p>Floating Market Lembang</p>
                              </div>
                            </div>
                            <div class="item">
                              <div class="card-detailpaket">
                                <img class="img-fluid" src="{{url('assets/images/wisata/1566475566.jpg')}}" width="auto" alt="">
                                <p>Farming House</p>
                              </div>
                            </div>
                            <div class="item">
                              <div class="card-detailpaket">
                                <img class="img-fluid" src="{{url('assets/images/wisata/1566481584.jpg')}}" width="auto" alt="">
                                <p>Gedung Sate</p>
                              </div>
                            </div>
                            <div class="item">
                              <div class="card-detailpaket">
                                <img class="img-fluid" src="{{url('assets/images/wisata/1566519008.jpg')}}" width="auto" alt="">
                                <p>Alun - Alun Bandung</p>
                              </div>
                            </div>
                            <div class="item">
                              <div class="card-detailpaket">
                                <img class="img-fluid" src="{{url('assets/images/wisata/1566560914.jpg')}}" width="auto" alt="">
                                <p>Gedung Asia Afrika</p>
                              </div>
                            </div>
                            <div class="item">
                              <div class="card-detailpaket">
                                <img class="img-fluid" src="{{url('assets/images/wisata/1566519777.jpg')}}" width="auto" alt="">
                                <p>De’Ranch Lembang</p>
                              </div>
                            </div>
                            <div class="item">
                              <div class="card-detailpaket">
                                <img class="img-fluid" src="{{url('assets/images/wisata/1566488627.jpg')}}" width="auto" alt="">
                                <p>Cihampelas Walk</p>
                              </div>
                            </div>
                            <div class="item">
                              <div class="card-detailpaket">
                                <img class="img-fluid" src="{{url('assets/images/wisata/1566520816.jpg')}}" width="auto" alt="">
                                <p>Kebun Begonia</p>
                              </div>
                            </div>
                        </div>
                        <br>
                        <h3>Destinasi Wisata</h3>
                        <div class="detail-content-pkt">
                            <ul class="destinasi-pkt">
                              <li>Floating Market Lembang
                                <span>Rp. 500.000,-</span>
                              </li>
                              <li>Farmhouse Lembang
                                <span>Rp. 450.000,-</span>
                              </li>
                              <li>Gedung Sate
                                <span>Rp. 250.000,-</span>
                              </li>
                              <li>Alun – Alun Bandung
                                <span>Rp. 200.000,-</span>
                              </li>
                              <li>Gedung Asia Afrika
                                <span>Rp. 200.000,-</span>
                              </li>
                              <li>De’Ranch Lembang
                                <span>Rp. 150.000,-</span>
                              </li>
                              <li>Cihampes Walk
                                <span>Rp. 250.000,-</span>
                              </li>
                              <li>Kebun Begonia
                                <span>Rp. 200.000,-</span>
                              </li>
                            </ul>
                        </div>

                        <div class="map-pkt" id="mapPaket"></div>

                    </div>
                    <div class="col-lg-3">
                      <div class="sticky-book">
                          <div class="booking-section">
                              <div class="container-fluid">
                                  <div class="row">
                                      <form role="form" action="/transaksi" method="POST">
                                      @csrf
                                      <div class="col-12">
                                          <h4>Total</h4>
                                          <p>Rp{{ number_format($data->harga ,2,',','.') }}- /pax</p>
                                      </div>
                                      <input type="hidden" name="harga" value="{{$data->harga}}">
                                      <div class="col-12">
                                        <input name="tanggal" type="date" class="form-control" min="<?php echo date("Y-m-d"); ?>">
                                        <input type="hidden" name="id_paket" value="{{ $data->id }}">
                                            <br>
                                            @if(Auth::user())
                                            <button type="submit" class="btn btn-primary"> Booking Now </button>
                                            @else
                                            <a href="/login" class="btn btn-primary">Login Untuk Booking</a>
                                            @endif
                                      </div>
                                    </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
        </section>
    @else

    @endif
    <!-- Footer  -->
    <section style="margin-top:100px!important;" class="footer">
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
        <script src="{{url('assets/scripts/owl.carousel.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYTqP6EacKcUYlnQaaGs2TlrKwAhUonoY&callback=initMap"
    async defer></script>
<script>
     let locationArrPkt = []

$(".destinasi-pkt li").each(function (a) {
    locationArrPkt.push($(this).text())
})


function initMap() {
    const map = new google.maps.Map(document.getElementById("mapPaket"), {
        center: { lat: -6.893396, lng: 107.62067 },
        zoom: 12
    });

    const geocoder = new google.maps.Geocoder();

    geoLocation(geocoder, map);
}

function geoLocation(geocoder, mapResults) {

    locationArrPkt.map(location => {
        geocoder.geocode({ address: location }, function (res, status) {
            if (status == "OK") {
                // mapResults.setCenter(res[0].geometry.location);
                const marker = new google.maps.Marker({
                    map: mapResults,
                    position: res[0].geometry.location
                });

                marker.addListener('click', () => {
                    console.log('clicked')
                    mapResults.setZoom(15);
                    mapResults.setCenter(res[0].geometry.location)
                })
            } else {
                console.log(status);
            }
        });
    })

}

// Owl Carousel
$('.owl-carousel').owlCarousel({
  loop: true,
  margin: 2,
  dots: false,
  nav: false,
  autoplay:true,
  responsiveClass: true,
  responsive: {
    0: {
      items: 1,
      margin: 2,
      stagePadding: 4,
    },
    600: {
      items: 3,
      margin: 4,
      stagePadding:10,
    },
    1000: {
      items: 3
    }
  }
});
  </script>
@endsection
