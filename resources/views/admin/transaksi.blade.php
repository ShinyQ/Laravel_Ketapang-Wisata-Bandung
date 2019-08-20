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
    </style>
    <div class="main-admin">
        <div class="header-admin">
            <h4>List Request Paket</h4>
        </div>
        <div class="content-admin">
            <div class="row">
                @foreach($transaksi as $data)
                <div class="col-md-4 col-sm-12">
                  <div class="card-body">
                       <h5><strong>{{ $data->pakets->nama }}</strong></h5><br>
                       <p>Nama Pelanggan : {{ $data->users->name }} </p>
                       <?php
                          $date = $data->tanggal;
                        ?>
                       <p>Tanggal Wisata : {{ date('D, d F Y', strtotime($date)) }} </p>
                       <p>Bukti Bayar : <br> <img style="max-height: 250px" src="{{asset('assets/images/bukti')}}/{{ $data->bukti }}" width="100%"></P>
                       <div class="justify-content-center">
                         <a style="width: 49%" href="/admin/transaksi/terima/{{ $data->id }}" class="btn btn-success">Setujui</a>
                         <a style="width: 49%" href="/admin/transaksi/tolak/{{ $data->id }}" class="btn btn-danger">Tolak</a>
                       </div>
                  </div>
                </div>
                @endforeach
            </div>
             <ul style="padding-bottom:50px" class="pagination justify-content-center">{!! $transaksi->appends(request()->all())->links() !!}</ul>
      </div>
    </div>
    <!-- End of Wisata Content -->
@endsection
