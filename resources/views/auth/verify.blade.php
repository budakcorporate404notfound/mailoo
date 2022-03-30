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
                        <img src="assets/images/login/mail.png" width="80" alt="">
                        <h1 class="mt-3 mb-0">Yeah, Berhasil !</h1>

                        @if (session('resent'))
                        <p> {{ __('Link untuk melakukan verifikasi sudah terkirim ke email kamu') }}
                        </p>
                        @endif

                        {{ __('Untuk mendapatkan akses akun Mailoo, klik tombol "Gabung Mailoo" dipesan masuk email kamu.') }}
                        {{ __('Tapi, Jika kamu belum mendapatkan pesan dari Mailoo yang masuk ke email kamu. Klik tombol dibawah ini') }}

                        <form class="d-inline-block w-100" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit"
                                class="btn btn-primary mt-3">{{ __('Kirim ulang') }}</button>.
                        </form>

                        {{-- <p>A email has been send to youremail@domain.com. Please check for an email from company and
                            click on the included link to reset your password.</p>
                        <div class="d-inline-block w-100">

                            <button type="submit" class="btn btn-primary mt-3">Back to Home</button>
                        </div> --}}
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
    <!-- lottie JavaScript -->
    <script src="assets/js/lottie.js"></script>
    <!-- Chart Custom JavaScript -->
    <script src="assets/js/chart-custom.js"></script>
    <!-- Custom JavaScript -->
    <script src="assets/js/custom.js"></script>
</body>

</html>