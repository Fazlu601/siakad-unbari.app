<div id="topbar" class="mx-auto d-flex justify-content-between shadow-lg px-4 rounded mt-3" style="width: 95%">
    <h5 class="text-success fw-bold text-uppercase my-auto flex-fill">Universitas Batanghari Jambi</h5>
    <div class="menu-profile" style="height: 60px">
        <div class="profile-nav d-flex h-100 p-2">
            <div class="text-profile text-end me-2">
                @if ($session==='mahasiswa')
                    <p>{{ Auth::guard('mahasiswas')->user()->nama_lengkap }} <br> <small>Baru</small></p>
                    @elseif($session==='admin')
                    <p>Admin</p>
                @endif
            </div>
            <img src="{{ isset(Auth::guard('mahasiswas')->user()->image) ? asset('storage/' . Auth::guard('mahasiswas')->user()->image) : asset('image/default.jpg') }}" alt="profile" class="rounded-circle shadow-lg" style="width: 40px; height: 40px" >
        </div>
    </div>
</div>
