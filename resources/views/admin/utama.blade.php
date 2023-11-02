@extends('LayoutUtamaAdmin')

@section('isi_halaman')
 <!-- Jumbotron Header -->
 <div class="jumbotron">
  <h1>Selamat Datang di Layanan Pengaduan</h1>
  <p>Laporkan masalah Anda dan kami akan membantu Anda menyelesaikannya.</p>
  <a class="btn btn-primary btn-lg" href="validasi" role="button">Lihat Laporan</a>
</div>

<!-- Fitur Layanan -->
<div id="features" class="features">
  <div class="container">
      <div class="row">
          <div class="col-md-4">
              <h3>Fitur Validasi</h3>
              <p>Anda dapat menggunakan fitur tersebut untuk validasi laporan masyarakat.</p>
          </div>
          <div class="col-md-4">
              <h3>Fitur Tanggapan</h3>
              <p>Fitur ini digunakan untuk menanggapi seluruh laporan yang sudah di validasi.</p>
          </div>
          <div class="col-md-4">
              <h3>Fitur </h3>
              <p></p>
          </div>
      </div>
  </div>
</div>
<div class="container">
    <div class="card shadow">
        <div class="card-header text-bg-white">
            <h4 class="h4 card-title">Data Laporan Masyarakat</h4>
            <div class="card-body">
                <table id="tanggapan" class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nik</th>
                            <th>Tanggal Pengaduan</th>
                            <th>Isi Laporan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tanggapi as $item)
                            <tr>
                                <td>{{ $item->id_pengaduan }}</td>
                                <td>{{ $item->nik }}</td>
                                <td>{{ $item->tanggal_pengaduan }}</td>
                                <td>{{ $item->isi_laporan }}</td>
                                <td>
                                    @switch($item->status)
                                        @case('proses')
                                            proses
                                            @break
                                        @case('selesai')
                                            selesai
                                            @break
                                        @default
                                            tertunda
                                    @endswitch
                                </td>
                                <td></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="/datatable/datatables.min.js"></script>
<script>
    $('#tanggapan').DataTable({
       
    });
</script>

<!-- Tautan ke Bootstrap JS dan Popper.js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection