@extends('admin.template.navigation')

@section('konten')
<!-- Admin Wisata Content -->
    <style>
      .card-body{
        background-color: white;
        border-radius: 10px
      }

      .card-body p{
        margin-top: -5px
      }

      .gambar:hover {
        transform: scale(3.5);
      }
    </style>
    <div class="main-admin">
        <div class="header-admin">
            <h4>List Request Paket</h4>
        </div>
        <div class="content-admin">
            <div class="row">
                @forelse($transaksi as $data)
                <div style="margin-top: 20px" class="col-md-4 col-sm-12">
                  <div class="card-body">
                       <h5><strong>{{ $data->pakets->nama }}</strong></h5><br>
                       <p>Nama Pelanggan : {{ $data->users->name }} </p>
                       <?php
                          $date = $data->tanggal;
                        ?>
                       <p>Tanggal Wisata : {{ date('D, d F Y', strtotime($date)) }} </p>
                       <p>Bukti Bayar : <img class="gambar" src="{{asset('assets/images/bukti')}}/{{ $data->bukti }}" width="100px"></p>
                       <div class="justify-content-center">
                         <a style="width: 49%" href="/admin/transaksi/terima/{{ $data->id }}" class="btn btn-success">Setujui</a>
                         <a style="width: 49%" href="/admin/transaksi/tolak/{{ $data->id }}" class="btn btn-danger">Tolak</a>
                       </div>
                       @empty
                       <div class="col-6">
                        <h5>Tidak Ada Paket Yang harus Di Konfirmasi</h5>
                       </div>
                  </div>
                </div>
                @endforelse
            </div>
             <ul style="padding-top: 40px; padding-bottom:50px" class="pagination justify-content-center">{!! $transaksi->appends(request()->all())->links() !!}</ul>
      </div>
    </div>
    <!-- End of Wisata Content -->
@endsection
