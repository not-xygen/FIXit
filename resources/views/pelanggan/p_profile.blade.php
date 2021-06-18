@extends('layouts.profile_layouts')
@section('photo')
<div class="text-center">
    <img src="{{url('img/foto_profile/'.Auth::user()->foto_profile)}}" alt="" width="100" height="100" >        
</div>
@endsection
<form action="/profile/update/{{Auth::user()-> id }}" method="POST" enctype="multipart/form-data">
    @csrf
@section('tabel')
    <h2 class="alert bg-dark text-warning text-center mt-3">PROFILE</h2>
    <div class="form-group">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nama</span>
        <input name="nama_pelanggan" type="text" class="form-control" placeholder="Username" aria-label="Username" value="{{ Auth::user()-> name }}" disabled readonly>
        @error('name')
                {{ $message }}
        @enderror
    </div>
    </div>
    <div class="form-group">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Email </span>
        <input name="email" type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" value="{{ Auth::user()-> email }}">
    </div>
    </div>
    <div class="form-group">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Alamat</span>
        <input name="alamat_pelanggan"  type="text" class="form-control" placeholder="Alamat Anda" aria-label="Alamat Anda" aria-describedby="basic-addon1" value="{{ Auth::user()-> alamat }}" >
    </div>
    </div>
    <div class="form-group">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">NoHP</span>
        <input name="no_telepon_pelanggan" type="number" class="form-control" placeholder="No Telpon Anda" aria-label="No Telpon Anda" aria-describedby="basic-addon1" value="{{ Auth::user()-> no_telepon_pelanggan }}" >
    </div>
    </div>
    <div class="form-group">
    <div class="input-group mb-3">
        <label class="input-group-text" for="">Foto Anda</label>
        <input type="file" name="foto_profile" class="form-control" placeholder="Pilih foto device anda" accept="image/*" required >
        <div class="text-danger">
        @error('foto_profile')
                {{ $message }}
        @enderror
        </div>
    </div>
    </div>
    
    @section('fixer_feature')
        <div class="form-group">
        <div class="input-group mb-3">
            <label class="input-group-text" for="">Uploud Poster Anda</label>
                <input type="file" name="poster" class="form-control" accept="image/*" required>
            <div class="text-danger">
            @error('poster')
                    {{ $message }}
            @enderror
            </div>
        </div>
        </div>
        <div class="form-group">    
        <div class="input-group">
            <span class="input-group-text">Deskripsi Toko</span>
            <textarea class="form-control" name="desc_fixer" aria-label="With textarea" required></textarea>
        </div>
        </div>
    @endsection
    @section('button')
    <br>
        <div class="form-group">
        <div class="input-group mb-3">
            <button class="btn btn-primary btn-sm">Simpan</button>
        </div>
        </div>  
    @endsection
</form>
@endsection

