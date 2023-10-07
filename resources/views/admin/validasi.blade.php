<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Validasi</title> 
    <style>
        .nav-item:hover{
            background-color: white;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="dashboard">HOME</a>
            </li>
            <li class="nav-item">
          
              <a class="nav-link active" aria-current="page" href="tanggapan">TANGGAPAN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="validasi">VALIDASI</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="masyarakat/dashboard">LOGOUT</a>
            </li>
  
          </ul>
        </div>
      </div>
    </nav>
    <table class="table" style="margin-top: 50px">
        <thead class="table-light">
          <tr>
            <th scope="col">No</th>
            <th scope="col">NIK</th>
            <th scope="col">Tanggal Pengaduan</th>
            <th scope="col">Foto</th>
            <th scope="col">Isi Laporan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>3221488</td>
            <td>23 September 2022</td>
            <td>yang ada</td>
            <td>jalan butut</td>
            <td>
                <button type="button" class="btn btn-success">Terima</button>
                <button type="button" class="btn btn-danger">Tolak</button>
            </td>
          </tr>
          
        </tbody>
      </table>
      
</body>
</html>