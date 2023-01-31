<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>grv✦</title>
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
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                  <h1 class="mb-0">Registrasi - grv✦</h1>
                  <p>Masukan alamat email kamu dan password kamu untuk mendaftarkan akun grv✦</p>
                  <form method="POST" action="{{ route('register') }}">
                     @csrf
                     <div class="form-group">
                        <label for="name">Nama User <span
                                        style="color:red;font-weight:bold">*</span></label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                           name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                           placeholder="masukan nama user" required>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     </div>

                     <div class="form-group">
                        <label for="nip">Nomor Induk Pegawai</label>
                        <input id="nip" type="number" class="form-control @error('nip') is-invalid @enderror" name="nip"
                           value="{{ old('nip') }}" autocomplete="nip" autofocus
                           placeholder="masukan nomor induk pegawai">

                        @error('nip')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     </div>

                     <div class="form-group">
                        <label for="unit_kerja">Unit Kerja <span
                                        style="color:red;font-weight:bold">*</span></label>
                        <select id="unit_kerja" name="unit_kerja" class="form-control" required>
                           <option value="" selected disabled>Select Items</option>
                           @foreach ($referensi_unitbagian as $key => $unit_kerja)
                           <option value="{{ $key }}"> {{ $unit_kerja }}</option>
                           @endforeach
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="jabatan">Jabatan <span
                                        style="color:red;font-weight:bold">*</span></label>
                        <select name="jabatan" id="jabatan" class="form-control" required></select>
                     </div>

                     <div class="form-group">
                        <label for="unit_kerja">Konfirmasi Jabatan <span
                                        style="color:red;font-weight:bold">*</span></label>
                        <select class="form-control" name="confirm_jabatan" id="confirm_jabatan" required>

                           <option>Select Items</option>
                           @foreach ($referensi_confirmjabatan as $key => $value)
                           <option value="{{ $key }}" {{ ( $key == $selectID_confirmjabatan) ? 'selected' : '' }}>
                              {{ $value }}
                           </option>
                           @endforeach
                        </select>
                     </div>

                     <div class="form-group">
                        <label for="jabatanlengkap">Jabatan Lengkap <span
                                        style="color:red;font-weight:bold">*</span></label>
                        <select name="jabatanlengkap" id="jabatanlengkap" class="form-control" required></select>
                     </div>

                     <script>
                        // when unit_kerja dropdown changes
                        $('#unit_kerja').change(function() {
                           var unit_kerjaID = $(this).val();
                           if (unit_kerjaID) {
                              $.ajax({
                                 type: "GET",
                                 url: "{{ url('getJabatan') }}?unit_kerja_id=" + unit_kerjaID,
                                 success: function(res) {
                                    if (res) {
                                       $("#jabatan").empty();
                                       $("#jabatan").append('<option>Select Items</option>');
                                       $.each(res, function(key, value) {
                                          $("#jabatan").append('<option value="' + key + '">' +
                                             value +
                                             '</option>');
                                       });
                                    } else {
                                       $("#jabatan").empty();
                                    }
                                 }
                              });
                           } else {
                              $("#jabatan").empty();
                              $("#jabatanlengkap").empty();
                           }
                        });
                        // when jabatan dropdown changes
                        $('#jabatan').on('change', function() {
                           var jabatanID = $(this).val();
                           if (jabatanID) {
                              $.ajax({
                                 type: "GET",
                                 url: "{{ url('getJabatanlengkap') }}?jabatan_id=" + jabatanID,
                                 success: function(res) {
                                    if (res) {
                                       $("#jabatanlengkap").empty();
                                       $("#jabatanlengkap").append('<option>Select Items</option>');
                                       $.each(res, function(key, value) {
                                          $("#jabatanlengkap").append('<option value="' + value +
                                             '">' + value +
                                             '</option>');
                                       });
                                    } else {
                                       $("#jabatanlengkap").empty();
                                    }
                                 }
                              });
                           } else {
                              $("#jabatanlengkap").empty();
                           }
                        });


                     </script>

                     <div class="form-group">
                        <label for="referensi_atasanlangsung">Referensi Atasan Langsung <span
                                        style="color:red;font-weight:bold">*</span></label>
                        <select class="form-control" name="referensi_atasanlangsung" id="referensi_atasanlangsung">

                           <option value="">Select Items</option>
                           @foreach ($referensi_atasanlangsung as $key => $value)
                           <option value="{{ $key }}" {{ ( $key == $selectID_atasanlagsung) ? 'selected' : '' }}>
                              {{ $value }}
                           </option>
                           @endforeach
                        </select>
                     </div>

                     <div class="form-group">
                        <label for="email">Email <span
                                        style="color:red;font-weight:bold">*</span></label>
                        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror"
                           name="email" value="{{ old('email') }}" required autocomplete="email"
                           placeholder="masukan alamat email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     </div>

                     <div class="form-group">
                        <label for="password">Password <span
                                        style="color:red;font-weight:bold">*</span></label>
                        <input id="password" type="password"
                           class="form-control @error('password') is-invalid @enderror" name="password" required
                           autocomplete="new-password" placeholder="masukan password user">

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
                        <label for="password-confirm">{{ __('Confirm Password') }} <span
                                        style="color:red;font-weight:bold">*</span></label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                           required autocomplete="new-password" placeholder="confirm password user">
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
                        {{-- <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                           <input type="checkbox" class="custom-control-input" id="customCheck1">
                           <label class="custom-control-label" for="customCheck1">I accept <a href="#">Terms and
                                 Conditions</a></label>
                        </div> --}}

                        <span class="dark-color d-inline-block line-height-2">Sudah mempunyai akun ?
                           @if (Route::has('register'))
                           <a href="{{ route('login') }}">Sign in</a></span>
                        @endif

                        <button type="submit" class="btn btn-primary float-right">Sign Up</button>
                     </div>
                     {{-- <div class="sign-info">
                        <span class="dark-color d-inline-block line-height-2">Sudah mempunyai akun ?
                           @if (Route::has('register'))
                           <a href="{{ route('login') }}">Sign in</a></span>
                     @endif
                     <ul class="iq-social-media">

                        <span class="dark-color d-inline-block line-height-2">Don't have an account?
                           @if (Route::has('register'))
                           <a class="btn btn-link" href="{{ route('register') }}">Registrasi</a>
                           @endif
                        </span>

                     </ul>
               </div> --}}
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