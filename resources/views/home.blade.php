@extends('template.navigation')

@section('konten')
<!-- Hero Landing-->
    <section class="hero">
        <div class="hero-slanted">
            <span></span>
            <span></span>
        </div>
        <div class="hero-content d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                      <div class="header">
                        <h1>Ketapang</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa vel, provident libero eius
                            dignissimos ducimus facere voluptate quae ex nostrum sit, non impedit earum atque suscipit
                            fugit magnam rem eveniet!</p>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <center>
                        <img src="{{url('assets/images/wisata/gedungsate_bitmap.png')}}" width="90%" alt="">
                      </center>
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
                    <!-- <img src="https://via.placeholder.com/150" alt=""> -->
                    <!-- Replace SVG with icon 150x150 -->
                    <svg height="150" width="150">
                        <circle cx="75" cy="75" r="60" fill="#ffd664" />
                    </svg>
                    <h3>Senyum</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro aliquid aut quos temporibus
                    </p>
                </div>
                <div class="col-md-4">
                    <!-- <img src="https://via.placeholder.com/150" alt=""> -->
                    <!-- Replace SVG with icon 150x150 -->
                    <svg height="150" width="150">
                        <circle cx="75" cy="75" r="60" fill="#ffd664" />
                    </svg>
                    <h3>Sapa</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro aliquid aut quos temporibus
                    </p>
                </div>
                <div class="col-md-4">
                    <!-- <img src="https://via.placeholder.com/150" alt=""> -->
                    <!-- Replace SVG with icon 150x150 -->
                    <svg height="150" width="150">
                        <circle cx="75" cy="75" r="60" fill="#ffd664" />
                    </svg>
                    <h3>Santuy</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro aliquid aut quos temporibus
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
        <div class="container d-flex justify-content-end">
            <a href="#">
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
  loop:true,
  margin:18,
  items:2,
  center:true,
  responsive:{
      0:{
          items:1,
          center:false
      },
      600:{
          center:false,
          items:2
      },
      1000:{
          items:2
      }
  }
})


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
