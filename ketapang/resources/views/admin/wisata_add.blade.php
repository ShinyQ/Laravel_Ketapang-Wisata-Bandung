@extends('admin.template.navigation')

@section('konten')
<!-- Admin Wisata Content -->
    <div class="main-admin">
        <div class="header-admin">
            <h4>
                <a href="/admin/wisata">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0z" fill="none" />
                        <path d="M21 11H6.83l3.58-3.59L9 6l-6 6 6 6 1.41-1.41L6.83 13H21z" /></svg>
                </a>
                Tambah Wisata
            </h4>
        </div>
        <div class="content-admin content-bg">
            <div class="container">
                <form role="form" action ="/admin/wisata" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group row">
                    @if (Session::has('message'))
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                          {{ Session::get('message') }}
                      </div>
                    </div>
                  @endif
                  @if (Session::has('message_gagal'))
                    <div class="col-sm-12">
                      <div class="alert alert-danger">
                          {{ Session::get('message_gagal') }}
                      </div>
                    </div>
                  @endif
                  @if ($errors->any())
                  <div class="col-sm-12">
                    <div class="alert alert-danger">
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </div>
                  </div>
                  @endif
                  </div>
                    <div class="form-group row">
                        <label for="inputNamaWisata" class="col-sm-2 col-form-label">Nama Wisata</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama" class="form-control" id="inputNamaWisata"
                                placeholder="E.g. Farmhouse Lembang">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputAlamatWisata" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea name="alamat" class="form-control" id="inputAlamatWisata" rows="2"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputJamBuka" class="col-sm-2 col-form-label">Jam Buka</label>
                        <div class="col-sm-10">
                            <input name="waktu" type="text" class="form-control" id="inputJamBuka"
                                placeholder="E.g. Setiap Hari, 08.00-21.00">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputTanggalDidirikan" class="col-sm-2 col-form-label">Tanggal Didirikan</label>
                        <div class="col-sm-10">
                            <input name="tanggal_dibangun" type="date" class="form-control" id="inputTanggalDidirikan"
                                placeholder="E.g. Desember 2015">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputNoTelp" class="col-sm-2 col-form-label">No Telepon</label>
                        <div class="col-sm-10">
                            <input name="telepon" type="text" class="form-control" id="inputNoTelp" placeholder="E.g. 082239473609">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputAbout" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea name="deskripsi" class="form-control" id="inputAbout" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputNoTelp" class="col-sm-2 col-form-label">Gambar Cover</label>
                        <div class="col-sm-10">
                            <div class="custom-file">
                                <input name="background" type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Pilih file</label>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary btn-submit-wisata">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
