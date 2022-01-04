<!DOCTYPE html>
<html lang="en">
<head>
    <title>Acon Creative | Dashboard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon_io/favicon-16x16.png">
    <link rel="manifest" href="../favicon_io/site.webmanifest">
    <link rel="mask-icon" href="../favicon_io/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor1/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor1/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor1/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor1/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor1/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../vendor1/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../css/util2.css">
    <link rel="stylesheet" type="text/css" href="../css/main2.css">
    <!--===============================================================================================-->
</head>
<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-t-50 p-b-90">
                        <form  class="login100-form validate-form flex-sb flex-w" method="POST" action="{{ route('login') }}">
                            @csrf
                            <span class="login100-form-title p-b-51" style="color: #6E439C;">Admin Panel</span>
                            <div class="login100-form-title " style="font-size: 20px;">

                                @error('email')
                                <div class="alert alert-danger text-center" role="alert">
                                    Invalid Email or Password
                                </div>
                                @enderror
                            </div>
                            <div class="wrap-input100 validate-input m-b-16">
                                    <input id="email" type="email" class="input100" name="email" placeholder="You Email" required autocomplete="email" autofocus>
                                    <span class="focus-input100"></span>
                            </div>

                            <div class="wrap-input100 validate-input m-b-16">
                                    <input id="password" type="password" class="input100" name="password" placeholder="Your Password" required autocomplete="current-password">
                                <span class="focus-input100"></span>
                            </div>

                                <div class="flex-sb-m w-full p-t-3 p-b-24">
                                    <div class="contact100-form-checkbox">
                                        <input class="input-checkbox100" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="label-checkbox100" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>

                                <div class="container-login100-form-btn m-t-17">
                                    <button type="submit" class="login100-form-btn">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>

    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="../vendor1/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="../vendor1/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="../vendor1/bootstrap/js/popper.js"></script>
    <script src="../vendor1/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="../vendor1/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="../vendor1/daterangepicker/moment.min.js"></script>
    <script src="../vendor1/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="../vendor1/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="../js/main2.js"></script>

    </body>
    </html>
