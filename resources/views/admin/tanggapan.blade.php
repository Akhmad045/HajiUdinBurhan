@extends('LayoutUtamaAdmin')

@section('isi_halaman')
    <table class="table" style="margin-top: 50px">
        <thead class="table-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIK</th>
                <th scope="col">Tanggal Pengaduan</th>
                <th scope="col">Isi Laporan</th>
                <th scope="col">Aksi</th>
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
@endsection
