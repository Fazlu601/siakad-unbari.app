<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Home</title>
</head>
<body class="bg-light">
    @include('components.header.guest.index')

    <div class="container-fluid mt-4">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="card w-100 mb-3">
                    <div class="card-header bg-primary">
                        <h5 class="font-bolder text-light"><span class="fa fa-home fs-3 me-1"></span> SIAKAD UNBARI</h5>
                    </div>
                    <div class="card-body p-3">
                        <ul class="p-0 m-0">
                            <li class="list-group fs-5 mb-3">
                                <a class="text-decoration-none text-dark" href="#">
                                    <span class="fa fa-calendar"></span>
                                    Jadwal Kontrak Kuliah
                                </a>
                            </li>
                            <li class="list-group fs-5 mb-3">
                                <a class="text-decoration-none text-dark" href="#">
                                    <span class="fa fa-dashboard"></span>
                                    Data Dashboard
                                </a>
                            </li>
                            <li class="list-group fs-5 mb-3">
                                <a class="text-decoration-none text-dark" href="/dosen/login">
                                    <span class="fa fa-user"></span>
                                    Login Dosen
                                </a>
                            </li>
                            <li class="list-group fs-5">
                                <a class="text-decoration-none text-dark" href="/mahasiswa/login">
                                    <span class="fa fa-user"></span>
                                    Login Mahasiswa
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                </div>
                <div class="card w-100">
                    <div class="card-header bg-primary">
                        <h5 class="font-bolder text-light"><span class="fa fa-building-o fs-3 me-1"></span> BAAK UNBARI</h5>
                    </div>
                    <div class="card-body p-3">
                        <p class="fs-5 mb-3">
                            Jika terdapat kendala pada <br> saat mengakses siakad, <br> Hubungi WA berikut.
                        </p>
                        <h3 class="fs-3 text-success">
                            <span class="fa fa-whatsaap"></span>
                             BAAK UNBARI
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="card col-8">
                    <img src="{{ asset('image/images.jpg') }}" class="w-100" alt="">
                </div>
                <footer class="p-3">
                    <p>Copyright © 2023 </p>
                </footer>
            </div>
        </div>
    </div>
</body>
</html>