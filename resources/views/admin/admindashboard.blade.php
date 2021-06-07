@extends('layouts.f_p_layouts')
@section('title')
    Dashboard
@endsection
@section('a_dashboard')

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
            <a  style="text-decoration: none;" href="/daftaruser"><p class="card-text text-warning">Lihat Detail <i class="fas fa-angle-double-right"></i></p></a>
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
            <a  style="text-decoration: none;" href="/daftarfixer"><p class="card-text text-warning">Lihat Detail <i class="fas fa-angle-double-right"></i></p></a>
        </div>
    </div>
    <div class="card bg-dark me-5" style="width: 20rem;">
        <div class="card-body">
            <div class="card-body-icon">
                <i class="fa fa-credit-card" aria-hidden="true"></i>
            </div>
            <h5 class="card-title">JUMLAH Pesanan</h5>
            <div class="display-4 text-warning">
                {{$count['pesanan']}}
            </div>
            <a  style="text-decoration: none;" href="/pesanan"><p class="card-text text-warning">Lihat Detail <i class="fas fa-angle-double-right"></i></p></a>
        </div>
    </div>
</div>
</div>

@endsection