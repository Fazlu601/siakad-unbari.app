<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body class="bg-light">
   
    @include('components.header.guest.index')
    <div class="container-fluid bg-light mt-4">
        <div class="row">
            <div class="card col-lg-5 shadow-md mx-auto">
                <div class="border-bottom border-warning px-3 my-3">
                    <h4 class="font-bold text-dark text-uppercase">Login Dosen</h4>
                </div>
                <div class="card-body p-3">
                    <form action="">
                        <div class="form-group mb-3">
                            <label for="username" class="text-uppercase">Username</label>
                            <input type="text" name="" id="" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="password" class="text-uppercase">Password</label>
                            <input type="password" name="" id="" class="form-control">
                        </div>
                        <div class="form-group d-flex justify-content-between mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  Ingatkan saya
                                </label>
                            </div>
                            <a href="#" class="text-decoration-none text-primary text-end">
                              Ingatkan saya
                            </a>
                        </div>
                        <div class="form-group my-3">
                            <button type="submit" class="btn px-4 btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>