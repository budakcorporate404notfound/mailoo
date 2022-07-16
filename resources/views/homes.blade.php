@extends('layouts.app')

@section('nama_menu')

<!DOCTYPE html>
<html lang="en">
<head>
   <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/fullcalendar/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
</head>
</head>
<body>

 @section('content')
    {{-- <div class="col-md-9">
        <div class="iq-card">
            <div class="container">
                <h1>Laravel FullCalender Tutorial Example - ItSolutionStuff.com</h1>
                <div id='calendar'></div>
            </div>
        </div>
    </div> --}}

    @if(!empty(Session::get('errcode')) && Session::get('errcode') == 5)
    <script>
        $(function() {
            $('#myModal').modal('show');
        });
    </script>
    @endif

    {{-- modal --}}
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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

    <div class="col-md-9">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Selamat datang {{Auth::user()->name}} </h4>

                </div>
                {{-- <div class="iq-card-header-toolbar d-flex align-items-center">
                    <a href="#" class="btn btn-primary"><i class="ri-add-line mr-2"></i>Book
                        Appointment</a>
                </div> --}}
            </div>
            <br>
             <h6> &nbsp;&nbsp;&nbsp;&nbsp; sebagai {{Auth::user()->jabatanlengkap}} </h6>
               <h6> &nbsp;&nbsp;&nbsp;&nbsp; tahun anggaran {{Session::get('tahunanggaran')}} </h6>
            <div class="iq-card-body">
                <div id='calendar'></div>
            </div>
        </div>
    </div>



</body>

</html>
@endsection
