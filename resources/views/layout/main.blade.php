<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>App</title>
</head>
<body>
   <div class="container-fluit d-flex justify-content-between">
        @include('components.sidebar.index')
        <section class="flex-grow-1 position-relative" style="height: 200vh">
            @include('components.header.user.index')
            <main class="container mt-5 p-0 m-0">
                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @elseif(session()->has('fail'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('fail') }}
                    </div>
                @endif
                @yield('dashboard-main')
            </main>

        </section>
   </div>
</body>
</html>