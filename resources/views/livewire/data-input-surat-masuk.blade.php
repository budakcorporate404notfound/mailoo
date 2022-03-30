@extends('layouts.app')

<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

<style>
    thead input {
        width: 100%;
    }
</style>

<div>


    @include('livewire.tambah-surat-masuk');
    {{-- @include('livewire.update'); --}}

    @section('nama_menu')

    <h5 class="mb-0">
        Input Surat
    </h5>

    <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a>Input Surat</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Input SUrat Masuk</li>
        </ul>
    </nav>
    @endsection

    <section>
        <style>
            nav svg {
                max-height: 20px;
            }
        </style>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{session('message') }}

                    </div>

                    @endif

                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label><strong>Status :</strong></label>
                                <select id='status' class="form-control" style="width: 200px">
                                    <option value="">--Select Status--</option>
                                    <option value="1">Active</option>
                                    <option value="0">Deactive</option>
                                    <option value="2">Kukuh Binanto</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label><strong>Status ii:</strong></label>
                                <select id='status_ii' class="form-control" style="width: 200px">
                                    <option value="">--Select Status ii--</option>
                                    <option value="1">Active</option>
                                    <option value="0">deactive</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-8">
                                    <h3>Input Surat Masuk
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#addStudentsModal">
                                            Tambah Data Surat Masuk
                                        </button>
                                    </h3>
                                </div>

                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="search..."
                                        wire:model="searchTerm">
                                </div>
                            </div>

                        </div>

                    </div>

                    <table class="table table-bordered data-table" id="mytable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th width="100px">Status</th>
                                <th width="100px">Status ii</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>

                </div>

            </div>

        </div>
    </section>

    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">

    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js   "></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>

    <script type="text/javascript">
        $(function() {
            var table = $('.data-table').DataTable({
                dom: 'lBfrtip',
                buttons: [
                    'copy', 'excel', 'pdf', 'csv', 'print'
                ],
                lengthMenu: [
                    [10, 25, 50, 100, 1000, -1],
                    ['10 rows', '25 rows', '50 rows', '100 rows', '1000 rows', 'All']
                ],
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('users.index') }}",
                    data: function(d) {
                        d.status = $('#status').val(),
                            d.status_ii = $('#status_ii').val(),
                            d.search = $('input[type="search"]').val()
                    }
                },
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'status_ii',
                        name: 'status_ii'
                    },
                ]
            });
            $('#status').change(function() {
                table.draw();
            });
            $('#status_ii').change(function() {
                table.draw();
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#mytable thead tr').clone(true).appendTo('#mytable thead');
            $('#mytable thead tr:eq(1) th').each(function(i) {
                var title = $(this).text();
                $(this).html('<input type="text" placeholder=" Search ' + title + '" />');
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
                fixedHeader: true
            });
        });
    </script>
</div>
