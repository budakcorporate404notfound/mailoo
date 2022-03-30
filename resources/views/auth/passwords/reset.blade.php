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
                        <h1 class="mb-0">Update Password - Mailoo</h1>
                        <p>Update password baru anda agar dapat mengakses Mailoo</p>

                        <form class="mt-4" method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ $email ?? old('email') }}" required autocomplete="email"
                                    autofocus placeholder="Masukan email kamu">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2">New password</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password" placeholder="Masukan password baru">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="checkbox" onclick="myFunction()"> Show Password
                            </div>

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

                            <div class="form-group">

                                <label for="exampleInputPassword1">Password</label>
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password"
                                    placeholder="Confirm password baru">
                            </div>

                            <div class="form-group">
                                <input type="checkbox" onclick="myFunctions()"> Show Confirm Password
                            </div>

                            <script>
                                function myFunctions() {
                                    var x = document.getElementById("password-confirm");
                                    if (x.type === "password") {
                                        x.type = "text";
                                    } else {
                                        x.type = "password";
                                    }
                                }
                            </script>

                            <div class="d-inline-block w-100">

                                <span class="dark-color d-inline-block line-height-2">Sudah mempunyai akun ? <a
                                        href="{{ route('login') }}">Log In</a></span>

                                <button type="submit" class="btn btn-primary float-right">Update Password</button>
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