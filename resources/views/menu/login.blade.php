<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn</title>
    <link rel="stylesheet" href="{{asset('css/loginstyle.css')}}">
</head>
<body>
    <div class="container">
        <div class="signin">
            <img src="{{asset('img/login.jpg')}}">
            <div class="formSignin">
                <form>
                    <h2>SIGN IN</h2>
                    <input type="text" name="username" placeholder="Username">
                    <input type="password" name="pasword" placeholder="Password">
                    <input type="submit" name="login" value="LOGIN">
                    <p class="signup">Belum punya akun? <a href="index2.html">Daftar Disini</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>