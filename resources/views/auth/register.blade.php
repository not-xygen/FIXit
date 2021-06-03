<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="{{asset('css/styleregistrasipage.css')}}">
</head>
<body>
    <div class="container">
        <div class="signin">
            <img src="{{URL::asset('/img/login.jpg')}}" />
            <div class="formSignin">
                <form method="POST" action="{{ route('register') }}">
                    @csrf 

                    <h2>SIGN UP</h2>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nama Anda">
                    <input id="no_telepon_pelanggan" type="text" class="form-control @error('no_telepon_pelanggan') is-invalid @enderror" name="no_telepon_pelanggan" value="{{old('no_telepon_pelanggan')}}" required autocomplete="no_telepon_pelanggan" autofocus placeholder="Nomor HP">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Masukkan Email Anda">
                    <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus placeholder="Alamat  Anda">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Masukkan Password Anda">
                    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Masukkan Ulang Password Anda">
                    <select name="role_id">
                        <option value="pelanggan">User</option>
                        <option value="fixer">Fixer</option>
                    </select>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                    <p class="signup">Sudah punya akun? <a href="/login">Log in Disini</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>