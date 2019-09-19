@extends('admin.template.navigation')

@section('konten')
<!-- Admin Wisata Content -->

    <div class="main-admin">
        <div class="header-admin">
            <h4>
              <a href="/admin/wisata/{{ $id_gallery }}/edit">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                      <path d="M0 0h24v24H0z" fill="none" />
                      <path d="M21 11H6.83l3.58-3.59L9 6l-6 6 6 6 1.41-1.41L6.83 13H21z" /></svg>
              </a>
              Gallery Foto</h4>
        </div>
          @if (Session::has('message'))
            <h6 style="margin-top: -20px"><font color="green"> {{ Session::get('message') }}</font></h6><br>
          @endif

        <div class="content-admin">
            <h6> Tambahkan Foto </h6>
            <form action="/admin/wisata/{{ $id_gallery }}/gallery" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-4">
                <div class="custom-file">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                  <input type="file" name="foto" class="custom-file-input" id="customFile">
                </div>
              </div>
              <div class="col-2">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
        </div>

            <br><br>
            <div class="row">
                @foreach($gallery as $data)
                <div class="col-md-3 col-sm-6">
                        <div class="wisata-card" style="padding:20px;background-image: url({{asset('assets/images/galeri')}}/{{ $data->foto }})">
                          <a style="float: right;" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Foto ?')" href="/admin/wisata/{{ $data->id }}/gallery/delete">
                            <svg style="fill: #f8ba10!important" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
                          </a>
                        </div>
                </div>
                @endforeach
            </div>

            <ul style="padding-bottom:50px" class="pagination justify-content-center">{!! $gallery->appends(request()->all())->links() !!}</ul>
        </div>
    </div>
    <!-- End of Wisata Content -->
@endsection
