<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- CSS sendiri -->
    <link rel="stylesheet" href="admin_style.css">
    <title>Daftar User</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
        <div class="container-fluid">
            <h1><a class="navbar-brand text-white" href="#">Selamat Datang {{Auth::user()->name}} | FIX<span class="text-warning">IT</span></a></h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <form method="POST" action="{{route('logout')}}" class="d-flex">
                @csrf
                <i onclick="event.preventDefault();this.closest('form').submit();" class="fas fa-sign-out-alt text-white m-2" style="cursor: pointer;" data-toggle="tooltip" title="Log Out" href="route('logout')">{{ __('Log Out') }}</i>
            </form>
        </div>
    </nav>

    <div class="row no-gutters mt-5">
        <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
            <ul class="nav flex-column ml-3 mb-5">
                <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="#"><i class="fas fa-home text-warning"></i> Halaman Utama</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" href="/riwayat/{{Auth::user()->id}}"><i class="fas fa-user text-warning"></i>Riwayat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/profile"><i class="fas fa-user-cog text-warning"></i>Profile</a>
                </li>
                @if (Auth::user()->hasRole('fixer'))
                    <li class="nav-item">
                        <a class="nav-link active text-white" href="/pesanan"><i class="fas fa-user text-warning"></i>Pesanan</a>
                    </li>
                @endif
            </ul>
        </div>
        <div class="col-md-10 p-5 pt-5">
            {{-- <h2><i class="fas fa-user"></i>Profile</h2><hr> --}}
            @yield('tabel')
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>