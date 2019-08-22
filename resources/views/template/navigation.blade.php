<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="{{ asset('img/icon.png') }}">
    <link rel="stylesheet" href="{{url('assets/styles/bootstrap/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/styles/owl/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('assets/styles/owl/owl.theme.default.css')}}">
    <link rel="stylesheet" href="{{url('assets/styles/owl/owl.theme.green.css')}}">
    <link rel="stylesheet" href="{{url('assets/styles/styles.css')}}" />
    <title>Ketapang</title>
</head>

<body>
    <!-- Navbar -->
    <div id="hero"></div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow">
        <div class="container">
            <a class="navbar-brand nav-home" href="/">
                <div class="nav-brand">
                    <img classname="d-sm-none d-md-block" src="{{url('assets/images/logo/KetapangLogoOnly-White.png')}}"  alt="">
                    <img classname="d-sm-block d-md-none" src="{{url('assets/images/logo/KetapangLogoOnly-Color.png')}}"  alt="">
                </div>
            </a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
        				<a  class="nav-link" data-scroll href="#hero">Beranda</a>
        			</li>
        			<li class="nav-item">
        				<a data-scroll class="nav-link" href="#news">Berita</a>
			        </li>
              <li class="nav-item">
        				<a data-scroll class="nav-link" href="#wisata">Wisata</a>
			        </li>
              <li class="nav-item">
        				<a data-scroll class="nav-link" href="#paket">Paket</a>
			        </li>
             @if(Auth::user())
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="/logout">Logout</a>
                        </div>
                </li>
                @else
                <li class="nav-item">
                    <a href="/login" class="nav-link">Login</a>
                </li>
                @endif
            </ul>
            </div>
        </div>
    </nav>
    <!-- End of Navbar -->
  </body>

@yield('konten')
