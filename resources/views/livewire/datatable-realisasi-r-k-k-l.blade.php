<div>

    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Mailoo Kon</title>

        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
        <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

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

        <style>
            nav svg {
                max-height: 20px;
            }

            table.dataTable th:nth-child(1) {
                width: 30px;
                max-width: 30px;
                word-break: break-all;
                white-space: pre-line;
            }

            table.dataTable th:nth-child(2) {
                width: 40px;
                max-width: 40px;
                word-break: break-all;
                white-space: pre-line;
            }

            table.dataTable th:nth-child(3) {
                width: 50px;
                max-width: 50px;
                word-break: break-all;
                white-space: pre-line;
            }

            table.dataTable th:nth-child(4) {
                width: 200px;
                max-width: 200px;
                word-break: break-all;
                white-space: pre-line;
            }

            table.dataTable th:nth-child(5) {
                width: 200px;
                max-width: 200px;
                word-break: break-all;
                white-space: pre-line;
            }

            table.dataTable th:nth-child(6) {
                width: 150px;
                max-width: 150px;
                word-break: break-all;
                white-space: pre-line;
            }

            table.dataTable th:nth-child(7) {
                width: 100px;
                max-width: 100px;
                word-break: break-all;
                white-space: pre-line;
            }

            table.dataTable th:nth-child(8) {
                width: 100px;
                max-width: 100px;
                word-break: break-all;
                white-space: pre-line;
            }

            table.dataTable th:nth-child(9) {
                width: 50px;
                max-width: 50px;
                word-break: break-all;
                white-space: pre-line;
            }

            div.dataTables_wrapper {
                width: 2000px;
                margin: 0 auto;
            }

            .text-wrap {
                white-space: normal;
            }

            .width-200 {
                width: 200px;
            }

            .text-wrap {
                white-space: normal;
            }

            .width-200 {
                width: 200px;
            }
        </style>

        @livewireStyles

    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{session('message') }}

                    </div>

                    @endif

                    <div>
                        <a href="#advance-filter" data-toggle="collapse">
                            <div style="text-align: right">Advanced Search</div>
                        </a>
                        <ul id="advance-filter" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">

                            <li>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label><strong>Status :</strong></label>
                                            <select id='status' class="form-control" style="width: 100%">
                                                <option value="">--Select Status--</option>
                                                <option value="1">Active</option>
                                                <option value="0">Deactive</option>
                                                <option value="2">Kukuh Binanto Ganteng</option>
                                            </select>

                                            <label><strong>Status ii:</strong></label>
                                            <select id='status_ii' class="form-control" style="width: 100%">
                                                <option value="">--Select Status ii--</option>
                                                <option value="1">Active</option>
                                                <option value="0">deactive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <br>

                    <div class="table-responsive dataTables_header">
                        <table class="display nowrap  data-table" id="mytable" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>no</th>
                                    <th>id</th>
                                    <th>asal surat</th>
                                    <th>tertanda</th>
                                    <th>nomor surat</th>
                                    <th>tanggal surat</th>
                                    <th>perihal surat</th>
                                    <th>teruntuk</th>
                                    <th>dokumen</th>
                                </tr>
                            </thead>

                            <tbody>

                            </tbody>
                        </table>
                    </div>

                </div>

            </div>

        </div>

        @livewireScripts

        <link rel="stylesheet" type="text/css"
            href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">

        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js">
        </script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js   "></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>

        <script type="text/javascript">
            $(function() {
                // configure datetime
                var currentdate = new Date();
                var datetime = "Tanggal : " + currentdate.getDate() + "-" +
                    (currentdate.getMonth() + 1) + "-" +
                    currentdate.getFullYear() + " Pada Jam " +
                    currentdate.getHours() + ":" +
                    currentdate.getMinutes() + ":" +
                    currentdate.getSeconds();
                // end configure datetime
                var table = $('.data-table').DataTable({
                    dom: 'lBfrtip',
                    buttons: [
                        'copy',
                        {
                            extend: 'excel',
                            messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
                        },
                        {
                            extend: 'pdf',
                            title: 'test',
                            messageTop: 'Data Surat Masuk Biro Perlengkapan Mahkamah Agung Republik Indonesia' +
                                '\n' +
                                '\n' +
                                datetime, // call configure datetime
                            messageBottom: null
                        },
                        {
                            extend: 'csv',
                            messageBottom: null
                        },
                        {
                            extend: 'print',
                            messageTop: function() {
                                printCounter++;
                                if (printCounter === 1) {
                                    return 'This is the first time you have printed this document.';
                                } else {
                                    return 'You have printed this document ' + printCounter +
                                        ' times';
                                }
                            },
                            messageBottom: null
                        }
                    ],
                    lengthMenu: [
                        [10, 25, 50, 100, 250, 500, -1],
                        ['+10', '+25', '+50', '+100', '+250', '+500', 'semua']
                    ],
                    processing: true,
                    serverSide: true,
                    ordering: true,
                    order: [
                        [0, 'asc']
                    ],
                    ajax: {
                        url: "{{ route('users.index') }}",
                        data: function(d) {
                            d.status = $('#status').val(),
                                d.status_ii = $('#status_ii').val(),
                                d.search = $('input[type="search"]').val()
                        }
                    },
                    columns: [{
                            data: null,
                            class: 'align-center',
                            orderable: false,
                            searchable: false,
                            render: function(data, type, row, meta) {
                                return meta.row + meta.settings._iDisplayStart + 1;
                            }
                        },
                        {
                            data: 'id',
                            name: 'id',
                        },
                        {
                            data: 'asal_surat',
                            name: 'asal_surat'
                        },
                        {
                            data: 'pejabat_pengirim_surat',
                            name: 'pejabat_pengirim_surat',
                        },
                        {
                            data: 'nomor_surat',
                            name: 'nomor_surat'
                        },
                        {
                            data: 'tanggal_surat',
                            name: 'tanggal_surat',
                        },
                        {
                            data: 'perihal_surat',
                            name: 'perihal_surat',
                        },
                        {
                            data: 'surat_ditujukan_kepada',
                            name: 'surat_ditujukan_kepada',
                        },
                        {
                            data: 'pdf_surat',
                            name: 'pdf_surat',
                        },
                    ],
                    columnDefs: [{
                        render: function(data, type, full, meta) {
                            return "<div class='text-wrap width-200'>" + data + "</div>";
                        },
                        targets: [2, 6, 8],
                    }],
                });
                $('#status').change(function() {
                    table.draw();
                });
                $('#status_ii').change(function() {
                    table.draw();
                });
            });
        </script>

        {{-- <script>
            $(document).ready(function() {
                $('#mytable thead tr').clone(true).appendTo('#mytable thead');
                $('#mytable thead tr:eq(1) th').each(function(i) {
                    var title = $(this).text();
                    $(this).html('<input type="text" placeholder=" cari ' + title +
                        ' ... " style="width: 100%" />');
                    $('input', this).on('keyup change', function() {
                        if (table.column(i).search() !== this.value) {
                            table
                                .column(i)
                                .search(this.value)
                                .draw();
                        }
                    });
                });
                var table = $('#mytable').DataTable({
                    retrieve: true,
                    orderCellsTop: true,
                    responsive: true,
                    scrollX: true,
                    fixedHeader: true,
                });
            });
        </script> --}}

        <script>
            $(document).ready(function() {
                $('#mytable thead tr').clone(true).appendTo('#mytable thead');
                $('#mytable thead tr:eq(1) th').each(function(i) {
                    var title = $(this).text();
                    $(this).html('<input type="text" style="width: 100%" />');
                    $('input', this).on('keyup change', function() {
                        if (table.column(i).search() !== this.value) {
                            table
                                .column(i)
                                .search(this.value)
                                .draw();
                        }
                    });
                });
                var table = $('#mytable').DataTable({
                    retrieve: true,
                    orderCellsTop: true,
                    responsive: true,
                    scrollX: true,
                    fixedHeader: true,
                });
            });
        </script>

        {{-- <script>
            $('#mytable').dataTable({
                "columnDefs": [{
                    "width": "20%",
                    "targets": 0
                }]
            });
        </script> --}}

    </body>

</div>