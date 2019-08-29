@extends('template.navigation2')

@section('konten')
<style>
  .item{
    height: 200!important
  }
</style>
  @if($data->id == 1)
  <section class="transaksi-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>{{ $data->nama }}</h2>
                    <div class="owl-carousel">
                        <div class="item">
                            <h4>1</h4>
                        </div>
                        <div class="item">
                            <h4>2</h4>
                        </div>
                        <div class="item">
                            <h4>3</h4>
                        </div>
                        <div class="item">
                            <h4>4</h4>
                        </div>
                    </div>
                    <br>
                    <h3>Destinasi Wisata</h3>
                    <div class="detail-content-pkt">
                        <ul class="destinasi-pkt">
                            <li>Floating Market Lembang</li>
                            <li>Farmhouse Lembang</li>
                            <li>Gedung Sate</li>
                            <li>Alun – Alun Bandung</li>
                            <li>Gedung Asia Afrika</li>
                        </ul>
                    </div>

                    <div class="map-pkt" id="mapPaket"></div>

                </div>
            </div>
        </div>
        <div class="sticky-book">
            <div class="booking-section">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <h4>Rp{{ number_format($data->harga ,2,',','.') }}- /pax</h4>
                        </div>
                        <div class="col-6">
                            <div class="d-flex justify-content-center align-items-center">
                                @if(Auth::user())
                                <button class="btn btn-primary" style="width: 100%">Booking Now</button>
                                @else
                                <button class="btn btn-primary" style="width: 100%">Login Untuk Booking</button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @elseif($data->id == 2)

    @else

    @endif
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
      items: 4
    }
  }
});
  </script>
@endsection
