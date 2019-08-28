@extends('template.navigation')

@section('konten')
<!-- Hero Landing-->
    <section class="hero">
    <div class="hero-overlay">
            <span></span>
            <span></span>
        </div>
        <div class="hero-slanted">
            <span></span>
            <span></span>
        </div>
        <div class="hero-content d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                      <div class="header">
                        <h1>Ketapang</h1>
                        <p>Temukan dan Jelajahi Beragam Tempat Wisata Nan Indah Dan Menarik <br>Di <strong>Paris Van Java-nya</strong><br> Indonesia </p>
                      </div>
                    </div>
                    <div class="col-md-7">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="landing city">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Bandung</h2>
                    <p>Paris van Java merupakan sebutan untuk Kota Bandung pada zaman kolonial Belanda yang memiliki arti
                       <strong><i>"Paris Van Java"</i></strong> julukan ini diberikan karena Kota
                       Bandung terkenal dengan keindahan alam dan kesejukan udaranya. Meskipun julukan tersebut hanya sampai zaman kolonial
                       akan tetapi,<br> sisa-sisa <strong><i>"Paris Van Java"</i></strong> tersebut, masih terasa sampai sekarang.
                    </p>
                </div>
                <div class="col-md-6">
                  <iframe width="88%" height="280" src="https://www.youtube.com/embed/DOYnxZHWSV8"
                  frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                  </iframe>
                </div>
            </div>
        </div>
    </section>
    <section class="landing features">
        <div class="container features-content">
            <div class="row ">
                <div class="col-md-4">
                    <img src="{{url('assets/images/highlight/kuliner.png')}}" width="120px" alt="">
                    <h3>Kuliner</h3>
                    <p>
                      Kuliner enak dan murah meriah memang identik dengan kota yang satu ini, kuliner jajanan yang unik dan legendaris menggoyang lidah pun ada disini. Temui dan rasakan bedanya.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="{{url('assets/images/highlight/wisata.png')}}" width="120px" alt="">
                    <h3>Wisata</h3>
                    <p>
                      Destinasi wisata serta pemandangan alam yang di gemari wisatawan lokal maupun mancanegara sangatlah beraneka ragam dan cocok untuk dikunjungi untuk berlibur dan bersantai.
                    </p>

                </div>
                <div class="col-md-4">
                    <img src="{{url('assets/images/highlight/sejarah.png')}}" width="120px" alt="">
                    <h3>Sejarah</h3>
                    <p>
                      Selain memiliki berbagai destinasi wisata alamnya, Kota Bandung turut dihuni banyak bangunan bersejarah sebagai saksi kemerdekaan Indonesia yang masih terasa sampai sekarang.
                   </p>

                </div>
            </div>
        </div>
        <div id="news"></div>
    </section>

    <section class="landing news">

        <div class="container">
            <h2>Berita Terkini</h2>
            <div class="row" id="newsContainer">

            </div>
        </div>

    </section>

    <section class="landing wisata" id="wisata">
        <div style="padding-top: 60px" class="container">
            <center><h2 style="margin-top:10px">Wisata Bandung</h2></center>
        </div>
        <div class="owl-carousel owl-theme">
            @foreach($wisata as $data)
            <div class="item">
              <a href="/wisata/{{ $data->id }}">
                <div class="item-image">
                  <img class="item-image " src="{{asset('assets/images/wisata')}}/{{ $data->background }}"  width="auto"  alt="">
                </div>
                <div class="item-text">
                  <span class="item-kicker">{{ $data->nama }}</span>
                  <h3 class="item-title">{{ $data->alamat }}</h3>
                </div>
              </a>
            </div>
            @endforeach
        </div>
        <div style="margin-top: 40px; padding-bottom:40px" class="container d-flex justify-content-center">
            <a style="font-weight: 700" class="btn btn-primary" href="/wisata">
                Lihat Semua
            </a>
        </div>
        <div class="features-slanted"></div>
    </section>

    <div id="paket"></div>

    <section class="landing paket">
        <div class="container">
            <h2 style="margin-top: 200px; margin-bottom:50px">Paket Wisata</h2>
            <p>Jelajahi Dan Kunjungi Tempat Wisata Nan Indah Di Bandung Dengan Paket Wisata Kami</p>
            <div class="row">
                <div class="col-md-4">
                    <div class="plans-card d-flex flex-column">
                        <div class="plans-header d-flex align-items-center justify-content-center">
                            <p>paket</p>
                            <h2>Merakyat</h2>
                        </div>
                        <div class="plans-content">
                            <h3 class="font-segoe color-black text-center">
                              Rp. 1.600.000,-
                              <span> / pax </span>
                            </h3>
                            <br>
                            <hr>
                            <p class="font-segoe color-black text-center">Floating Market Lembang</p>
                            <p class="font-segoe color-black text-center bg-grey">Farmhouse Lembang</p>
                            <p class="font-segoe color-black text-center">Gedung Sate</p>
                            <p class="font-segoe color-black text-center bg-grey">Alun – Alun Bandung</p>
                            <p class="font-segoe color-black text-center">Gedung Asia Afrika</p>
                            <p class="font-segoe color-black text-center  bg-grey color-disable">De’Ranch Lembang</p>
                            <p class="font-segoe color-black text-center color-disable">Cihampelas Walk</p>
                            <p class="font-segoe color-black text-center  bg-grey color-disable">Kebun Begonia</p>
                            <button class="btn btn-primary">Detail Paket</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="plans-card d-flex flex-column">
                        <div class="plans-header d-flex align-items-center justify-content-center">
                            <p>paket</p>
                            <h2>Menengah</h2>
                        </div>
                        <div class="plans-content">
                            <h3 class="font-segoe color-black text-center">
                              Rp. 1.750.000,-
                              <span> / pax </span>
                            </h3>
                            <br>
                            <hr>
                            <p class="font-segoe color-black text-center">Floating Market Lembang</p>
                            <p class="font-segoe color-black text-center bg-grey">Farmhouse Lembang</p>
                            <p class="font-segoe color-black text-center">De’Ranch Lembang</p>
                            <p class="font-segoe color-black text-center  bg-grey">Gedung Sate</p>
                            <p class="font-segoe color-black text-center ">Gedung Asia Afrika</p>
                            <p class="font-segoe color-black text-center bg-grey">Alun – Alun Bandung</p>
                            <p class="font-segoe color-black text-center color-disable">Cihampelas Walk</p>
                            <p class="font-segoe color-black text-center  bg-grey color-disable">Kebun Begonia</p>
                            <button class="btn btn-primary">Detail Paket</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="plans-card d-flex flex-column">
                        <div class="plans-header d-flex align-items-center justify-content-center">
                            <p>paket</p>
                            <h2>Soeltan</h2>
                        </div>
                        <div class="plans-content">
                            <h3 class="font-segoe color-black text-center">
                              Rp. 2.200.000,-
                              <span> / pax </span>
                            </h3>
                            <br>
                            <hr>
                            <p class="font-segoe color-black text-center">Floating Market Lembang</p>
                            <p class="font-segoe color-black text-center bg-grey">Farmhouse Lembang</p>
                            <p class="font-segoe color-black text-center">Kebun Begonia</p>
                            <p class="font-segoe color-black text-center bg-grey">De’Ranch Lembang</p>
                            <p class="font-segoe color-black text-center">Gedung Sate</p>
                            <p class="font-segoe color-black text-center bg-grey">Gedung Asia Afrika</p>
                            <p class="font-segoe color-black text-center">Cihampelas Walk</p>
                            <p class="font-segoe color-black text-center bg-grey">Alun – Alun Bandung</p>
                            <button class="btn btn-primary">Detail Paket</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer  -->
    <section style="margin-top:0!important" class="footer">
        <div class="container">
          <center>
            <img src="{{url('assets/images/logo/KetapangLogo-White.png')}}" width="150px" alt="Logo">
             <font color="#f5f5f5" class="font-segoe text-center nopadding">&#8212; &nbsp; Copyright &copy; 2019 - Ketapang - Telkom University</p>
          </center>
        </div>
    </section>
    <!-- End of Footer  -->
