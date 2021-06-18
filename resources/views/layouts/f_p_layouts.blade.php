<!doctype html>
<html lang="en" , style="width: 100%; height: 100%; margin: 0px; padding: 0px; overflow-x: hidden;">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- CSS sendiri -->
    <link rel="stylesheet" href="admin_style.css">
    <title>@yield('title')</title>
</head>
<body style="height: 100%;">
    <div class="container-fluid m-0 p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark sticky-top m-0">
            <div class="container-fluid">
                <h1><a class="navbar-brand text-white" href="#">
                    Selamat Datang
                    @if (Auth::user()->hasRole('admin'))
                        Admin
                    @endif 
                    {{Auth::user()->name}} | FIX
                    <span class="text-warning">IT</span>
                    </a>
                </h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <form method="POST" action="{{route('logout')}}" class="d-flex">
                    @csrf
                    <i onclick="event.preventDefault();this.closest('form').submit();"
                        class="fas fa-sign-out-alt text-white m-2" style="cursor: pointer;" data-toggle="tooltip"
                        title="Log Out" href="route('logout')">{{ __('Log Out') }}</i>
                </form>
            </div>
        </nav>
        <div class="row position-absolute w-100 h-100">
            <div class="col-2 bg-dark p-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <div class="text-center">
                            <img src="{{url('img/foto_profile/'.Auth::user()->foto_profile)}}" alt="" width="100" height="100" >        
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="/dashboard"><i
                                class="fas fa-home text-warning"></i> Halaman Utama</a>
                    </li>
                    @if (Auth::user()->hasRole('pelanggan'))
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="/riwayat/{{Auth::user()->id}}"><i class="fas fa-user text-warning"></i>Riwayat</a>
                        </li>
                    @endif
    
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/profile"><i
                                class="fas fa-user-cog text-warning"></i>Profile</a>
                    </li>
                    @if (Auth::user()->hasRole('fixer'))
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="/pesanan/{{Auth::user()->id}}"><i class="fas fa-user text-warning"></i>Pesanan</a>
                        </li>
                    @endif
                    @if (Auth::user()->hasRole('admin'))
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="/daftaruser"><i class="fas fa-user text-warning"></i> Daftar User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/daftarfixer"><i class="fas fa-user-cog text-warning"></i> Daftar Fixer</a>
                        </li>
                    @endif
                </ul>
            </div>
            @if (Auth::user()->hasRole(['pelanggan','fixer','admin']))
                <div class="col p-5 h-0">
                    @yield('tabel')
                </div>
            @endif

        </div>
    </div>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>