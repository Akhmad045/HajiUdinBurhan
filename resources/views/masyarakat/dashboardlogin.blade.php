@extends('LayoutUtamaLogin')
@section('isi_halaman')
    <!-- Jumbotron Header -->
    <div class="jumbotron">
        <h1>Selamat Datang di Layanan Pengaduan</h1>
        <p>Laporkan masalah Anda dan kami akan membantu Anda menyelesaikannya.</p>
        <a class="btn btn-primary btn-lg" href="laporan" role="button">Buat Laporan Anda!</a>
    </div>

    <!-- Fitur Layanan -->
    <div id="features" class="features">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>Fitur 1</h3>
                    <p>Deskripsi fitur 1. Anda dapat menggunakan fitur ini untuk melakukan hal-hal hebat.</p>
                </div>
                <div class="col-md-4">
                    <h3>Fitur 2</h3>
                    <p>Deskripsi fitur 2. Ini membantu Anda dengan masalah-masalah spesifik yang Anda hadapi.</p>
                </div>
                <div class="col-md-4">
                    <h3>Fitur 3</h3>
                    <p>Deskripsi fitur 3. Layanan ini memastikan masalah Anda mendapat perhatian yang pantas.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Tautan ke Bootstrap JS dan Popper.js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection