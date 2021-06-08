@extends('layouts.f_p_layouts')
@section('title')
    Dashboard
@endsection
@section('tabel')
    <div class="card bg-dark me-5" style="width: 20rem;">
        <div class="card-body">
            <div class="card-body-icon">
                <i class="fa fa-credit-card" aria-hidden="true"></i>
            </div>
            <h5 class="card-title text-white" >Pesanan</h5>
            <div class="display-4 text-warning">
            </div>
            <a  style="text-decoration: none;" href="/pesanan/{{Auth::user()->id}}"><p class="card-text text-warning">Lihat Detail <i class="fas fa-angle-double-right"></i></p></a>
        </div>
    </div>
@endsection