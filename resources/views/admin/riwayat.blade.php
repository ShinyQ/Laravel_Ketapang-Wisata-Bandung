@extends('admin.template.navigation')

@section('konten')
<style>
  .gambar:hover {
    transform: scale(3.0);
  }
</style>

<div class="main-admin">
    <div class="header-admin">
        <h4>Riwayat Transaksi</h4>
    </div>

    <div class="content-admin">
          <table width="100%" class="table table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Paket</th>
              <th>Nama User</th>
              <th>Nama Admin</th>
              <th>Tanggal</th>
              <th>Harga</th>
              <th>Bukti</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>

            @foreach($riwayat as $data)
            <tr>
              <td>{{ $no++ }}.</td>
              <td>{{ $data->pakets->nama }}</td>
              <td>{{ $data->users->name }}</td>
              <td>
                @if($data->admin)
                {{ $data->admin }}
                @else
                Belum Dikonfirmasi
                @endif
              </td>
              <td>{{ date('D, d F Y', strtotime($data->tanggal)) }}</td>
              <td>Rp{{ number_format($data->harga ,2,',','.') }}</td>
              <td>
                @if($data->bukti)
                <img class="gambar" src="{{asset('assets/images/bukti')}}/{{ $data->bukti }}" width="120px">
                @else
                Bulum Ada Bukti
                @endif
              </td>
              <td>
                @if($data->status == "Menunggu Konfirmasi")
                <font color="orange"><strong>{{ $data->status }}</strong></font>
                @elseif($data->status == "Jadwal Wisata Diterima")
                <font color="green"><strong>{{ $data->status }}</strong></font>
                @else
                <font color="red"><strong>{{ $data->status }}</strong></font>
                @endif
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
</div>
@endsection
