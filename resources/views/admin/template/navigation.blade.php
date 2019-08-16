

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Ketapang</title>
    <link href="{{url('img/icon.png')}}" rel="icon" type="image/png">
    <link rel="stylesheet" href="{{url('assets/styles/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/styles/styles.css')}}">
</head>

<body class="admin-page">
    <!-- Admin Navbar -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="{{url('assets/images/logo-only.png')}}" width="60" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbaradmin"
            aria-controls="navbaradmin" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse nav-admin" id="navbaradmin">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active nav-main-admin">
                    <a class="nav-link" href="#">
                        <span class="sr-only">(current)</span>Wisata</a>
                </li>
                <li class="nav-item nav-main-admin">
                    <a class="nav-link" href="#">
                        <span class="sr-only"></span>Transaksi</a>
                </li>
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
    </nav>
    <!-- End of Admin Navbar -->

    <!-- Admin Sidebar -->
    <div class="admin-sidebar">
        <ul class="nav flex-column nav-sidebar">
            <li class="nav-item">
                <a class="nav-link active" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z" /></svg>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0z" fill="none" />
                        <path d="M14 6l-3.75 5 2.85 3.8-1.6 1.2C9.81 13.75 7 10 7 10l-6 8h22L14 6z" /></svg>
                </a>
            </li>
        </ul>
    </div>

    @yield('konten')

  </body>
  <script src="{{url('assets/scripts/jquery.min.js')}}"></script>
  <script src="{{url('assets/scripts/bootstrap/bootstrap.min.js')}}"></script>
  <script src="{{url('assets/scripts/bootstrap/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('assets/scripts/index.js')}}"></script>
  </html>
     <!-- End of Wisata Content -->
