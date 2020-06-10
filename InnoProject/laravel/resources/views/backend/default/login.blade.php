
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login V6</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="images/icons/favicon.ico" />

<link rel="stylesheet" type="text/css" href="css/login/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="css/login/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="css/login/material-design-iconic-font.min.css">

<link rel="stylesheet" type="text/css" href="css/login/animate.css">

<link rel="stylesheet" type="text/css" href="css/login/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="css/login/css/animsition.min.css">

<link rel="stylesheet" type="text/css" href="css/login/select2.min.css">

<link rel="stylesheet" type="text/css" href="css/login/daterangepicker.css">

<link rel="stylesheet" type="text/css" href="css/login/util.css">
<link rel="stylesheet" type="text/css" href="css/login/main.css">

</head>
<body>
<div class="limiter">
<div class="container-login100">
<div class="wrap-login100 p-t-5 p-b-20">

<span class="login100-form-title p-b-15">
Admin panelə daxil ol
</span>
<form method="post" action="{{route('authenticate')}}">
  @CSRF

             

@if(Session::has('error'))
            <div class="alert alert-danger">
                {{session('error')}}
            </div>
            @elseif(Session::has('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
        @endif
<span class="login100-form-avatar">
<img src="/assets/images/idealizerr_logo.svg" alt="AVATAR">
</span>
<div class="wrap-input100 validate-input m-t-5 m-b-35" data-validate="Email">
<input class="input100" type="text" name="email">
<span class="focus-input100" data-placeholder="Email"></span>
</div>
<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
<input class="input100" type="password" name="password">
<span class="focus-input100" data-placeholder="Parol"></span>
</div>
<div class="container-login100-form-btn">
<button class="login100-form-btn">
Login
</button>
</div>
</form>
</div>
</div>
</div>
<div id="dropDownSelect1"></div>

<script src="css/login/jquery-3.2.1.min.js" type="648b27dbff30f4ee91913c77-text/javascript"></script>

<script src="css/login/animsition.min.js" type="648b27dbff30f4ee91913c77-text/javascript"></script>

<script src="css/login/popper.js" type="648b27dbff30f4ee91913c77-text/javascript"></script>
<script src="css/login/js/bootstrap.min.js" type="648b27dbff30f4ee91913c77-text/javascript"></script>

<script src="vendor/select2/select2.min.js" type="648b27dbff30f4ee91913c77-text/javascript"></script>

<script src="vendor/daterangepicker/moment.min.js" type="648b27dbff30f4ee91913c77-text/javascript"></script>
<script src="vendor/daterangepicker/daterangepicker.js" type="648b27dbff30f4ee91913c77-text/javascript"></script>

<script src="vendor/countdowntime/countdowntime.js" type="648b27dbff30f4ee91913c77-text/javascript"></script>

<script src="js/main.js" type="648b27dbff30f4ee91913c77-text/javascript"></script>

<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="648b27dbff30f4ee91913c77-|49" defer=""></script></body>
</html>

