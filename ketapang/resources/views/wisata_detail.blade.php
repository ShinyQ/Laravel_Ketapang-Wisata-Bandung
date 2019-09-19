@extends('template.navigation2')

@section('konten')
    <!-- Detail Hero -->
    <section style="background-image: url({{asset('assets/images/wisata')}}/{{ $data->background }})" class="hero-detail">
        <div class="container d-flex flex-column-reverse align-items-start">
            <p style="color:white" class="detail-text-hl">{{ $data->alamat }}</p>
            <span class="detail-title">{{ $data->nama }}</span>
        </div>
        <div class="hero-bg">

        </div>
    </section>
    <!-- End of Detail Hero -->

    <!-- Detail Content (Deskripsi) -->
    <section class="deskripsi-detail">
        <div class="container">
            <div class="row">
                <div class="col-md-4 detail-content-desc">
                    <h3 class="title-content">About</h3>
                    <p class="content-text">
                        {{ $data->deskripsi }}
                    </p>
                </div>
                <div class="col-md-8 detail-content-inf">
                    <h3 class="title-content">Information</h3>
                    <div class="group-content-information">
                        <h6>Nama</h6>
                        <p class="content-text">
                            {{ $data->nama }}
                        </p>
                    </div>
                    <div class="group-content-information">
                        <h6>Alamat</h6>
                        <p class="content-text" id="alamatWisata">
                            {{ $data->alamat }}
                        </p>
                    </div>
                    <div class="group-content-information">
                        <h6>Jam Buka</h6>
                        <p class="content-text">
                            {{ $data->waktu }}
                        </p>
                    </div>
                    <div class="group-content-information">
                        <h6>Tanggal Didirikan</h6>
                        <p class="content-text">
                            @if($data->tanggal_dibangun)
                            {{ $data->tanggal_dibangun }}
                            @else
                            -
                            @endif
                        </p>
                    </div>
                    <div class="group-content-information">
                        <h6>Telepon</h6>
                        <p class="content-text">
                          @if($data->telepon)
                          {{ $data->telepon }}
                          @else
                          -
                          @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <h3 class="title-content text-center">Gallery</h3>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="owl-carousel owl-theme anu">
              <div class="item">
                  <div class="item-image">
                    <img class="item-image " src="{{asset('assets/images/wisata')}}/{{ $data->background }}"  width="auto" alt="">
                  </div>
              </div>
            </div>
          <div>
        </div>


        <div class="map-detail" id="map">
        </div>
    </section>
    <!-- Detail Content (Deskripsi)-->
    <section style="margin-top:0!important" class="footer">
        <div class="container">
          <center>
            <img src="{{url('assets/images/logo/KetapangLogo-White.png')}}" width="150px" alt="Logo">
             <font color="#f5f5f5" class="font-segoe text-center nopadding">&#8212; &nbsp; Copyright &copy; 2019 - Ketapang - Telkom University</p>
          </center>
        </div>
    </section>
    </body>
    <script src="{{url('assets/scripts/jquery.min.js')}}"></script>
    <script src="{{url('assets/scripts/bootstrap/bootstrap.min.js')}}"></script>
     <script src="{{url('assets/scripts/owl.carousel.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYTqP6EacKcUYlnQaaGs2TlrKwAhUonoY&callback=initMap"
    async defer></script>
    <script>
    $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    dots: false,
    nav: false,
    autoplay:true,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        margin: 2,
        stagePadding: 10,
      },
      600: {
        items: 3,
        margin: 10,
        stagePadding: 40,
      },
      1000: {
        items: 4
      }
    }
  });


    // AIzaSyDYTqP6EacKcUYlnQaaGs2TlrKwAhUonoY
    function initMap() {
      const map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: -6.903363, lng: 107.6081381 },
        zoom: 16
      });

      const geocoder = new google.maps.Geocoder();

      geoLocation(geocoder, map);
    }

    function geoLocation(geocoder, mapResults) {
      const address = $("#alamatWisata").text();
      geocoder.geocode({ address: address }, function(res, status) {
        if (status == "OK") {
          mapResults.setCenter(res[0].geometry.location);
          const marker = new google.maps.Marker({
            map: mapResults,
            position: res[0].geometry.location
          });
        } else {
          console.log(status);
        }
      });
    }
    </script>
    </html>
@endsection
<!-- Footer  -->
