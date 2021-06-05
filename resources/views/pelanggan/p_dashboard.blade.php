@extends('layouts.f_p_layouts')
@section('tabel')
@section('title')
    Dashboard
@endsection
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <img class="card-img-top" src="https://dummyimage.com/600x400/000/fff&text=Phone" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Fix Your Phone Here</h5>
        <p class="card-text">Service Smartphone anda disini yang akan di bantu dengan tenaga kerja yang profesional</p>
        <a href="/listjasa" class="btn btn-primary">Cari Sekarang</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <img class="card-img-top" src="https://dummyimage.com/600x400/000/fff&text=Something" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Fix Something ComingSoon</h5>
        <p class="card-text">Service Somthing anda disini yang akan di bantu dengan tenaga kerja yang profesional</p>
        <a href="#" class="btn btn-primary disabled" >Cari Sekarang</a>
      </div>
    </div>
  </div>
</div>             
@endsection