@extends('layout.main')

@section('dashboard-main')
    <section id="profile" class="shadow-lg rounded mx-auto p-3" style="width:95%">
        <h3 class="text-success">+ Tambah Data Mahasiswa</h3>
        <form action="/mahasiswa/data" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row p-3">
                <div class="form-group mb-3">
                    <label for="nameID">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" id="nameID" class="form-control">
                </div>
                <div class="form-group mb-4">
                    <label for="nimID">Nim</label>
                    <input type="text" pattern="[0-9]+" name="nim" id="nameID" class="form-control">
                </div>
                <div class="form-group mb-4">
                    <label for="jenis_kelaminID">Jenis Kelamin </label>
                    <select name="jenis_kelamin" class="form-control" id="">
                            <option value="laki-laki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group mb-4">
                    <label for="waktu_kuliahID">Waktu Kuliah </label>
                    <select name="waktu_kuliah" class="form-control" id="">
                            <option value="pagi">Pagi</option>
                            <option value="malam">Malam</option>
                    </select>
                </div>
                <div class="form-group mb-4">
                    <label for="prodiID">Prodi </label>
                    <select name="prodi_id" class="form-control" id="">
                        @foreach ($data as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-4">
                    <label for="telpID">Tahun Angkatan </label>
                    <input type="number" name="angkatan" min="1900" max="2099" class="form-control" step="1" value="2023" />
                </div>
                <div class="d-flex justify-content-between">
                    <div class="form-group mb-3 col-5">
                        <label for="passwordID">PASSWORD</label>
                        <input type="password" name="password" id="passwordID" class="form-control">
                    </div>
                    <div class="form-group mb-3 col-5">
                        <label for="passwordconfirmID">KONFIRMASI PASSWORD</label>
                        <input type="password" name="password_confirm" id="passwordconfirmID" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success text-light">Simpan</button>
                </div>
            </div>
        </form>
    </section>
@endsection