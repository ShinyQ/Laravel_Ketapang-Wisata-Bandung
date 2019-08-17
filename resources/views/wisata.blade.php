@extends('template.navigation')

@section('konten')
    <!-- Detail Hero -->
    <!-- <section style="" class="hero-wisata">
        <div class="container d-flex flex-column-reverse align-items-start">
            <p style="color:white" class="detail-text-hl">a</p>
            <span class="detail-title">a</span>
        </div>
        <div class="hero-bg">

        </div> -->
    </section>
    <!-- End of Detail Hero -->

    <div class="container-wisata">
        <div class="row no-gutters">
            <div class="col-md-5">
                <div class="list-wisata">
                    <div class="row">
                        <div class="col-md-6">
                        <a href="#">
                        <div class="wisata-card" style="background-image: url('assets/images/wisata/farmhouse-lembang.jpg')">
                            <div class="wisata-card-desc">
                                <h5>Farmhouse Lembang</h5>
                                <p>Jalan Danau Towuti G5E no 24</p>
                            </div>
                        </div>
                    </a>
                        </div>
                        <div class="col-md-6">
                        <a href="#">
                        <div class="wisata-card" style="background-image: url('assets/images/wisata/farmhouse-lembang.jpg')">
                            <div class="wisata-card-desc">
                                <h5>Farmhouse Lembang</h5>
                                <p>Jalan Danau Towuti G5E no 24</p>
                            </div>
                        </div>
                    </a>
                        </div>
                        <div class="col-md-6">
                        <a href="#">
                        <div class="wisata-card" style="background-image: url('assets/images/wisata/farmhouse-lembang.jpg')">
                            <div class="wisata-card-desc">
                                <h5>Farmhouse Lembang</h5>
                                <p>Jalan Danau Towuti G5E no 24</p>
                            </div>
                        </div>
                    </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                 <div class="map-wisata " id="mapWisata">
                 </div>
            </div>
        </div>
    </div>
    </body>
    <script src="{{url('assets/scripts/jquery.min.js')}}"></script>
    <script src="{{url('assets/scripts/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/scripts/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('assets/scripts/masonry.pkgd.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYTqP6EacKcUYlnQaaGs2TlrKwAhUonoY&callback=initMap"
    async defer></script>
    <script>

    // Function to determine the size of the map div
    function resizeWindow(){
        $('#mapWisata').css({"height":$(window).height()-$(".navbar").height()});
    }
    resizeWindow();
    window.addEventListener("resize", ()=>{
        resizeWindow();
    });
    // AIzaSyDYTqP6EacKcUYlnQaaGs2TlrKwAhUonoY
    function initMap() {
      const map = new google.maps.Map(document.getElementById("mapWisata"), {
        center:  {lat: -6.9009925, lng: 107.6314009},
        zoom: 12
      });

      const geocoder = new google.maps.Geocoder();

      geoLocation(geocoder, map);
    }

    function geoLocation(geocoder, mapResults) {
      const address = [
        'Telkom University',
        'Farmhouse Lembang',
        'Bandung Digital Valley'
      ];

      address.map(location=>{
        geocoder.geocode({ address: location }, function(res, status) {
        if (status == "OK") {
            // mapResults.setCenter(res[0].geometry.location);
          const marker = new google.maps.Marker({
            map: mapResults,
            position: res[0].geometry.location
          });

          marker.addListener('click',()=>{
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
    </html>
@endsection
<!-- Footer  -->
