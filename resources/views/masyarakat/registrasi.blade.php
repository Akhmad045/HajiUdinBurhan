<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <style>
        
        body{
            background:cadetblue;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="dashboard">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="registrasi">DAFTAR</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="login">LOGIN</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
        <div id="main" class="d-flex align-items-center vh-100">
                    <div class="container">
                            <div class="card shadow m-auto" style="width: 400px">
                                <div class="card-body">
                                    <h4 class="h4">Daftarkan diri anda</h4>
                                    @if (session('pesan'))
                                    <div class="alert alert-success" role="alert">
                                        {{session('pesan')}}
                                      </div>
                                    @endif
                                    @if ($errors->any())
                                    <div class="alert alert-success" role="alert">
                                        Anda gagal registrasi
                                      </div>
                                    @endif
                                        <form action="{{url('data')}}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="nik" class="form-label">NIK</label>
                                                <input type="text" class="form-control" name="nik" id="nik" placeholder="NIK">
                                                @error('nik')
                                                    <div class="form-text">
                                                        {{$message}}
                                                    </div>
                                                @enderror
                                                <div class="mb-3">    
                                                <label for="nama" class="form-label">Nama</label>
                                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap">
                                                @error('nama')
                                                    <div class="form-text">
                                                        {{$message}}
                                                    </div>
                                                @enderror
                                                </div>
                                                <div class="mb-3">    
                                                <label for="username" class="form-label">Username</label>
                                                <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                                                @error('username')
                                                    <div class="form-text">
                                                        {{$message}}
                                                    </div>
                                                @enderror
                                                </div>
                                                <div class="mb-3">    
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                                @error('password')
                                                    <div class="form-text">
                                                        {{$message}}
                                                    </div>
                                                @enderror
                                                </div>
                                                <div class="mb-3">    
                                                <label for="telpon" class="form-label">No Tlp</label>
                                                <input type="number" class="form-control" name="telpon" id="telpon" placeholder="No Tlp">    
                                                @error('telpon')
                                                    <div class="form-text">
                                                        {{$message}}
                                                    </div>
                                                @enderror
                                            </div>
                                                <button class="btn form-control btn-primary mb-2">Registrasi</button>
                                                <button class="btn form-control btn-outline-success mb-2" type="reset">Batal</button>
                                        </form>    
                                </div>    
                            </div>    
                    </div>   
        </div>    
</body>
</html>