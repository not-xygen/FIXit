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
    <title>Halaman Utama</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
        <div class="container-fluid">
            <h1><a class="navbar-brand text-white" href="#">Selamat Datang ADMIN | FIX<span class="text-warning">it</span></a></h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <form class="d-flex">
                
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light me-2" type="submit"><i class="fas fa-search"></i></button>
                <i class="fas fa-envelope text-white m-2" style="cursor: pointer;" data-toggle="tooltip" title="Inbox"></i>
                <i class="fas fa-bell text-white m-2" style="cursor: pointer;" data-toggle="tooltip" title="Notification"></i>
                <i class="fas fa-sign-out-alt text-white m-2" style="cursor: pointer;" data-toggle="tooltip" title="Log Out"></i>
            </form>
        </div>
    </nav>

    <div class="row no-gutters mt-5 " style="height: 100%">
        <div class="col-md-2 bg-dark mt-2 pr-3 pt-4" style="height: 100%">
            <ul class="nav flex-column ml-3 mb-5">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="halaman_utama.html"><i class="fas fa-home text-warning"></i> Halaman Utama</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/daftaruser"><i class="fas fa-user text-warning"></i> Daftar User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="daftar_fixer.html"><i class="fas fa-user-cog text-warning"></i> Daftar Fixer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="daftar_jasa.html"><i class="fas fa-toolbox text-warning"></i> Daftar Jasa</a>
                </li>
            </ul>
        </div>
        <div class="col-md-10 p-5 pt-5">
            <h2><i class="fas fa-home"></i> HALAMAN UTAMA </h2><hr>

            <div class="row text-white">
                <div class="card bg-dark me-5" style="width: 20rem;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <h5 class="card-title">JUMLAH USER</h5>
                        <div class="display-4 text-warning">
                            {{$count['pelanggan']}}
                        </div>
                        <a  style="text-decoration: none;" href="daftar_user.html"><p class="card-text text-warning">Lihat Detail <i class="fas fa-angle-double-right"></i></p></a>
                    </div>
                </div>

                <div class="card bg-dark me-5" style="width: 20rem;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-user-cog"></i>
                        </div>
                        <h5 class="card-title">JUMLAH FIXER</h5>
                        <div class="display-4 text-warning">
                            {{$count['fixer']}}
                        </div>
                        <a  style="text-decoration: none;" href="daftar_fixer.html"><p class="card-text text-warning">Lihat Detail <i class="fas fa-angle-double-right"></i></p></a>
                    </div>
                </div>

                <div class="card bg-dark" style="width: 20rem;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-toolbox"></i>
                        </div>
                        <h5 class="card-title">JUMLAH JASA</h5>
                        <div class="display-4 text-warning">
                            27
                        </div>
                        <a  style="text-decoration: none;" href="daftar_jasa.html"><p class="card-text text-warning">Lihat Detail <i class="fas fa-angle-double-right"></i></p></a>
                    </div>
                </div>


            </div>
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