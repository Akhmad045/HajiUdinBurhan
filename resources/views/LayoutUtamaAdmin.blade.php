<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link href="/datatable/datatables.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Dashboard</title>
    <style>
        .jumbotron {
            background-color: #007bff;
            color: white;
            padding: 100px 25px;
            text-align: center;
        }

        .features {
            padding: 50px 0;
            background-color: white;
        }
    </style>
</head>
<div class="b-example-divider"></div>


<nav class="py-2 bg-body-tertiary border-bottom">
    <div class="container d-flex flex-wrap">
        <ul class="nav me-auto">
            <li class="nav-item"><a href="utama" class="nav-link link-body-emphasis px-2 active"
                    aria-current="page">Home</a></li>
            <li class="nav-item"><a href="validasi" class="nav-link link-body-emphasis px-2">Validasi</a></li>
            <li class="nav-item"><a href="tanggapan" class="nav-link link-body-emphasis px-2">Tanggapan</a></li>
            <li class="nav-item"><a href="tanggapan" class="nav-link link-body-emphasis px-2">Data Petugas</a></li>

        </ul>
        <ul class="nav">
            <li class="nav-item"><a href="/admin/login" class="nav-link link-body-emphasis px-2">Logout</a></li>
        </ul>
    </div>
</nav>

@yield('isi_halaman')
</body>

</html>
@yield('js')
