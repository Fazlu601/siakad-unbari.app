<nav style="width: 260px;min-height: 100vh" class="bg-success shadow-lg pe-2">
    <div class="d-flex p-3 mb-3">
        <img src="{{ asset('image/unbari.png') }}" width="60" alt="logo unbari">
        <h5 class="ms-3 my-auto text-light font-bold ">UNBARI</h5>
    </div>
    <ul class="nav-menu">
        <li class="nav-list list-group mb-3"><a href="#" class="text-decoration-none ps-3 py-2 rounded text-light font-light">
            Dashboard
        </a></li>
        <li class="nav-list list-group mb-3"><a href="#" class="text-decoration-none ps-3 py-2 rounded text-light font-light">
            Profil
        </a></li>
        @if ($session==="mahasiswa")
            <li class="nav-list list-group mb-3"><a href="#" class="text-decoration-none ps-3 py-2 rounded text-light font-light">
                Info Akademik    
            </a></li>
            <li class="nav-list list-group mb-3"><a href="#" class="text-decoration-none ps-3 py-2 rounded text-light font-light">
                KHS    
            </a></li>
            <li class="nav-list list-group mb-3"><a href="#" class="text-decoration-none ps-3 py-2 rounded text-light font-light">
                Trankrip    
            </a></li>
        @endif
        @if ($session==="admin")
            <li class="nav-list list-group mb-3"><a href="/mahasiswa/data" class="text-decoration-none ps-3 py-2 rounded text-light font-light">
                Data Mahasiswa 
            </a></li>
        @endif
        <li class="nav-list list-group mb-3"><a href="#" class="text-decoration-none ps-3 py-2 rounded text-light font-light">
            Data Dosen  
        </a></li>
        <li class="nav-list list-group mb-3">
            <form action='/{{ $session }}/logout' class="m-0 p-0" method='POST'>
                @csrf
                @method('delete')
                    <button type="submit" onclick="return confirm('Yakin ingin keluar?')" class="ps-3 py-2 rounded text-light font-light bg-transparent border-0">Logout</button>
            </form>
        </a></li>
    </ul>
</nav>