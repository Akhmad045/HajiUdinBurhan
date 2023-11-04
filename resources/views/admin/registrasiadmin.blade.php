@extends('LayoutUtamaAdmin')

@section('isi_halaman')
    <style>
        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }

        .card-registration .select-arrow {
            top: 13px;
        }
    </style>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">DAFTARKAN PETUGAS</h3>
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

                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <label class="form-label" for="firstName">Nama Lengkap</label>

                                            <input type="text" id="firstName" name="nama_petugas"
                                                class="form-control form-control-lg" />
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <label class="form-label" for="lastName">Username</label>
                                            <input type="text" id="lastName" name="username"
                                                class="form-control form-control-lg" />

                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 d-flex align-items-center">

                                        <div class="form-outline datepicker w-100">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control form-control-lg" name="password"
                                                id="birthdayDate" />

                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <label class="form-label" for="lastName">No Tlp</label>
                                            <input type="text" id="telp" name="telp"
                                                class="form-control form-control-lg" />

                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">

                                        <select class="form-select" id="validationCustom04" name="level" required>
                                            <option value="admin">Admin</option>
                                            <option value="petugas">Petugas</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mt-4 pt-2">
                                    <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <div id="main" class="d-flex align-items-center vh-100">
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
</div> --}}
@endsection
