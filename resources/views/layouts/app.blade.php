<!doctype html>
<html lang="en">

<head>

   <!-- Required meta tags -->
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Mailoo</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />

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

   <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

   <link rel="stylesheet" href="assets/fullcalendar/fullcalendar.css" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

    {{-- <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script> --}}

    {{-- <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script> --}}

   {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
      integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
   </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
   </script> --}}

   <style>

      .topnav {
  overflow: hidden;
  background-color: #333;
}


      .topnav-right {
  float: right;
}
   </style>

   @livewireStyles

</head>

<body class="header-top-bg">

   {{-- {{$slot}} --}}

   <!-- loader Start -->
   <div id="loading">

   </div>
   <!-- loader END -->
   <!-- Wrapper Start -->
   <div class="wrapper">
      <!-- Sidebar  -->
      <div class="iq-sidebar">
         <div class="iq-sidebar-logo d-flex justify-content-between">
            <a href="index.html">
               <img src="assets/images/logo.gif" class="img-fluid" alt="">
               <span>Mailoo</span>
            </a>
            <div class="iq-menu-bt align-self-center">
               <div class="wrapper-menu">
                  <div class="line-menu half start"></div>
                  <div class="line-menu"></div>
                  <div class="line-menu half end"></div>
               </div>
            </div>
         </div>

         <div id="sidebar-scrollbar">
            <nav class="iq-sidebar-menu">
               <ul id="iq-sidebar-toggle" class="iq-menu">
                  <li class="iq-menu-title"><i class="ri-separator"></i><span>Main</span></li>
                  {{-- <li>

                     <a href="#dashboard" class="iq-waves-effect collapsed" data-toggle="collapse"
                        aria-expanded="false"><i class="las la-envelope-open"></i><span>Dashboard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="dashboard" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="active"><a href="index.html">Dashboard 1</a></li>
                        <li><a href="dashboard1.html">Dashboard 2</a></li>
                     </ul>
                  </li> --}}
                  {{-- <li>
                     <a href="#mailbox" class="iq-waves-effect collapsed" data-toggle="collapse"
                        aria-expanded="false"><i class="las la-envelope-open"></i><span>Surat Masuk</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="mailbox" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="{{url('/InputSuratMasuk')}}">Input Surat Masuk</a></li>

                  <li><a href="{{url('/DataInputSuratMasuk')}}">data input surat masuk</a></li>
               </ul>
               </li> --}}
               <li><a href="{{url('fullcalender')}}" class="iq-waves-effect"><i
                        class="las la-calendar"></i><span>Kalender Kegiatan</span></a></li>
               <li>
                  <a href="#keuangan" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i
                        class="las la-balance-scale"></i><span>Keuangan</span><i
                        class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                  <ul id="keuangan" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                     <li>
                        <a href="#sub-menu-dashboard" class="iq-waves-effect collapsed" data-toggle="collapse"
                           aria-expanded="false"><i class="las la-home"></i><span>Dashboard</span><i
                              class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="sub-menu-dashboard" class="iq-submenu iq-submenu-data collapse">
                           {{-- <li><a href="{{url('rincianpelaksanaan')}}"><i
                              class="las la-campground"></i>Pelaksanaan</a>
                     </li> --}}
                     <li><a href="{{url('dashboard_1')}}"><i class="las la-chart-pie"></i>Dashboard I </a></li>
                     <li><a href="{{url('dashboard_3')}}"><i class="las la-chart-area"></i>Dashboard II </a></li>
                     <li><a href="{{url('dashboard_2')}}"><i class="las la-chart-bar"></i>Dashboard III </a></li>


                  </ul>

                  {{-- <li><a href="{{url('/ReferensiUraianKegiatan')}}">Ref Uraian Kegiatan</a>
               </li> --}}

               <li>
                  <a href="#sub-referensi" class="iq-waves-effect collapsed" data-toggle="collapse"
                     aria-expanded="false"><i class="lab la-pagelines"></i><span>Referensi</span><i
                        class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                  <ul id="sub-referensi" class="iq-submenu iq-submenu-data collapse">
                     {{-- <li><a href="{{url('rincianpelaksanaan')}}"><i class="las la-campground"></i>Pelaksanaan</a>
               </li> --}}
               <li><a href="{{url('referensi')}}"><i class="las la-money-bill-wave"></i> Anggaran </a></li>
               <li>
                  <a href="#sub-surattugas" class="iq-waves-effect collapsed" data-toggle="collapse"
                     aria-expanded="false"><i class="las la-ribbon"></i><span>Surat Tugas</span><i
                        class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                  <ul id="sub-surattugas" class="iq-submenu iq-submenu-data collapse">
                     <li><a href="{{url('menimbang')}}"> &nbsp; &nbsp; &nbsp; <i
                              class="las la-hand-point-right"></i>Menimbang</a></li>
                     <li><a href="{{url('dasar')}}"> &nbsp; &nbsp; &nbsp; <i
                              class="las la-hand-point-right"></i>Dasar</a></li>
                     <li><a href="{{url('untuk')}}"> &nbsp; &nbsp; &nbsp; <i
                              class="las la-hand-point-right"></i>Untuk</a></li>
                     <li><a href="{{url('kodemak')}}"> &nbsp; &nbsp; &nbsp; <i class="las la-hand-point-right"></i>Kode
                           Mak</a></li>
                     <li><a href="{{url('tertanda')}}"> &nbsp; &nbsp; &nbsp; <i
                              class="las la-hand-point-right"></i>Tertanda</a></li>
                  </ul>
               </li>

               </ul>
               </li>

               <li><a href="{{url('konsepst')}}"><i class="las la-file-alt"></i> Konsep Surat Tugas </a></li>

               {{-- <li><a href="{{url('/RealisasiRKKL')}}">Realiasasi RKKL</a></li> --}}

               {{-- <li><a href="{{url('ajaxproducts')}}">datatable</a></li> --}}
               <li><a href="{{url('realisasirkkl')}}"><i class="las la-file-invoice-dollar"></i> Realisasi </a></li>
               <li><a href="{{url('unggahlaporan')}}"><i class="lar la-file-pdf"></i> Unggah Laporan </a></li>

               <li>
                  <a href="#sub-menu" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i
                        class="ri-record-circle-line"></i><span>Rincian</span><i
                        class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                  <ul id="sub-menu" class="iq-submenu iq-submenu-data collapse">
                     {{-- <li><a href="{{url('rincianpelaksanaan')}}"><i class="las la-campground"></i>Pelaksanaan</a>
               </li> --}}
               <li><a href="{{url('rincianpelaksanaan')}}"><i class="las la-campground"></i>Pelaksanaan</a></li>
               <li><a href="{{url('rincianpengeluaran')}}"><i class="las la-coins"></i>Pengeluaran</a></li>
               <li>
                  <a href="#sub-laporan" class="iq-waves-effect collapsed" data-toggle="collapse"
                     aria-expanded="false"><i class="las la-clipboard-check"></i><span>Laporan</span><i
                        class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                  <ul id="sub-laporan" class="iq-submenu iq-submenu-data collapse">
                     <li><a href="{{url('rincianpembuatlaporan')}}"> &nbsp; &nbsp; &nbsp; <i
                              class="las la-hand-point-right"></i>Pembuat</a></li>
                     <li><a href="{{url('rincianlaporan')}}"> &nbsp; &nbsp; &nbsp; <i
                              class="las la-hand-point-right"></i>Pengirim</a></li>

                  </ul>
               </li>
               </ul>
               </li>

               </ul>
               </li>

               {{-- <li>
                     <a href="#bagianpenghapusan" class="iq-waves-effect collapsed" data-toggle="collapse"
                        aria-expanded="false"><i class="las la-eraser"></i><span>Adm Penghapusan</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="bagianpenghapusan" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="{{url('/RekapPerjanjianSewa')}}">Perjanjian Sewa</a></li>

               <li><a href="{{url('/DataInputSuratMasuk')}}">Keuangan 2</a></li>
               </ul>
               </li> --}}
               {{-- <li><a href="{{url('/Inputsurat')}}" class="iq-waves-effect"><i
                  class="far fa-envelope"></i><span>Input Surat</span></a></li> --}}

               <li class="iq-menu-title"><i class="ri-separator"></i><span>Pengaturan</span></li>

               <li>

                  <a href="#user-info" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i
                        class="las la-user-circle"></i><span>User</span><i
                        class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                  <ul id="user-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                     <li><a href="{{url('/Profil_saya')}}"><i class="las la-user-shield"></i> Profil user</a></li>
                     <li><a href="{{url('/Edit_profil')}}"><i class="las la-user-edit"></i> Edit Profil</a></li>
                     <li><a href="{{url('statususer')}}"><i class="las la-user-lock"></i> Status User </a></li>
                  </ul>
               </li>

               <li>

                  <a href="#user-cog" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i
                        class="las la-cog"></i><span>Configure</span><i
                        class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                  <ul id="user-cog" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                     {{-- <li><a href="{{url('unitbagian')}}"><i class="las la-users-cog"></i> Unit Bagian</a>
               </li>
               <li><a href="{{url('jabatan')}}"><i class="las la-users-cog"></i> Jabatan</a></li>
               <li><a href="{{url('unitbagianxjabatan')}}"><i class="las la-users-cog"></i> Unit Bagian x Jabatan </a>
               </li> --}}
               <li><a href="{{url('satuankerja')}}"><i class="las la-users-cog"></i> Satuan Kerja </a></li>
                <li><a href="{{url('namapelaksana')}}"><i class="las la-id-card-alt"></i> Nama Pelaksana </a></li>
               <li><a href="{{url('tahunanggaran')}}"><i class="las la-calendar-minus"></i> Tahun Anggaran </a></li>

               </ul>
               </li>

               <li class="iq-menu-title"><i class="ri-separator"></i><span>Soon</span></li>

               <li><a href="{{url('nominatif')}}" class="iq-waves-effect"><i class="las la-percentage"></i><span>Nominatif</span></a></li>

               </ul>
               </li>
               </ul>
            </nav>
            <div class="p-3"></div>
         </div>
      </div>
      <!-- TOP Nav Bar -->
      <div class="iq-top-navbar">
         <div class="iq-navbar-custom">
            <div class="iq-sidebar-logo">
               <div class="top-logo">
                  <a href="index.html" class="logo">
                     <img src="assets/images/logo.gif" class="img-fluid" alt="">
                     <span>Metorik</span>
                  </a>
               </div>
            </div>
            <div class="navbar-breadcrumb">

               @yield('nama_menu')

            </div>
            <nav class="navbar navbar-expand-lg navbar-light p-0">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
               </button>
               <div class="iq-menu-bt align-self-center">
                  <div class="wrapper-menu">
                     <div class="line-menu half start"></div>
                     <div class="line-menu"></div>
                     <div class="line-menu half end"></div>
                  </div>
               </div>
               {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto navbar-list">
                     <li class="nav-item">
                        <a class="search-toggle iq-waves-effect" href="#"><i class="ri-search-line"></i></a>
                        <form action="#" class="search-box">
                           <input type="text" class="text search-input" placeholder="Type here to search..." />
                        </form>
                     </li>
                     <li class="nav-item dropdown">
                        <a href="#" class="search-toggle iq-waves-effect">
                           <i class="ri-mail-line"></i>
                           <span class="badge badge-pill badge-dark badge-up count-mail">5</span>
                        </a>
                        <div class="iq-sub-dropdown">
                           <div class="iq-card shadow-none m-0">
                              <div class="iq-card-body p-0 ">
                                 <div class="bg-primary p-3">
                                    <h5 class="mb-0 text-white">All Messages<small
                                          class="badge  badge-light float-right pt-1">5</small></h5>
                                 </div>
                                 <a href="#" class="iq-sub-card">
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="images/user/01.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Nik Emma Watson</h6>
                                          <small class="float-left font-size-12">13 Jun</small>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card">
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="images/user/02.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                          <small class="float-left font-size-12">20 Apr</small>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card">
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="images/user/03.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Why do we use it?</h6>
                                          <small class="float-left font-size-12">30 Jun</small>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card">
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="images/user/04.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Variations Passages</h6>
                                          <small class="float-left font-size-12">12 Sep</small>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card">
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="images/user/05.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                          <small class="float-left font-size-12">5 Dec</small>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li class="nav-item">
                        <a href="#" class="iq-waves-effect"><i class="ri-shopping-cart-2-line"></i></a>
                     </li>
                     <li class="nav-item">
                        <a href="#" class="search-toggle iq-waves-effect">
                           <i class="ri-notification-2-line"></i>
                           <span class="bg-danger dots"></span>
                        </a>
                        <div class="iq-sub-dropdown">
                           <div class="iq-card shadow-none m-0">
                              <div class="iq-card-body p-0 ">
                                 <div class="bg-danger p-3">
                                    <h5 class="mb-0 text-white">All Notifications<small
                                          class="badge  badge-light float-right pt-1">4</small></h5>
                                 </div>
                                 <a href="#" class="iq-sub-card">
                                    <div class="media align-items-center">
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">New Order Recieved</h6>
                                          <small class="float-right font-size-12">23 hrs ago</small>
                                          <p class="mb-0">Lorem is simply</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card">
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="images/user/01.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Emma Watson Nik</h6>
                                          <small class="float-right font-size-12">Just Now</small>
                                          <p class="mb-0">95 MB</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card">
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40 rounded" src="images/user/02.jpg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">New customer is join</h6>
                                          <small class="float-right font-size-12">5 days ago</small>
                                          <p class="mb-0">Jond Nik</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card">
                                    <div class="media align-items-center">
                                       <div class="">
                                          <img class="avatar-40" src="images/small/jpg.svg" alt="">
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Updates Available</h6>
                                          <small class="float-right font-size-12">Just Now</small>
                                          <p class="mb-0">120 MB</p>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li class="nav-item iq-full-screen"><a href="#" class="iq-waves-effect" id="btnFullscreen"><i
                              class="ri-fullscreen-line"></i></a></li>
                  </ul>
               </div> --}}
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ml-auto navbar-list">
                   <li class="nav-item">
                        <a> {{Auth::user()->name}} as {{Auth::user()->jabatanlengkap}} | tahun anggaran {{Session::get('tahunanggaran')}} </a>
                        <form action="#" class="search-box">
                           <input type="text" class="text search-input" placeholder="Type here to search..." />
                        </form>
                     </li>


                  <li >
                     <a href="#" class="search-toggle iq-waves-effect text-white"><img class="image rounded-circle"
                           alt="profile_image" src="{{asset('/storage/images/'.Auth::user()->image)}}"
                           class="img-fluid rounded" alt="Sign out"></a>
                     @guest
                     @if (Route::has('login'))
                  <li class="nav-item">
                     <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  @endif

                  @if (Route::has('register'))
                  <li class="nav-item">
                     <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
                  @endif
                  @else
                  <div class="iq-sub-dropdown iq-user-dropdown">
                     <div class="iq-card shadow-none m-0">
                        <div class="iq-card-body p-0 ">
                           <div class="bg-primary p-3">
                              <h5 class="mb-0 text-white line-height">Hi, {{ Auth::user()->name }}</h5>
                              <span class="text-white font-size-12"> {{ Auth::user()->jabatanlengkap }}</span>
                           </div>
                           <a href="{{url('/Profil_saya')}}" class="iq-sub-card iq-bg-primary-hover">
                              <div class="media align-items-center">
                                 <div class="rounded iq-card-icon iq-bg-primary">
                                    <i class="ri-file-user-line"></i>
                                 </div>
                                 <div class="media-body ml-3">
                                    <h6 class="mb-0 ">Profil Saya</h6>
                                    <p class="mb-0 font-size-12">lihat detail profil pribadi.</p>
                                 </div>
                              </div>
                           </a>
                           <a href="{{url('/Edit_profil')}}" class="iq-sub-card iq-bg-primary-success-hover">
                              <div class="media align-items-center">
                                 <div class="rounded iq-card-icon iq-bg-success">
                                    <i class="ri-profile-line"></i>
                                 </div>
                                 <div class="media-body ml-3">
                                    <h6 class="mb-0 ">Edit Profil</h6>
                                    <p class="mb-0 font-size-12">Modifikasi profil pribadi.</p>
                                 </div>
                              </div>
                           </a>

                           <div class="d-inline-block w-100 text-center p-3">
                              <a class="iq-bg-danger iq-sign-btn" href="{{ route('logout') }}"
                                 onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                 role="button">Keluar<i class="ri-login-box-line ml-2"></i></a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                 @csrf
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  @endguest

                  </li>

               </ul>
            </div>
            </nav>
         </div>
      </div>
      <!-- TOP Nav Bar END -->
      <!-- Page Content  -->
      <div id="content-page" class="content-page">
         <div class="container-fluid">
            @yield('content')

         </div>
      </div>
   </div>
   <!-- Wrapper END -->
   <!-- Footer -->
   <footer class="bg-white iq-footer">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-6">
               <ul class="list-inline mb-0">
                  <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                  <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
               </ul>
            </div>
            <div class="col-lg-6 text-right">
               Copyright 2020 <a href="#">Metorik</a> All Rights Reserved.
            </div>
         </div>
      </div>
   </footer>

   @livewireScripts

   <!-- Footer END -->
   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   {{-- <script src="assets/js/jquery.min.js"></script> --}}
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
   <!-- E-commerce  JavaScript -->
   <script src="https://cdn.jsdelivr.net/npm/algoliasearch@3.32.0/dist/algoliasearchLite.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/instantsearch.js@^4.0.0"></script>
   <script src="assets/js/algolia.js"></script>
   <!-- Custom JavaScript -->
   <!-- Custom JavaScript -->
   <script src="assets/js/custom.js"></script>

   <script>
      window.livewire.on('studentAdded', () => {
         $('#addStudentsModal').modal('hide')
         $('body').removeClass('modal-open');
         $('.modal-backdrop').remove();
         $('#upload-images')[0].reset();
      });
      window.livewire.on('studentUpdated', () => {
         $('#updateStudentsModal').modal('hide')
      });
      window.livewire.on('studentUpdated_referensiuraiankegiatan', () => {
         $('#updateStudentsModal_referensiuraiankegiatan').modal('hide')
      });
      window.livewire.on('fileUploaded', () => {
         $('#form-upload')[0].reset();
      });
      window.livewire.on('ImagesUploaded', () => {
         $('#upload-images')[0].reset();
      });
      window.livewire.on('studentAdded_ReferensiUraianKegiatan', () => {
         $('#addStudentsModal_ReferensiUraianKegiatan').modal('hide')
         $('body').removeClass('modal-open');
         $('.modal-backdrop').remove();
         $('#upload-images')[0].reset();
      });
      window.livewire.on('studentAdded_RealisasiRKKL', () => {
         $('#addStudentsModal_RealisasiRKKL').modal('hide')
         $('body').removeClass('modal-open');
         $('.modal-backdrop').remove();
         $('#upload-images')[0].reset();
      });
   </script>

</body>

</html>