<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn</title>
    <link rel="stylesheet" href="{{asset('css/styleloginpage.css')}}">
</head>
<body>
    <div class="container">
        <div class="signin">
            <img src="{{URL::asset('/img/login.jpg')}}" />
            <div class="formSignin">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h2>SIGN IN</h2>
                    <input placeholder="Masukkan Email Anda" id="email" type="email" name="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <input placeholder="Masukkan Password Anda" id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>
                    <p class="signup">Belum punya akun?<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>