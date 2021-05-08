<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="{{asset('css/registrasistyle.css')}}">
</head>
<body>
    <div class="container">
        <div class="signin">
            <img src="{{asset('img/login.jpg')}}">
            <div class="formSignin">
                <form>
                    <h2>SIGN UP</h2>
                    <input type="text" name="" placeholder="Email Address">
                    <input type="text" name="" placeholder="Username">
                    <input type="password" name="" placeholder="Password">
                    <input type="password" name="" placeholder=" Confirm Password">
                    <input type="submit" name="" value="CREATE">
                    <p class="signup">Sudah punya akun? <a href="/login">Log in Disini</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>