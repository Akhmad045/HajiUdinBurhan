@extends('LayoutUtamaAdmin')

@section('isi_halaman')
<div class="container">
  <div class="card shadow">
      <div class="card-header text-bg-white">
          <h4 class="h4 card-title">Data Laporan Masyarakat</h4>
          <div class="card-body">
              <table id="tb_validasi" class="table table-hover table-bordered">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Nik</th>
                          <th>Tanggal Pengaduan</th>
                          <th>Isi Laporan</th>
                          <th>Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($data as $item)
                          <tr>
                              <td>{{ $item->id_pengaduan }}</td>
                              <td>{{ $item->nik }}</td>
                              <td>{{ $item->tanggal_pengaduan }}</td>
                              <td>{{ $item->isi_laporan }}</td>
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
        $('#tb_validasi').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'excel', 'pdf'
            ]
        });
    </script>
@endsection
