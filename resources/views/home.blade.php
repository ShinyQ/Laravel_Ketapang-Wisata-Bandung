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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa vel, provident libero eius
                            dignissimos ducimus facere voluptate quae ex nostrum sit, non impedit earum atque suscipit
                            fugit magnam rem eveniet!</p>
                      </div>
                    </div>
                    <div class="col-md-7">
                      <!-- <center>
                        <img class="float-right header-img" src="{{url('assets/images/wisata/gedungsate_bitmap.png')}}" width="100%" alt="">
                      </center> -->
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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime necessitatibus sapiente
                        asperiores dolorum, est perferendis facilis quam? Sequi ab eveniet id numquam sed, autem
                        architecto, voluptates dolor inventore nobis asperiores?</p>
                </div>
                <div class="col-md-6">

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
                    <p>Kuliner enak dan murah meriah memang identik dengan kota yang satu ini. Kuliner jajanan yang unik dan legendaris menggoyang lidah pun ada disini.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="{{url('assets/images/highlight/wisata.png')}}" width="120px" alt="">
                    <h3>Wisata</h3>
                    <p>Bagi kalian yang berencana menghabiskan akhir tahun, Kota Bandung memang cocok untuk Anda kunjungi.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="{{url('assets/images/highlight/sejarah.png')}}" width="120px" alt="">
                    <h3>Sejarah</h3>
                    <p>Selain memiliki berbagai destinasi wisata alam, Bandung turut dihuni banyak bangunan bersejarah saksi kemerdekaan Indonesia.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="landing news">

        <div class="container">
            <h2>Berita Terkini</h2>
            <div class="row" id="newsContainer">

            </div>
        </div>
    </section>
    <section class="landing wisata">
        <div class="container">
            <h2>Wisata Bandung</h2>
        </div>
        <div class="owl-carousel owl-theme">
            <div class="item item-wisata">
                <div class="item-slanted">
                    <div class="item-overlay">
                    </div>
                    <img src="{{url('assets/images/wisata/farmhouse-lembang.jpg')}}">
                </div>
                <h4 class="heading-item">
                    <span>Farmhouse Lembang</span>
                </h4>
            </div>
          <div class="item">
            <a href="#">
              <div class="item-image">
                <img class="item-image img-fluid" src="{{url('assets/images/wisata/gedungsate_bitmap.jpg')}}" width="auto" alt="">
              </div>
              <div class="item-text">
                <span class="item-kicker">Gedung Sate</span>
                <h3 class="item-title">Monumen Gubernur Jawa Barat</h3>
              </div>
            </a>
          </div>
            <div class="item">
                <h4>2</h4>
            </div>
            <div class="item">
                <h4>2</h4>
            </div>
            <div class="item">
                <h4>2</h4>
            </div>
        </div>
        <div class="container d-flex justify-content-end">
            <a href="/wisata">
                Lihat Semua
            </a>
        </div>
        <div class="features-slanted">

            </div>
    </section>
    <section class="landing paket">
        <div class="container">
            <h2>Paket Wisata</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, hic dolor. Voluptates praesentium</p>
            <div class="row">
                <div class="col-md-4">
                    <div class="plans-card d-flex flex-column">
                        <div class="plans-header d-flex align-items-center justify-content-center">
                            <p>paket</p>
                            <h2>Misqueen</h2>
                        </div>
                        <div class="plans-content">
                            <button class="btn btn-primary">Pilih Paket</button>
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
                                <button class="btn btn-primary">Pilih Paket</button>
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
                                    <button class="btn btn-primary">Pilih Paket</button>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </section>

    <section class="footer">
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
<script src="{{url('assets/scripts/bootstrap/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('assets/scripts/owl.carousel.min.js')}}"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
// Owl Carousel
$('.owl-carousel').owlCarousel({
// <<<<<<< HEAD
//   loop:true,
//   margin:18,
// //   autoplay:true,
//   items:2,
//   center:true,
//   responsive:{
//       0:{
//           items:1,
//           center:false
//       },
//       600:{
//           center:false,
//           items:1
//       },
//       1000:{
//           items:2
//       }
// =======
  loop: true,
  margin: 30,
  dots: false,
  nav: false,
  responsiveClass: true,
  responsive: {
    0: {
      items: 2,
      margin: 10,
      stagePadding: 20,
    },
    600: {
      items: 3,
      margin: 20,
      stagePadding: 50,
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

</script>
    @endsection

</html>
