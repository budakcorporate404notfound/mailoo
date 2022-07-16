@extends('layouts.app')

@section('nama_menu')
<h5 class="mb-0">
   Edit Profil
</h5>

<nav aria-label="breadcrumb">
   <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Pengaturan ulang</a></li>
      <li class="breadcrumb-item active" aria-current="page">Profil Saya</li>
   </ul>
</nav>
@endsection

@section('content')

@if(!empty(Session::get('errcode')) && Session::get('errcode') == 5)
<script>
   $(function() {
      $('#myModal').modal('show');
   });
</script>
@endif

 @if(!empty(Session::get('errcode')) && Session::get('errcode') == 5)
    <script>
        $(function() {
            $('#OK00').modal('show');
        });
    </script>
    @endif






<div class="row">
   <div class="col-lg-12">
      <div class="iq-card">
         <div class="iq-card-body p-0">
            <div class="iq-edit-list">
               <ul class="iq-edit-profile d-flex nav nav-pills">
                  <li class="col-md-3 p-0">
                     <a class="nav-link" data-toggle="pill" href="#personal-information">
                        Informasi Pribadi
                     </a>
                  </li>
                  <li class="col-md-3 p-0">
                     <a class="nav-link active" data-toggle="pill" href="#chang-pwd">
                        Ganti Password Baru
                     </a>
                  </li>
                  <li class="col-md-3 p-0">
                     <a class="nav-link" data-toggle="pill" href="#emailandsms">
                        Coming Soon
                     </a>
                  </li>
                  <li class="col-md-3 p-0">
                     <a class="nav-link" data-toggle="pill" href="#manage-contact">
                        Coming Soon
                     </a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>



   {{-- modal --}}
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Informasi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body" style="text-align: justify">
            Menu yang anda pilih tidak dapat dibuka <br>
            pastikan akun user anda terbuka dan <br>
            menu tersebut adalah kewenangan user anda
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a href="{{url('statususer')}}"> <button type="button" class="btn btn-primary"> check status
                  user</button> </a>
         </div>
      </div>
   </div>
</div>

<div class="modal fade" id="OK00" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Informasi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body" style="text-align: justify">
            Password berhasil diperbarui <br>
            Harap selalu mengingat Password Anda <br>
            Dan jangan berikan password anda kesiapapun <br>
            Terimakasih
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a href="{{url('statususer')}}"> <button type="button" class="btn btn-primary"> check status
                  user</button> </a>
         </div>
      </div>
   </div>
