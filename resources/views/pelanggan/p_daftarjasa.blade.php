@extends('layouts.f_p_layouts')
@section('tabel')
<div class="row">
    @foreach ($data_fixer as $item)
        <div class="col-sm-3 pt-2">
            <div class="card h-100">
                <img class="card-img-top" src="{{url('img/poster/'.$item-> poster )}}" alt="" width="500" height="300" >   
                <div class="card-body">
                <h5 class="card-title">{{$item-> name }} Phone </h5>
                <p class="card-text">{{$item-> desc_fixer }}</p>
                <a href="/payments/{{$item-> id }}"class="btn btn-primary">Pesan Sekarang</a>
            </div>
            </div>
        </div>
    @endforeach
</div>       
@endsection