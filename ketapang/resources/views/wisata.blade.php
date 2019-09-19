@extends('template.navigation2')

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
    <div class="container-fluid">
    <div class="container-toggler d-flex align-content-end justify-content-end">
        <div class="btn-group btn-group-toggle d-lg-none d-sm-block" data-toggle="buttons">
          <button class="btn btn-primary active" id="btn-list">List</button>
          <button class="btn btn-primary" id="btn-maps">Maps</button>
      </div>
    </div>
        <div class="row no-gutters">
            <div class="col-lg-5 col-sm-12">
            <div class="list-wisata-container">
            <form class="navbar-search">
                  <div class="form-group">
                      <div class="input-group input-group-alternative">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-search"></i></span>
                          </div>
                          <form action="/wisata" method="GET">
                            <input class="form-control" type="text" name="search" value="{{ request()->get('search') }}" placeholder="Cari Wisata">
                          </form>
                      </div>
                  </div>
                </form>

                <div class="list-wisata">
                    <div class="row" id="list-wisata">
                      @foreach($wisata as $data)
                        <div class="col-md-6 col-sm-12">
                          <a href="/wisata/{{$data->id}}">
                          <div class="wisata-card" style="background-image: url({{asset('assets/images/wisata')}}/{{ $data->background }})">
                              <div class="wisata-card-desc">
                                  <h5>{{ $data->nama }}</h5>
                                  <p>{{ $data->alamat }}</p>
                              </div>
                          </div>
                          </a>
                        </div>
                      @endforeach
                    </div>
                    <ul style="padding-bottom:100px" class="pagination justify-content-center">{!! $wisata->appends(request()->all())->links() !!}</ul>
                </div>
            </div>

            </div>
            <div class="col-lg-7 col-sm-12">
                 <div class="map-wisata " id="mapWisata">
                 </div>
            </div>
        </div>
    </div>
    </body>
    <script src="{{url('assets/scripts/jquery.min.js')}}"></script>
    <script src="{{url('assets/scripts/bootstrap/bootstrap.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYTqP6EacKcUYlnQaaGs2TlrKwAhUonoY&callback=initMap"
    async defer></script>
    <script>

    let locationArr = [];

      $('#btn-maps').click(()=>{
        $('#btn-maps').addClass('active');
        $('#btn-list').removeClass('active')
        $('.list-wisata-container').css("display",'none');
        $('.map-wisata').css("display",'block');
      })
      $('#btn-list').click(()=>{
        $('#btn-list').addClass('active');
        $('#btn-maps').removeClass('active')
        $('.list-wisata-container').css("display",'block');
        $('.map-wisata').css("display",'none');
      })
    $(".wisata-card-desc p").each(function(a){
      locationArr.push($(this).text())
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
        center:  {lat: -6.893396, lng: 107.62067},
        zoom: 12
      });

      const geocoder = new google.maps.Geocoder();

      geoLocation(geocoder, map);
    }

    function geoLocation(geocoder, mapResults) {

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
