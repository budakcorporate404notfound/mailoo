@extends('layouts.app')

@section('nama_menu')

<h5 class="mb-0">
    Kalender Kegiatan
</h5>

<nav aria-label="breadcrumb">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Kalender Kegiatan</a></li>
        <li class="breadcrumb-item active" aria-current="page">Kalender Kegiatan</li>
    </ul>
</nav>
@endsection

<!DOCTYPE html>
<html>

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
                    <h4 class="card-title">Kalender Kegiatan</h4>
                </div>
                {{-- <div class="iq-card-header-toolbar d-flex align-items-center">
                    <a href="#" class="btn btn-primary"><i class="ri-add-line mr-2"></i>Book
                        Appointment</a>
                </div> --}}
            </div>
            <div class="iq-card-body">
                <div id='calendar'></div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            var SITEURL = "{{ url('/') }}";
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var calendar = $('#calendar').fullCalendar({
                editable: true,
                events: SITEURL + "/fullcalender",
                displayEventTime: false,
                editable: true,
                eventRender: function(event, element, view) {
                    if (event.allDay === 'true') {
                        event.allDay = true;
                    } else {
                        event.allDay = false;
                    }
                },
                selectable: true,
                selectHelper: true,
                select: function(start, end, allDay) {
                    switch ({{Auth::user()->jabatan}}) {
                        case 5 :
                            var title = prompt('Judul Kegiatan:');
                            if (title) {
                                var start = $.fullCalendar.formatDate(start, "Y-MM-DD");
                                var end = $.fullCalendar.formatDate(end, "Y-MM-DD");
                                $.ajax({
                                    url: SITEURL + "/fullcalenderAjax",
                                    data: {
                                        title: title,
                                        start: start,
                                        end: end,
                                        type: 'add'
                                    },
                                    type: "POST",
                                    success: function(data) {
                                        displayMessage("catatan berhasil dibuat");
                                        calendar.fullCalendar('renderEvent', {
                                            id: data.id,
                                            title: title,
                                            start: start,
                                            end: end,
                                            allDay: allDay
                                        }, true);
                                        calendar.fullCalendar('unselect');
                                    },
                                });
                            }
                            break;

                    case 6 :
                        var title = prompt('Judul Kegiatan:');
                        if (title) {
                            var start = $.fullCalendar.formatDate(start, "Y-MM-DD");
                            var end = $.fullCalendar.formatDate(end, "Y-MM-DD");
                            $.ajax({
                                url: SITEURL + "/fullcalenderAjax",
                                data: {
                                    title: title,
                                    start: start,
                                    end: end,
                                    type: 'add'
                                },
                                type: "POST",
                                success: function(data) {
                                    displayMessage("catatan berhasil dibuat");
                                    calendar.fullCalendar('renderEvent', {
                                        id: data.id,
                                        title: title,
                                        start: start,
                                        end: end,
                                        allDay: allDay
                                    }, true);
                                    calendar.fullCalendar('unselect');
                                },
                            });
                        }
                        break;
                        default:

                        break;
                    }

                },
                eventDrop: function(event, delta) {
                    switch ({{Auth::user()->jabatan}}) {
                        case 5:
                            var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                            var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
                            $.ajax({
                                url: SITEURL + '/fullcalenderAjax',
                                data: {
                                    title: event.title,
                                    start: start,
                                    end: end,
                                    id: event.id,
                                    type: 'update'
                                },
                                type: "POST",
                                success: function(response) {
                                    displayMessage("catatan berhasil diperbarui");
                                }
                            });
                        break;

                        case 6:
                            var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                            var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
                            $.ajax({
                                url: SITEURL + '/fullcalenderAjax',
                                data: {
                                    title: event.title,
                                    start: start,
                                    end: end,
                                    id: event.id,
                                    type: 'update'
                                },
                                type: "POST",
                                success: function(response) {
                                    displayMessage("catatan berhasil diperbarui");
                                }
                            });
                        break;

                        default:
                        break;
                    }
                },
                eventClick: function(event) {

                    switch ({{Auth::user()->jabatan}}) {
                        case 5:
                            var deleteMsg = confirm("Apakah anda ingin menghapus kegiatan ini \n\nrincian kegiatan : \n"  + event.title);
                            if (deleteMsg) {
                                $.ajax({
                                    type: "POST",
                                    url: SITEURL + '/fullcalenderAjax',
                                    data: {
                                        id: event.id,
                                        type: 'delete'
                                    },
                                    success: function(response) {
                                        calendar.fullCalendar('removeEvents', event.id);
                                        displayMessage("catatan berhasil dihapus");
                                    }
                                });
                            }
                        break;

                        case 6:
                            var deleteMsg = confirm("Apakah anda ingin menghapus kegiatan ini \n\nrincian kegiatan : \n" + event.title);
                            if (deleteMsg) {
                                $.ajax({
                                    type: "POST",
                                    url: SITEURL + '/fullcalenderAjax',
                                    data: {
                                        id: event.id,
                                        type: 'delete'
                                    },
                                    success: function(response) {
                                        calendar.fullCalendar('removeEvents', event.id);
                                        displayMessage("catatan berhasil dihapus");
                                    }
                                });
                            }
                        break;

                        default:
                        break;
                    }


                }
            });
        });

        function displayMessage(message) {
            toastr.info(message, 'Hi, Mailoovers');
        }

        function displayMessageFailure(message) {
            toastr.error(message, 'Hi, Mailoovers');
        }
    </script>

</body>

</html>
@endsection