</body>
<script src="{{url('assets/scripts/jquery.min.js')}}"></script>
<script src="{{url('assets/scripts/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{url('assets/scripts/owl.carousel.min.js')}}"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
// Owl Carousel
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


// Fetch News API

const newsUrl =
  "https://newsapi.org/v2/everything?apiKey=f8fd87d48cf746e0a817a4f7a21bafe4&q=bandung AND (wisata OR travel OR turis OR alam OR pemandangan)&language=id";
axios.get(newsUrl).then(resp => {
  for (let i = 0; i < 6; i++) {
    var d = new Date(resp.data.articles[i].publishedAt);
    d = d.getDate()+'-'+(d.getMonth()+1)+'-'+d.getFullYear()+' '+(d.getHours() > 12 ? d.getHours() - 12 : d.getHours())+':'+d.getMinutes()+' '+(d.getHours() >= 12 ? "PM" : "AM");
    $("#newsContainer").append(`
    <div class="col-md-4 col-sm-6 col-xs-6">
    <a href="${resp.data.articles[i].url}" target="_blank">
    <div class="news-card" style='background-image:url("${
      resp.data.articles[i].urlToImage
    }")'>
        <div class="news-content">
                <h5>${resp.data.articles[i].title}</h5>
                <p>${ d }</p>
        </div>
    </div>
    </a>
</div>
    `);
  }
});

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
          document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'

        });
    });
});

</script>


@endsection

</html>
