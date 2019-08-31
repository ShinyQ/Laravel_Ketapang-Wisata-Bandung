@extends('admin.template.navigation')

@section('konten')
<!-- Admin Wisata Content -->

    <div class="main-admin">
        <div class="header-admin">
            <h4>List Tempat Wisata</h4>
            <a href="/admin/wisata/create" class="ml-auto">
                <button class="btn btn-primary ">Add Wisata</button>
            </a>
        </div>
        <form style="margin-left: -2px; width: 50%; margin-bottom: 30px;" class="navbar-search">
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
          @if (Session::has('message'))
            <h5><font color="green"> {{ Session::get('message') }}</font></h5><br>
          @endif

        <div class="content-admin">
            <div class="row">
                @foreach($wisata as $data)
                <div class="col-md-3 col-sm-6">
                    <a href="/admin/wisata/{{$data->id}}/edit">
                        <div class="wisata-card" style="background-image: url({{asset('assets/images/wisata')}}/{{ $data->background }})">
                            <div class="wisata-card-desc">
                                <h5>{{ $data->nama }}</h5>
                                <p>{{ $data->alamat }}</p>
                                <a style="float: right;" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Tempat Wisata ?')" href="/admin/wisata/{{ $data->id }}">
                                    <svg style="fill: #f8ba10!important" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
                                </a>
                            </div>
                        </div>
                    </a>

                </div>
                @endforeach
            </div>

            <ul style="padding-bottom:50px" class="pagination justify-content-center">{!! $wisata->appends(request()->all())->links() !!}</ul>
        </div>
    </div>
    <!-- End of Wisata Content -->
@endsection
