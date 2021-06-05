@extends('layouts.f_p_layouts')
@section('tabel')
<div class="row">
    @foreach ($data_fixer as $item)
        <div class="col-sm-3 pt-2">
            <div class="card">
            <img class="card-img-top" src="https://dummyimage.com/600x400/000/fff&text=Posterjasa" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Fix Your Phone Here</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.l</p>
                <a href="/payments/{{$item->id}}"class="btn btn-primary">Pesan Sekarang</a>
            </div>
            </div>
        </div>
    @endforeach
</div>       
@endsection