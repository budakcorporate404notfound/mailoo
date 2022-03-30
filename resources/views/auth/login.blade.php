<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mailoo</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    @livewireStyles
</head>

<body>

    <!-- loader Start -->
    <div id="loading">

    </div>
    <!-- loader END -->
    <!-- Sign in Start -->
    <section class="sign-in-page">
        <div class="container p-0">
            <div class="row no-gutters">
                <div class="col-sm-12 align-self-center">
                    <div class="sign-in-from bg-white">
                        <h1 class="mb-0">Sign In - Mailoo</h1>
                        <p>Masukan (email atau username kamu) dan password untuk mengakses dashboard Mailoo</p>

                        @if ($message = Session::get('error'))
                        {{ $message }}
                        @endif

                        <form class="mt-4" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email atau username</label>
                                {{-- <input type="email" class="form-control mb-0" id="exampleInputEmail1"
                                    placeholder="Enter email"> --}}

                                <input id="username" type="username"
                                    class="form-control mb-0 @error('username') is-invalid @enderror" name="username"
                                    value="{{ old('username') }}" required autocomplete="username" autofocus
                                    placeholder="Enter email or username">

                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="float-right">Lupa Password ?</a>
                                @endif

                                <input id="password" type="password"
                                    class="form-control mb-0 @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <input type="checkbox" onclick="myFunction()"> Show Password

                            <script>
                                function myFunction() {
                                    var x = document.getElementById("password");
                                    if (x.type === "password") {
                                        x.type = "text";
                                    } else {
                                        x.type = "password";
                                    }
                                }
                            </script>

                            <div class="d-inline-block w-100">
                                <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                    <input type="checkbox" class="custom-control-input" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="custom-control-label" for="remember">Remember Me</label>

                                </div>
                                <button type="submit" class="btn btn-primary float-right">Masuk</button>

                            </div>
                            <div class="sign-info">

                                <span class="dark-color d-inline-block line-height-2">Belum mempunyai akun ?
                                    @if (Route::has('register'))
                                    <a class="btn btn-link" href="{{ route('register') }}">Registrasi</a>
                                    @endif
                                </span>

                                {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                                @endif --}}

                                {{-- <ul class="iq-social-media">
                                    <li><a href="#"><i class="ri-facebook-box-line"></i></a></li>
                                    <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                    <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                                </ul> --}}
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sign in END -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    @livewireScripts
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Appear JavaScript -->
    <script src="assets/js/jquery.appear.js"></script>
    <!-- Countdown JavaScript -->
    <script src="assets/js/countdown.min.js"></script>
    <!-- Counterup JavaScript -->
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Wow JavaScript -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Apexcharts JavaScript -->
    <script src="assets/js/apexcharts.js"></script>
    <!-- Slick JavaScript -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Select2 JavaScript -->
    <script src="assets/js/select2.min.js"></script>
    <!-- Owl Carousel JavaScript -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Magnific Popup JavaScript -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Smooth Scrollbar JavaScript -->
    <script src="assets/js/smooth-scrollbar.js"></script>
    <!-- Chart Custom JavaScript -->
    <script src="assets/js/chart-custom.js"></script>
    <!-- Custom JavaScript -->
    <script src="assets/js/custom.js"></script>
</body>

</html>