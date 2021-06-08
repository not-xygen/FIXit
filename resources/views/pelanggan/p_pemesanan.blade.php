@extends('layouts.f_p_layouts')
@section('title')
    Pemesanan
@endsection
@section('tabel')
    
<form action="/payments/{{ $data_fixer['data_fixer']-> id}}/invoice" method="POST" enctype="multipart/form-data">
    @csrf
    <h2 class="alert bg-dark text-warning text-center mt-3">FORM PEMESANAN</h2>
    <div class="form-group">
         <div class="row">
         <div class="col-md-3"> 
             <label>Nama Pelanggan :</label>
         </div>
             <div class="col-md-9">
                 <input name="nama_pelanggan" class="form-control" placeholder="Masukkan Nama anda" value="{{ Auth::user()-> name }}" required>
                 @error('nama_pelanggan')
                     {{ $message  }}
                 @enderror
             </div>
         </div>
     </div>
     <div class="form-group">
         <br>
         <div class="row">
         <div class="col-md-3">
             <label>Alamat Pelanggan :</label>
         </div>
             <div class="col-md-9">
                 <input name="alamat_pelanggan" class="form-control" placeholder="Masukkan Nama anda" value="{{ Auth::user()-> alamat }}" required>
                 @error('alamat_pelanggan')
                     {{ $message  }}
                 @enderror
             </div>
         </div>
     </div>
     <div class="form-group">
         <br>
         <div class="row">
         <div class="col-md-3">
             <label>NoHP Pelanggan :</label>
         </div>
             <div class="col-md-9">
                 <input name="no_hp_pelanggan" class="form-control" placeholder="Masukkan Nama anda" value="{{ Auth::user()-> no_telepon_pelanggan }}" required>
                 @error('no_hp_pelanggan')
                     {{ $message  }}
                 @enderror
             </div>
         </div>
     </div>
     {{-- Bagian Form Fixer --}}
     <div class="form-group">
         <br>
         <div class="row">
         <div class="col-md-3">
             <label>Nama Fixer :</label>
         </div>
             <div class="col-md-9">
                 <input name="nama_fixer" class="form-control" placeholder="Masukkan Nama anda" readonly value="{{ $data_fixer['data_fixer']-> name}}">
                 @error('nama_fixer')
                     {{ $message  }}
                 @enderror
             </div>
         </div>
      </div>
      <div class="form-group">
          <br>
         <div class="row">
         <div class="col-md-3">
             <label>Alamat Fixer :</label>
         </div>
             <div class="col-md-9">
                 <input name="alamat_fixer" class="form-control" placeholder="Masukkan Nama anda" readonly value="{{ $data_fixer['data_fixer']-> alamat}}">
                 @error('no_hp_pelanggan')
                     {{ $message  }}
                 @enderror
             </div>
         </div>
     </div>
      <div class="form-group">
          <br>
         <div class="row">
         <div class="col-md-3">
             <label>NoHP fixer :</label>
         </div>
             <div class="col-md-9">
                 <input name="no_hp_fixer" class="form-control" placeholder="Masukkan Nama anda" readonly value="{{ $data_fixer['data_fixer']-> no_telepon_pelanggan}}">
                 @error('no_hp_fixer')
                     {{ $message  }}
                 @enderror
             </div>
         </div>
     </div>
     <div class="form-group">
        <br>
       <div class="row">
       <div class="col-md-3">
           <label>Jenis Device</label>
       </div>
           <div class="col-md-9">
               <input name="jenis_device" class="form-control" placeholder="Masukkan Jenis Device Anda" value="" required>
               @error('jenis_device')
                   {{ $message  }}
               @enderror
           </div>
       </div>
     </div>
    <div class="form-group">
        <br>
       <div class="row">
       <div class="col-md-3">
           <label>Jenis Kerusakan</label>
       </div>
           <div class="col-md-9">
                <textarea class="form-control" name="jenis_kerusakan" aria-label="With textarea" required></textarea>
               @error('jenis_device')
                   {{ $message  }}
               @enderror
           </div>
       </div>
    </div>
     <div class="form-group">
         <br>
         <div class="row">
            <div class="col-md-3">
                <label for="">Foto</label>
            </div>
            <div class="col-md-9">    
                    <input type="file" name="foto_device" class="form-control" placeholder="Pilih foto device anda"  accept=".png, .jpg, .jpeg" required>
                <div class="text-danger">
                @error('foto_device')
                    {{ $message }}
                @enderror
            </div>   
            </div>
        </div>
    </div>
     <div class="form-group">
         <br>
         <button class="btn btn-primary btn-sm">Pesan Sekarang</button>
     </div>
</form>
@endsection