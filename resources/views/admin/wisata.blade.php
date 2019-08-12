<form role="form" action ="/wisata" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <div class="input-group input-group-alternative mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
      </div>
      <input name="nama" class="form-control" placeholder="nama" type="text">
    </div>
  </div>
  <div class="form-group">
    <div class="input-group input-group-alternative">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
      </div>
      <input name="deskripsi" class="form-control" placeholder="deskripsi" type="text">
    </div>
  </div>
  <div class="form-group">
    <div class="input-group input-group-alternative">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
      </div>
      <input name="alamat" class="form-control" placeholder="alamat" type="text">
    </div>
  </div>
  <div class="form-group">
    <div class="input-group input-group-alternative">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
      </div>
      <input name="background" class="form-control" placeholder="background" type="file">
    </div>
  </div>
  <div class="text-center">
    <button type="submit" class="btn btn-primary my-4">Tambah Data</button>
  </div>
</form>

<br><br>

<div class="table-responsive">
        <!-- Projects table -->
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Letak Barang</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($wisata as $data)
                <tr>
                    <th scope="row">{{ $counter++ }}</th>
                    <td>
                      @if ($data->background)
                        <img src="{{asset('images')}}/{{ $data->background}}" width="100px"/>
                      @else
                      Tidak Ada Gambar
                      @endif
                    </td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->deskripsi }}</td>
                    <td>{{ $data->alamat }}</td>
                    <td>
                      <a class="btn btn-danger" href="/wisata/{{$data->id}}/delete">Delete</i></a>
                    </td>
                </tr>
              @endforeach
            </tbody>
        </table>
        <center>
                  {!! $wisata->appends(request()->all())->links() !!}
              </center>
    </div>
