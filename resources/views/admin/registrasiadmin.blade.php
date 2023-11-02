@extends('LayoutUtamaAdmin')

@section('isi_halaman')
<div id="main" class="d-flex align-items-center vh-100">
    <div class="container">
        <div class="card shadow m-auto" style="width: 400px">
            <div class="card-body">
                <h4 class="h4">Daftarkan Petugas</h4>
                @if (session('pesan'))
                    <div class="alert alert-success" role="alert">
                        {{ session('pesan') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-success" role="alert">
                        Anda gagal registrasi
                    </div>
                @endif
                <form action="{{ url('admin/registrasi') }}" method="POST">
                    @csrf
    
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama_petugas" id="nama"
                                placeholder="Nama Lengkap">
                            @error('nama')
                                <div class="form-text">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" id="username"
                                placeholder="Username">
                            @error('username')
                                <div class="form-text">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Password">
                            @error('password')
                                <div class="form-text">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="telpon" class="form-label">No Tlp</label>
                            <input type="number" class="form-control" name="telp" id="telpon"
                                placeholder="No Tlp">
                            @error('telpon')
                                <div class="form-text">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <select class="form-select" id="validationCustom04" name="level" required>
                                <option value="admin">Admin</option>
                                <option value="petugas">Petugas</option>
                              </select>
                              @error('level')
                                      <div class="form-text">
                                          {{$message}}
                                      </div>
                                  @enderror
                        </div>
                        <option value=""></option>
                        <button class="btn form-control btn-primary mb-2">Registrasi</button>
                        <button class="btn form-control btn-outline-success mb-2" type="reset">Batal</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection