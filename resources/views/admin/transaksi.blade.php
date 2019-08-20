@extends('admin.template.navigation')

@section('konten')
<!-- Admin Wisata Content -->

    <div class="main-admin">
        <div class="header-admin">
            <h4>List Request Paket</h4>
        </div>
        <div class="content-admin">
            <div class="row">
                @foreach($transaksi as $data)
                <div class="col-md-12 col-sm-12">
                      <div class="card">
                       <h5>{{ $data->pakets->nama }}</h5>
                     </div>
                </div>
                @endforeach
            </div>
            <!-- <ul style="padding-bottom:50px" class="pagination justify-content-center">{!! $transaksi->appends(request()->all())->links() !!}</ul>
        </div> -->
    </div>
    <!-- End of Wisata Content -->
@endsection
