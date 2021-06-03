<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>menu ADD</title>
</head>
<body>
   <form action="/payments/{{ $data_fixer['data_fixer']-> id}}/invoice" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="">Nama Pelanggan</label>
                <input name="nama_pelanggan" class="form-control" placeholder="Masukkan Nama anda" value="{{ Auth::user()-> name }}">
                <div class="text-danger">
                @error('alamat_pelanggan')
                        {{ $message }}
                @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="">id pelanggan</label>
                <input name="id_pelanggan" class="form-control" placeholder="Masukkan Nama anda" value="{{ Auth::user()-> id }}">
                <div class="text-danger">
                @error('id_pelanggan')
                        {{ $message }}
                @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="">NoHP</label>
                <input name="no_hp_pelanggan" class="form-control" placeholder="Masukkan noHP anda"  value="{{ Auth::user()-> no_telepon_pelanggan }}">
                <div class="text-danger">
                @error('no_hp_pelanggan')
                        {{ $message }}
                @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="">Alamat</label>
                <input name="alamat_pelanggan" class="form-control" placeholder="Masukkan noHP anda"  value="{{ Auth::user()-> alamat }}">
                <div class="text-danger">
                @error('alamat_pelanggan')
                        {{ $message }}
                @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="">Device</label>
                <input name="jenis_device" class="form-control" placeholder="Masukkan Nama anda" value="">
                <div class="text-danger">
                @error('jenis_device')
                        {{ $message }}
                @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="">Nama Fixer</label>
                <input name="nama_fixer" class="form-control" placeholder="" value="{{ $data_fixer['data_fixer']-> name}}">
                <div class="text-danger">
                </div>
            </div>
            <div class="form-group">
                <label for="">id fixer</label>
                <input name="id_fixer" class="form-control" placeholder="" value="{{ $data_fixer['data_fixer']-> id}}">
                <div class="text-danger">
                </div>
            </div>

            <div class="form-group">
                <label for="">NoHP</label>
                <input name="alamat_fixer" class="form-control" placeholder="Masukkan noHP anda"  value="{{$data_fixer['data_fixer']-> alamat }}">
                <div class="text-danger">
                @error('alamat_fixer')
                        {{ $message }}
                @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="">NoHP</label>
                <input name="no_hp_fixer" class="form-control" placeholder="Masukkan noHP anda"  value="{{$data_fixer['data_fixer']-> no_telepon_pelanggan}}">
                <div class="text-danger">
                @error('no_hp_fixer')
                        {{ $message }}
                @enderror
                </div>
            </div>

            {{-- <div class="form-group">
                <label for="">Foto</label>
                <input type="file" name="foto_pelanggan" class="form-control" placeholder="Pilih foto anda" >
                <img src="{{url('foto_pelanggan/'.$data_fixer->foto_pelanggan)}}" alt="">
                <div class="text-danger">
                @error('foto_pelanggan')
                        {{ $message }}
                @enderror
                </div>
            </div> --}}
            <div class="form-group">
                <button class="btn btn-primary btn-sm">Simpan</button>
            </div>
        </div>
    </div>
    </form>
</body>
</html>