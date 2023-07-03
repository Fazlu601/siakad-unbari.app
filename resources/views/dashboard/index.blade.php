@extends('layout.main')

@section('dashboard-main')
    <section id="profile" class="shadow-lg rounded mx-auto p-3" style="width:95%">
        <h3 class="text-grey"><> UPDATE PROFIL</h3>
        <form action="/mahasiswa/update/{{ Auth::guard('mahasiswas')->user()->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row d-flex justify-content-between p-3">
                <div class="img-profile col-2">
                    <img src="{{ isset(Auth::guard('mahasiswas')->user()->image) ? asset('storage/' . Auth::guard('mahasiswas')->user()->image) : asset('image/default.jpg') }}" alt="profile" class="img-fluid rounded">
                </div>
                <div class="form-group-wrapper col-9">
                        <div class="form-group mb-3">
                            <label for="nameID">Nama Lengkap</label>
                            <input type="text" required value="{{ Auth::guard('mahasiswas')->user()->nama_lengkap }}" disabled id="nameID" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="imageID">Foto Bebas/Sopan Terbaru (Format: jpg, jpeg, png. Ukuran Maks 5MB)</label>
                            <input type="file" name="image" id="imageID" class="form-control">
                        </div>
                </div>
            </div>
            <div class="row p-3">
                <div class="form-group mb-4">
                    <label for="emailID">Email</label>
                    <input type="email" name="email" required value="{{ Auth::guard('mahasiswas')->user()->email }}"  id="nameID" class="form-control">
                </div>
                <div class="form-group mb-4">
                    <label for="ktpID">NOMOR KTP (Jika belum Memiliki KTP, Lihat NIK di Kartu Keluarga)</label>
                    <input type="text" name="nik" required pattern="[0-9]+" value="{{ isset(Auth::guard('mahasiswas')->user()->identitas_mahasiswa->nik) ? Auth::guard('mahasiswas')->user()->identitas_mahasiswa->nik : '' }}" id="nameID" class="form-control">
                </div>
                <div class="form-group mb-4">
                    <label for="nisnID">NISN (Nomor Induk Siswa Nasional)</label>
                    <input type="text" name="nisn" required pattern="[0-9]+"  value="{{  isset(Auth::guard('mahasiswas')->user()->identitas_mahasiswa->nisn) ? Auth::guard('mahasiswas')->user()->identitas_mahasiswa->nisn : '' }}" id="nameID" class="form-control">
                </div>
                <div class="form-group mb-4">
                    <label for="telpID">NOMOR HANDPHONE / WHATSAPP </label>
                    <input type="tel" name="no_telp" required pattern="[0-9]+"  value="{{ Auth::guard('mahasiswas')->user()->no_telp }}" id="nameID" class="form-control">
                </div>
                {{-- <div class="form-group mb-4">
                    <label for="addressID">ALAMAT</label>
                    <textarea name="address" id="addressID" cols="1" class="form-control" rows="3">Jl.marsda Surya Dharma Kenali Asam Bawah Km.10 Rt.32 No.66 RT.32 RW.- Kel. Kenali Asam Bawah Kec. Kota Baru Kab/Kota. Jambi Prov. Jambi</textarea>
                </div> --}}
                <div class="d-flex justify-content-between">
                    <div class="form-group mb-3 col-5">
                        <label for="passwordID">PASSWORD BARU (kosongkan jika tidak ingin mengganti password)</label>
                        <input type="password" name="password" id="passwordID" class="form-control">
                    </div>
                    <div class="form-group mb-3 col-5">
                        <label for="passwordconfirmID">KONFIRMASI PASSWORD BARU</label>
                        <input type="password" name="password_confirm" id="passwordconfirmID" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success text-light">Update</button>
                </div>
            </div>
        </form>
    </section>
@endsection