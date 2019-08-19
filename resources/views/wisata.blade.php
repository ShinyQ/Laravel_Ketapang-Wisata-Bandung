@extends('template.navigation')

@section('konten')
    </section>
    <!-- End of Detail Hero -->
    <style>
      .centered{
        margin: 0;
        text-align: center;
      }
    </style>
    <div class="container-wisata">
        <div class="row no-gutters">
            <div class="col-md-5">
                <form class="navbar-search">
                  <div class="form-group">
                      <div class="input-group input-group-alternative">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-search"></i></span>
                          </div>
                          <form action="/wisata" method="GET">
                            <input class="form-control" type="text" name="search" value="{{ request()->get('search') }}" placeholder="Cari Barang...">
                          </form>
                      </div>
                  </div>
                </form>
                <div class="list-wisata">
                    <div class="row" id="list-wisata">
                      @foreach($wisata as $data)
                        <div class="col-md-6">
                          <a href="/wisata/{{$data->id}}">
                          <div class="wisata-card" style="background-image: url({{asset('images')}}/{{ $data->background }})">
                              <div class="wisata-card-desc">
                                  <h5>{{ $data->nama }}</h5>
                                  <p>{{ $data->alamat }}</p>
                              </div>
                          </div>
                          </a>
                        </div>
                      @endforeach
                    </div>
                    <ul class="pagination justify-content-center">{!! $wisata->appends(request()->all())->links() !!}</ul>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYTqP6EacKcUYlnQaaGs2TlrKwAhUonoY&callback=initMap"
    async defer></script>
    <script>


    let locationArr = [];
    $(".wisata-card-desc p").each(function(a){
      locationArr.push($(this).text())
      console.log($(this).text())
    })
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

      locationArr.map(location=>{
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
