<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="{{url('assets/styles/bootstrap/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/styles/owl/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('assets/styles/owl/owl.theme.default.css')}}">
    <link rel="stylesheet" href="{{url('assets/styles/owl/owl.theme.green.css')}}">
    <link rel="stylesheet" href="{{url('assets/styles/styles.css')}}" />
    <title>Ketapang</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand nav-home" href="#">
                <div class="nav-brand">
                    <img src="{{url('assets/images/logo/KetapangLogoOnly-White.png')}}" height="50" alt="">

                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">
                            <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End of Navbar -->
    <!-- Hero Landing-->
    <section class="hero">
        <div class="hero-slanted">
            <span></span>
            <span></span>
        </div>
        <div class="hero-content d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1>Ketapang</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa vel, provident libero eius
                            dignissimos ducimus facere voluptate quae ex nostrum sit, non impedit earum atque suscipit
                            fugit magnam rem eveniet!</p>
                    </div>
                    <div class="col-md-4">

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
    <!-- Footer  -->
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
<script src="{{url('assets/scripts/index.js')}}"></script>

</html>
