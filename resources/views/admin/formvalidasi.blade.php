@extends('LayoutUtamaAdmin')

@section('isi_halaman')
<form action="" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nik" class="form-label">NIK</label>
        <input type="text" class="form-control" name="nik" id="nik" placeholder="NIK">
        @error('nik')
            <div class="form-text">
                {{ $message }}
            </div>
        @enderror
        <div class="mb-3">
            <label for="tanggal_pengaduan" class="form-label">Tanggal Pengaduan</label>
            <input type="date" class="form-control" name="tanggal_pengaduan" id="nama"
                placeholder="tanggal_pengaduan">
            @error('tanggal_pengaduan')
                <div class="form-text">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Foto</label>
            <input class="form-control" type="file" name="foto" id="formFile">
            @error('foto')
                <div class="form-text">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="isi_laporan" class="form-label">Isi Laporan</label>
            <textarea class="form-control" name="isi_laporan" id="isi_laporan" rows="3"></textarea>
            @error('isi_laporan')
                <div class="form-text">
                    {{ $message }}
                </div>
            @enderror
        </div>
        
        <button class="btn form-control btn-primary mb-2">Lapor</button>
        <button class="btn form-control btn-outline-success mb-2" type="reset">Batal</button>
</form>
@endsection