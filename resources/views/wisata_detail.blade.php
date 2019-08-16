@extends('template.navigation')

@section('konten')
    <!-- Detail Hero -->
    <section style="background-image: url({{asset('images')}}/{{ $data->background }})" class="hero-detail">
        <div class="container d-flex flex-column-reverse align-items-start">
            <p style="color:white" class="detail-text-hl">{{ $data->alamat }}</p>
            <span class="detail-title">{{ $data->nama }}</span>
        </div>
        <div class="hero-bg">

        </div>
    </section>
    <!-- End of Detail Hero -->

    <!-- Detail Tabs -->
    <section class="hero-tabs">
        <div class="container">
            <ul class="nav nav-fill nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Deskripsi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="detail-gallery.html">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">QnA</a>
                </li>
            </ul>
        </div>
    </section>
    <!-- End of Detail Tabs -->

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
                            {{ $data->tanggal_dibangun }}
                        </p>
                    </div>
                    <div class="group-content-information">
                        <h6>Telepon</h6>
                        <p class="content-text">
                            {{ $data->telepon }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="map-detail" id="map">
        </div>
    </section>
    <!-- Detail Content (Deskripsi)-->

    <section class="footer">
        <div class="container">
            <p class="float-right">Copyright &copy; 2019 - Ketapang - Telkom University</p>
        </div>
    </section>
    <!-- End of Footer  -->
    </body>
    <script src="{{url('assets/scripts/jquery.min.js')}}"></script>
    <script src="{{url('assets/scripts/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/scripts/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('assets/scripts/masonry.pkgd.min.js')}}"></script>
    <script src="{{url('assets/scripts/owl.carousel.min.js')}}"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYTqP6EacKcUYlnQaaGs2TlrKwAhUonoY&callback=initMap"
    async defer></script>
    <script src="{{url('assets/scripts/index.js')}}"></script>

    </html>
@endsection
<!-- Footer  -->
