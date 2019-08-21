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

        <div class="content-admin">
            <div class="row">
                @foreach($wisata as $data)
                <div class="col-md-3 col-sm-6">
                    <a href="/admin/wisata/{{$data->id}}/edit">
                        <div class="wisata-card" style="background-image: url({{asset('images')}}/{{ $data->background }})">
                            <div class="wisata-card-desc">
                                <h5>{{ $data->nama }}</h5>
                                <p>{{ $data->alamat }}</p>
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
