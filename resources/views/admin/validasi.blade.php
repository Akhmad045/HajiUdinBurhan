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
                                    <td>
                                        <div class="d-flex gap-2 mb-3">
                                            <button type="button" class="btn btn-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                </svg></button>
                                                <button type="button" class="btn btn-outline-danger">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-dash-circle" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                    <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                                                </svg>
                                                
                                            </button>
                                        </div>
                                    </td>
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
