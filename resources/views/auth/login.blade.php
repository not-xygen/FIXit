<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn</title>
    <link rel="stylesheet" href="{{asset('css/styleloginpage.css')}}">
</head>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        
<body>
    <div class="container">
        <div class="signin">
            <img src="{{URL::asset('/img/login.jpg')}}" />
            <div class="formSignin">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h2>SIGN IN</h2>
                    <!-- Email Address -->
                    <div>
                        <x-label for="email" :value="__('Email')" />
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    </div>
                    <div class="mt-4">
                        <x-label for="password" :value="__('Password')" />
                        <x-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />
                    </div>
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
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