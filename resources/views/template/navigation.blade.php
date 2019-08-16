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
    <link href="{{url('img/icon.png')}}" rel="icon" type="image/png">
    <title>Ketapang</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand nav-home" href="/">
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
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Muhammad Ilham Mubarak
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Logout</a>
                        </div>
                      </li>
            </ul>
            </div>
        </div>
    </nav>
    <!-- End of Navbar -->

    @yield('konten')