</div>

   <div class="col-lg-12">
      <div class="iq-edit-list-data">
         <div class="tab-content">
            <div class="tab-pane fade" id="personal-information" role="tabpanel">
               <div class="iq-card">
                  <div class="iq-card-header d-flex justify-content-between">
                     <div class="iq-header-title">
                        <h4 class="card-title">List Informasi Pribadi</h4>
                     </div>
                  </div>
                  <div class="iq-card-body">
                     <div class="card-body">
                        {{-- <form action="{{route('Edit_profil')}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="image">
                        <input type="submit" value="Upload">
                        </form> --}}
                     </div>
                     <form action="{{route('Edit_profil')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row align-items-center">
                           <div class="col-md-12">
                              <div class="profile-img-edit">
                                 <img class="profile-pic" src="{{asset('/storage/images/'.Auth::user()->image)}}"
                                    alt="profile-pic" style="width: 150px;height: 150px; padding: 10px; margin: 0px; ">
                                 <div class="p-image">
                                    <label for="file-upload">
                                       {{-- <i class="las la-bullseye" style="color: white; font-size:20px;"></i> --}}
                                        <i class="ri-pencil-line upload-button" style="color: white"></i>
                                    </label>
                                    <input id="file-upload" class="file-upload" type="file" name="image" />
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class=" row align-items-center">
                           <div class="form-group col-sm-6">
                              <label for="fname">Nama user</label>
                              <input type="text" class="form-control" id="fname" value="{{ Auth::user()->name }}"
                                 readonly>
                           </div>
                           <div class="form-group col-sm-6">
                              <label for="lname">Nomer Induk Pegawai</label>
                              <input type="text" class="form-control" id="lname" value="{{ Auth::user()->nip }}"
                                 readonly>
                           </div>
                           <div class="form-group col-sm-6">
                              <label for="uname">Unit Kerja</label>
                              <input type="text" class="form-control" id="uname"
                              @foreach ($unitbagian as $unitbagians)
                              value="{{$unitbagians->name}}"
                              @endforeach
                              readonly>
                           </div>
                           <div class="form-group col-sm-6">
                              <label for="cname">Jabatan:</label>
                              <input type="text" class="form-control" id="cname"
                                 value="{{ Auth::user()->jabatanlengkap }}" readonly>
                           </div>
                           <div class="form-group col-sm-6">
                              <label for="cname">Email:</label>
                              <input type="text" class="form-control" id="cname" value="{{ Auth::user()->email }}"
                                 readonly>
                           </div>
                           <div class="form-group col-sm-6">
                              <label for="cname">poto profil:</label>
                              <input type="text" class="form-control" id="cname" value="{{ Auth::user()->image }}"
                                 readonly>
                           </div>
                           {{-- <div class="form-group col-sm-6">
                              <label class="d-block">Gender:</label>
                              <div class="custom-control custom-radio custom-control-inline">
                                 <input type="radio" id="customRadio6" name="customRadio1" class="custom-control-input"
                                    checked="">
                                 <label class="custom-control-label" for="customRadio6"> Male </label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                 <input type="radio" id="customRadio7" name="customRadio1" class="custom-control-input">
                                 <label class="custom-control-label" for="customRadio7"> Female </label>
                              </div>
                           </div> --}}
                           {{-- <div class="form-group col-sm-6">
                              <label for="dob">Date Of Birth:</label>
                              <input type="date" class="form-control" id="dob" value="1984-01-24">
                           </div> --}}
                           {{-- <div class="form-group col-sm-6">
                              <label>Marital Status:</label>
                              <select class="form-control" id="mrgstatus">
                                 <option selected="">Single</option>
                                 <option>Married</option>
                                 <option>Widowed</option>
                                 <option>Divorced</option>
                                 <option>Separated </option>
                              </select>
                           </div> --}}
                           {{-- <div class="form-group col-sm-6">
                              <label>Age:</label>
                              <select class="form-control" id="age">
                                 <option>12-18</option>
                                 <option>19-32</option>
                                 <option selected="">33-45</option>
                                 <option>46-62</option>
                                 <option>63 > </option>
                              </select>
                           </div> --}}
                           {{-- <div class="form-group col-sm-6">
                              <label>Country:</label>
                              <select class="form-control" id="country">
                                 <option>Caneda</option>
                                 <option>Noida</option>
                                 <option selected="">USA</option>
                                 <option>India</option>
                                 <option>Africa</option>
                              </select>
                           </div> --}}
                           {{-- <div class="form-group col-sm-6">
                              <label>State:</label>
                              <select class="form-control" id="state">
                                 <option>California</option>
                                 <option>Florida</option>
                                 <option selected="">Georgia</option>
                                 <option>Connecticut</option>
                                 <option>Louisiana</option>
                              </select>
                           </div> --}}
                           {{-- <div class="form-group col-sm-12">
                              <label>Address:</label>
                              <textarea class="form-control" name="address" rows="5" style="line-height: 22px;">
37 Cardinal Lane
Petersburg, VA 23803
United States of America
Zip Code: 85001
                                             </textarea>
                           </div> --}}

                        </div>
                        {{-- <input type="submit" value="Upload"> --}}

                        <button type="submit" value="Upload" class="btn btn-primary mr-2">Submit</button>
                        <button type="reset" class="btn iq-bg-danger">Cancel</button>
                     </form>

                  </div>
               </div>
            </div>
            <div class="tab-pane fade active show" id="chang-pwd" role="tabpanel">
               <div class="iq-card">
                  <div class="iq-card-header d-flex justify-content-between">
                     <div class="iq-header-title">
                        <h4 class="card-title">Change Password</h4>
                           @if (\Session::has('success'))
                              {!! \Session::get('success') !!}
                           @endif
                     </div>
                  </div>
                  <div class="iq-card-body">

                     {{-- <form method="POST" action="{{ route('change.password') }}">

                     @csrf

                     @foreach ($errors->all() as $error)

                     <p class="text-danger">{{ $error }}</p>

                     @endforeach

                     <div class="form-group row">

                        <label for="password" class="col-md-4 col-form-label text-md-right">Current
                           Password</label>

                        <div class="col-md-6">

                           <input id="password" type="password" class="form-control" name="current_password"
                              autocomplete="current-password">

                        </div>

                     </div>

                     <div class="form-group row">

                        <label for="password" class="col-md-4 col-form-label text-md-right">New
                           Password</label>

                        <div class="col-md-6">

                           <input id="new_password" type="password" class="form-control" name="new_password"
                              autocomplete="current-password">

                        </div>

                     </div>

                     <div class="form-group row">

                        <label for="password" class="col-md-4 col-form-label text-md-right">New Confirm
                           Password</label>

                        <div class="col-md-6">

                           <input id="new_confirm_password" type="password" class="form-control"
                              name="new_confirm_password" autocomplete="current-password">

                        </div>

                     </div>

                     <div class="form-group row mb-0">

                        <div class="col-md-8 offset-md-4">

                           <button type="submit" class="btn btn-primary">

                              Update Password

                           </button>

                        </div>

                     </div>

                     </form> --}}

                     <form method="POST" action="{{ route('change.password') }}">

                        @csrf

                        @foreach ($errors->all() as $error)

                        <p class="text-danger">{{ $error }}</p>

                        @endforeach

                        {{-- <div class="form-group row">

                           <label for="password" class="col-md-4 col-form-label text-md-right">Current
                              Password</label>

                           <div class="col-md-6">

                              <input id="password" type="password" class="form-control" name="current_password"
                                 autocomplete="current-password">

                           </div>

                        </div> --}}

                        <div class="form-group">
                           <label for="password">Password Sekarang:</label>
                           {{-- <a href="javascripe:void();" class="float-right">Forgot Password</a> --}}
                           <input id="password" type="Password" class="form-control" name="current_password"
                              autocomplete="current-password" value="" placeholder="Masukan Password Baru">
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

                        </div>

                        {{-- <div class="form-group row">

                           <label for="password" class="col-md-4 col-form-label text-md-right">New
                              Password</label>

                           <div class="col-md-6">

                              <input id="new_password" type="password" class="form-control" name="new_password"
                                 autocomplete="current-password">

                           </div>

                        </div> --}}

                        <div class="form-group">
                           <label for="new_password">Password Baru:</label>
                           <input type="Password" class="form-control" id="new_password" name="new_password"
                              autocomplete="current-password" value="" placeholder="Masukan Password Baru">

                           <input type="checkbox" onclick="myFunctions()"> Show Password Baru

                           <script>
                              function myFunctions() {
                                 var x = document.getElementById("new_password");
                                 if (x.type === "password") {
                                    x.type = "text";
                                 } else {
                                    x.type = "password";
                                 }
                              }
                           </script>
                        </div>

                        {{-- <div class="form-group row">

                           <label for="password" class="col-md-4 col-form-label text-md-right">New Confirm
                              Password</label>

                           <div class="col-md-6">

                              <input id="new_confirm_password" type="password" class="form-control"
                                 name="new_confirm_password" autocomplete="current-password">

                           </div>

                        </div> --}}

                        <div class="form-group">
                           <label for="new_confirm_password">Confirm Password Baru:</label>
                           <input type="Password" class="form-control" id="new_confirm_password"
                              name="new_confirm_password" autocomplete="current-password" value=""
                              placeholder="Masukan Confirm Password Baru">
                           <input type="checkbox" onclick="myFunctionss()"> Show Confirm Password Baru

                           <script>
                              function myFunctionss() {
                                 var x = document.getElementById("new_confirm_password");
                                 if (x.type === "password") {
                                    x.type = "text";
                                 } else {
                                    x.type = "password";
                                 }
                              }
                           </script>
                        </div>

                        {{-- <div class="form-group row mb-0">

                           <div class="col-md-8 offset-md-4">

                              <button type="submit" class="btn btn-primary">

                                 Update Password

                              </button>

                           </div>

                        </div> --}}

                        <button type="submit" class="btn btn-primary mr-2">Update Password</button>
                        <button type="reset" class="btn iq-bg-danger">Cancel</button>
                     </form>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="emailandsms" role="tabpanel">
               <div class="iq-card">
                  <div class="iq-card-header d-flex justify-content-between">
                     <div class="iq-header-title">
                        {{-- <h4 class="card-title">Email and SMS</h4> --}}
                     </div>
                  </div>
                  <div class="iq-card-body">
                     {{-- <form>
                        <div class="form-group row align-items-center">
                           <label class="col-md-3" for="emailnotification">Email Notification:</label>
                           <div class="col-md-9 custom-control custom-switch">
                              <input type="checkbox" class="custom-control-input" id="emailnotification" checked="">
                              <label class="custom-control-label" for="emailnotification"></label>
                           </div>
                        </div>
                        <div class="form-group row align-items-center">
                           <label class="col-md-3" for="smsnotification">SMS Notification:</label>
                           <div class="col-md-9 custom-control custom-switch">
                              <input type="checkbox" class="custom-control-input" id="smsnotification" checked="">
                              <label class="custom-control-label" for="smsnotification"></label>
                           </div>
                        </div>
                        <div class="form-group row align-items-center">
                           <label class="col-md-3" for="npass">When To Email</label>
                           <div class="col-md-9">
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="email01">
                                 <label class="custom-control-label" for="email01">You have new
                                    notifications.</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="email02">
                                 <label class="custom-control-label" for="email02">You're sent a direct
                                    message</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="email03" checked="">
                                 <label class="custom-control-label" for="email03">Someone adds you as a
                                    connection</label>
                              </div>
                           </div>
                        </div>
                        <div class="form-group row align-items-center">
                           <label class="col-md-3" for="npass">When To Escalate Emails</label>
                           <div class="col-md-9">
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="email04">
                                 <label class="custom-control-label" for="email04"> Upon new order.</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="email05">
                                 <label class="custom-control-label" for="email05"> New membership
                                    approval</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                 <input type="checkbox" class="custom-control-input" id="email06" checked="">
                                 <label class="custom-control-label" for="email06"> Member
                                    registration</label>
                              </div>
                           </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button type="reset" class="btn iq-bg-danger">Cancle</button>
                     </form> --}}
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="manage-contact" role="tabpanel">
               <div class="iq-card">
                  <div class="iq-card-header d-flex justify-content-between">
                     <div class="iq-header-title">
                        {{-- <h4 class="card-title">Manage Contact</h4> --}}
                     </div>
                  </div>
                  <div class="iq-card-body">
                     {{-- <form>
                        <div class="form-group">
                           <label for="cno">Contact Number:</label>
                           <input type="text" class="form-control" id="cno" value="001 2536 123 458">
                        </div>
                        <div class="form-group">
                           <label for="email">Email:</label>
                           <input type="text" class="form-control" id="email" value="nikjone@demo.com">
                        </div>
                        <div class="form-group">
                           <label for="url">Url:</label>
                           <input type="text" class="form-control" id="url" value="https://getbootstrap.com">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button type="reset" class="btn iq-bg-danger">Cancle</button>
                     </form> --}}
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<script src="assets/js/jquery.min.js"></script>

@endsection