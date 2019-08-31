@extends('template.navigation2')

@section('konten')
<section class="transaksi-detail">
        <div class="container">
            <div class="row" style="margin-top: 40px">
                <div class="col-lg-6">
                    <h2 style="margin-bottom: 10px;">
                      {{ $data->pakets->nama }}
                    </h2>
                    <h6>  {{ date('D, d F Y', strtotime($data->tanggal)) }}</h6>
                    @if($data->id_paket == 1)
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
                    @elseif($data->id_paket == 2)
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
                    @else
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
                    @endif
                    <div style="height: 300px; margin-bottom: 50px" class="map-pkt" id="mapPaket"></div>
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
                        <form action="/transaksi/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          <input type="file" name="bukti" style="border-bottom: none!important;"/>
                          <button type="submit" class="btn btn-primary" href="#" style="width: 100%">Upload Bukti Pembayaran</a>
                        </form>
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
</script>
    @endsection
