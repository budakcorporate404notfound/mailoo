@extends('layouts.app')

@section('nama_menu')

<h5 class="mb-0">
    Dashboard II
</h5>

<nav aria-label="breadcrumb">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard II</li>
    </ul>
</nav>
@endsection

@section('content')

<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>

    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js   "></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
</head>
<style type="text/css">
    /* .container {
        margin-top: 150px;
    }

    h4 {
        margin-bottom: 30px;
    }


    thead input {
        width: 100%;
    } */


    .table.dataTable th {
        white-space: nowrap;
        overflow: hidden;
    }

    .table.dataTable td {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    tfoot input {
        width: 100%;
    }

    }
</style>

<body>

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

    <div class="col-sm-12">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Dashboard II</h4>

                    <div id="response"></div>

                </div>

                {{-- <div>
                    <br>
                    <a class="btn btn-primary rounded-pill mb-3" href="javascript:void(0)" id="createNewProduct"
                        title="tambah referensi"> + </a>
                </div> --}}

            </div>
            <div class="iq-card-body">
                <div class="table-responsive">
                    {{-- <table class="table table-bordered data-table"> --}}
                    <table id="datatable" class="table table-striped table-bordered data-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>kode anggaran</th>
                                <th>kode uraian kegiatan</th>
                                <th>nama uraian kegiatan</th>
                                <th>sub menu uraian kegiatan</th>
                                <th>kelompok pagu anggaran</th>
                                <th>pagu</th>
                                <th>realisasi</th>
                                <th>sisa</th>
                                <th>persentase (%)</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                        <tfoot>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ajaxModel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modelHeading"></h4>
                </div>
                <div class="modal-body">
                    <form id="productForm" name="productForm" class="form-horizontal">
                        <input type="hidden" name="product_id" id="product_id">

                        <div class="form-row">
                            <div class="col">
                                <label for="bagian"> nama bagian <span style="color:red">read
                                        only</span></label>
                                <input id="bagian" name="bagian" required="" readonly placeholder="bagian ..."
                                    class="form-control">
                                @error('bagian')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="t_realisasi_rkkl_id">id realisasi rkkl <span style="color:red">read
                                        only</span></label>
                                <input id="t_realisasi_rkkl_id" name="t_realisasi_rkkl_id" required="" readonly
                                    placeholder="realiasi rkkl id ..." class="form-control">
                                @error('nama_pelaksana')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror
                            </div>

                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col">
                                <label for="ref_keuangan_uraian_kegiatan_id"> referensi keuangan uraian kegiatan <span
                                        style="color:red;font-weight:bold">*</span></label>
                                <br>
                                <select id="ref_keuangan_uraian_kegiatan_id" name="ref_keuangan_uraian_kegiatan_id"
                                    required>
                                    <option value="">referensi keuangan uraian kegiatan ...</option>
                                    @foreach($datas as $data)
                                    <option value="{{ $data->id}}">
                                        {{$data->nama_uraian_kegiatan}} - {{$data->nama_sub_menu_uraian_kegiatan}} -
                                        {{$data->kelompok_pagu}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                        </div>

                        <br>

                        <div class="div form-row">
                            <div class="col">
                                <label for="nilai_pagu_realisasi">nilai pagu realisasi</label>
                                <input id="nilai_pagu_realisasi" name="nilai_pagu_realisasi"
                                    placeholder="nilai_pagu_realisasi ..." class="form-control">
                                @error('nilai_pagu_realisasi')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="form-row">
                            <div class="col">
                                <label for="jabatan">jabatan<span style="color:red;font-weight:bold">*</span></label>
                                <input type="text" id="jabatan" name="jabatan" required="" placeholder="jabatan ..."
                                    class="form-control">
                                @error('jabatan')
                                <span class="text-danger"> {{$message}} </span>
                        @enderror
                </div>

                <div class="col">
                    <label for="tempat_pelaksana">tempat pelaksana <span
                            style="color:red;font-weight:bold">*</span></label>
                    <br>
                    <select id="tempat_pelaksana" name="tempat_pelaksana" required>
                        <option value="">tempat pelaksana ...</option>
                        @foreach($tempats as $tempat)
                        <option value="{{ $tempat->nama_satuankerja}}">
                            {{$tempat->nama_satuankerja}}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div> --}}

        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save
                changes</button>
        </div>

        </form>
    </div>
    </div>
    </div>
    </div>

    <div class="modal fade" id="ajaxModelx" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modelHeadingx"></h4>
                </div>
                <div class="modal-body">

                    <div class="container mt-5">
                        <div class="row">
                            <form id="productFormx" name="productFormx" class="form-horizontal">

                                <input type="hidden" name="product_id" id="product_idx">

                                <div class="form-group">
                                    <label class="col-sm-12 control-label">nama pelaksana</label>
                                    <div class="col-sm-12">
                                        <input type="text" id="nama_pelaksana" name="nama_pelaksana" required=""
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-12 control-label">nip</label>
                                    <div class="col-sm-12">
                                        <input type="text" id="nip" name="nip" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-12 control-label">golongan</label>
                                    <div class="col-sm-12">
                                        <input type="text" id="golongan" required="" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-12 control-label">jabatan</label>
                                    <div class="col-sm-12">
                                        <input type="text" id="jabatan" name="jabatan" required="" class="form-control">
                                    </div>
                                </div>

                                {{-- <div class="form-group">
                                    <label class="col-sm-12 control-label">tempat pelaksana</label>
                                    <div class="col-sm-12">
                                        <select class="livesearch form-control" style="width: 100%"
                                            name="tempat_pelaksana" id="livesearch"></select>
                                    </div>
                                </div> --}}

                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary" id="saveBtnx" value="create">Save
                                        changes</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ajaxModelz" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modelHeadingz"></h4>
                </div>
                <div class="modal-body">

                    <div class="container mt-5">
                        <div class="row">
                            <form id="productFormz" name="productFormz" class="form-horizontal">
                                <input type="hidden" name="product_id" id="product_idz">

                                <div class="form-group">
                                    <label class="col-sm-12 control-label">nama pembuat laporan</label>
                                    <div class="col-sm-12">
                                        <select class="livesearch2 form-control" style="width: 100%" name="user"
                                            id="livesearch2"></select>
                                    </div>
                                </div>

                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary" id="saveBtnz" value="create">Save
                                        changes</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ajaxModely" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modelHeadingy"></h4>
                </div>
                <div class="modal-body">

                    <div class="container mt-5">
                        <div class="row">
                            <form action="/realisasirkkl/storey" method="POST" enctype="multipart/form-data"
                                id="productFormy" name="productFormy" class="form-horizontal">
                                {{ csrf_field() }}

                                <input type="hidden" name="product_id" id="product_idy">

                                <div class="form-group">
                                    <b>File Gambar</b><br />
                                    <input type="file" name="file" id="file">
                                </div>

                                <div class="form-group">
                                    <b>Keterangan</b>
                                    <textarea class="form-control" name="keterangan"></textarea>
                                </div>

                                <div class="form-group">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                                            role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                                            style="width: 0%"></div>
                                    </div>
                                </div>

                                <div class="col-sm-offset-2 col-sm-10">
                                    {{-- <button type="submit" class="btn btn-primary"  >Save
                                        changes</button> --}}
                                    <button type="submit" class="btn btn-primary" id="saveBtny">Save
                                        changes</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>

<script>
    $(document).ready(function() {
        // Initialize select2
        $("#ref_keuangan_uraian_kegiatan_id").select2();
    });
</script>

<script type="text/javascript">
    $('.livesearch').select2({
        placeholder: 'Pilih nama pembuat laporan ...',
        ajax: {
            url: '/ajax-autocomplete-search',
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                return {
                    results: $.map(data, function(item) {
                        return {
                            text: item.nama_satuankerja,
                            id: item.nama_satuankerja,
                            // value : item.nama_satuankerja
                        }
                    })
                };
            },
            cache: true
        }
    });
</script>

<script type="text/javascript">
    $('.livesearch2').select2({
        placeholder: 'Pilih nama pembuat laporan ...',
        ajax: {
            url: '/ajax-autocomplete-search2',
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                return {
                    results: $.map(data, function(item) {
                        return {
                            text: item.name,
                            id: item.name,
                            // value : item.nama_satuankerja
                        }
                    })
                };
            },
            cache: true
        }
    });
</script>

<script type="text/javascript">
    $('.livesearch3').select2({
        placeholder: 'Pilih pagu anggaran ...',
        ajax: {
            url: '/ajax-autocomplete-search3',
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                return {
                    results: $.map(data, function(item) {
                        return {
                            text: item.nama_sub_menu_uraian_kegiatan,
                            id: item.id,
                            // value : item.nama_satuankerja
                        }
                    })
                };
            },
            cache: true
        }
    });
</script>

<script type="text/javascript">
    $(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var table = $('.data-table').DataTable({
            dom: 'lBfrtip',
            buttons: [
                'copy', 'excel', 'pdf', 'csv', 'print'
            ],
            autoWidth: true,
            processing: true,
            serverSide: true,
            // scrollX: true,
            ajax: "{{ route('dashboard_2.index') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'id',
                    name: 'ref_keuangan_uraian_kegiatan.id',
                    searchable: true
                },
                {
                    data: 'kode_uraian_kegiatan',
                    name: 'ref_keuangan_uraian_kegiatan.kode_uraian_kegiatan',
                    searchable: true
                },
                {
                    data: 'nama_uraian_kegiatan',
                    name: 'ref_keuangan_uraian_kegiatan.nama_uraian_kegiatan',
                    searchable: true
                },
                {
                    data: 'nama_sub_menu_uraian_kegiatan',
                    name: 'ref_keuangan_uraian_kegiatan.nama_sub_menu_uraian_kegiatan',
                    searchable: true
                },
                {
                    data: 'kelompok_pagu',
                    name: 'ref_keuangan_uraian_kegiatan.kelompok_pagu',
                    searchable: true
                },
                {
                    data: 'pagu_anggaran',
                    name: 'pagu_anggaran',
                    searchable: true
                },
                {
                    data: 'nilai_pagu_realisasi',
                    name: 't_realisasi_pagu_rkkl.nilai_pagu_realisasi',
                    searchable: true
                },
                {
                    data: 'sisa',
                    name: 'sisa',
                    searchable: false
                },
                {
                    data: 'persen',
                    name: 'persen',
                    searchable: false
                },
            ],
            // initComplete: function() {
            //     this.api().columns().every(function() {
            //         var column = this;
            //         var select = $('<select><option value=""></option></select>')
            //             .appendTo($(column.footer()).empty())
            //             .on('change', function() {
            //                 var val = $.fn.dataTable.util.escapeRegex(
            //                     $(this).val()
            //                 );
            //                 column
            //                     .search(val ? '^' + val + '$' : '', true, false)
            //                     .draw();
            //             });
            //         column.data().unique().sort().each(function(d, j) {
            //             select.append('<option value="' + d + '">' + d +
            //                 '</option>')
            initComplete: function() {
                this.api().columns().every(function() {
                    var column = this;
                    var input = document.createElement("input");
                    $(input).appendTo($(column.footer()).empty())
                        .on('change', function() {
                            column.search($(this).val(), false, true, true).draw();
                        });
                });
            },

            footerCallback: function(row, data, start, end, display) {
                var api = this.api();
                // Remove the formatting to get integer data for summation
                var intVal = function(i) {
                    return typeof i === 'string' ? i.replace(/[\$,]/g, '') * 1 : typeof i ===
                        'number' ? i : 0;
                };
                // Total over all pages
                total = api
                    .column(7)
                    .data()
                    .reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);
                // Total over this page
                pageTotal = api
                    .column(7, {
                        page: 'current'
                    })
                    .data()
                    .reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);
                // Update footer
                $(api.column(7).header()).html('realisasi' + '<br>' + total);
                total_1 = api
                    .column(6)
                    .data()
                    .reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);
                // Total over this page
                pageTotal_1 = api
                    .column(6, {
                        page: 'current'
                    })
                    .data()
                    .reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);
                // Update footer
                $(api.column(6).header()).html('pagu' + '<br>' + total_1);
                total_2 = api
                    .column(8)
                    .data()
                    .reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);
                // Total over this page
                pageTotal_2 = api
                    .column(8, {
                        page: 'current'
                    })
                    .data()
                    .reduce(function(a, b) {
                        return intVal(a) + intVal(b);
                    }, 0);
                // Update footer
                $(api.column(8).header()).html('sisa' + '<br>' + total_2);

                total_3 = api
                    .column(9)
                    .data()
                    .reduce(function(a, b) {
                   return intVal(a) + intVal(b);
                    }, 0);
                // Total over this page
                pageTotal_3 = api
                    .column(9, {
                        page: 'current'
                    })
                    .data()
                    .reduce(function(a, b) {
                    return intVal(a) + intVal(b);
                    }, 0);

                //count row
                count_row_3 = api.rows().count();

                // Update footer
                hasilakhir = pageTotal/pageTotal_1 * 100;
                hasil = hasilakhir.toFixed(2);

                $(api.column(9).header()).html('persentase (%)' + '<br>' + hasil  + '%');
            },
        });
        $('#createNewProduct').click(function() {
            $('#saveBtn').val("create-product");
            $('#product_id').val('');
            $('#productForm').trigger("reset");
            $('#modelHeading').html("Tambah referensi");
            $('#ajaxModel').modal('show');
        });
        $('body').on('click', '.editProduct', function() {
            var product_id = $(this).data('id');
            $.get("{{ route('rincianpengeluaran.index') }}" + '/' + product_id + '/edit', function(
                data) {
                $('#modelHeading').html("edit rincian pengeluaran");
                $('#saveBtn').val("edit-user");
                $('#ajaxModel').modal('show');
                $('#product_id').val(data.id);
                $('#bagian').val(data.bagian);
                $('#t_realisasi_rkkl_id').val(data.t_realisasi_rkkl_id);
                $('#ref_keuangan_uraian_kegiatan_id').val(data.ref_keuangan_uraian_kegiatan_id);
                $('#nilai_pagu_realisasi').val(data.nilai_pagu_realisasi);
            })
        });
        $('body').on('click', '.editProductx', function() {
            var product_id = $(this).data('id');
            $.get("{{ route('realisasirkkl.index') }}" + '/' + product_id + '/edit', function(data) {
                $('#modelHeadingx').html("Tambah tempat Pelaksanaan");
                $('#saveBtnx').val("edit-user");
                $('#ajaxModelx').modal('show');
                $('#product_idx').val(data.id);
                $('#nama_pelaksana').val(data.nama_pelaksana);
                $('#nip').val(data.nip);
                $('#golongan').val(data.golongan);
                $('#jabatan').val(data.jabatan);
                $('#tempat_pelaksana').val(data.tempat_pelaksana);
            })
        });
        $('body').on('click', '.editProductz', function() {
            var product_id = $(this).data('id');
            $.get("{{ route('realisasirkkl.index') }}" + '/' + product_id + '/edit', function(data) {
                $('#modelHeadingz').html("Tambah Pembuat Laporan");
                $('#saveBtnz').val("edit-user");
                $('#ajaxModelz').modal('show');
                $('#product_idz').val(data.id);
                $('#user').val(data.user);
                // $('#nip').val(data.nip);
                // $('#golongan').val(data.golongan);
                // $('#jabatan').val(data.jabatan);
                // $('#tempat_pelaksana').val(data.tempat_pelaksana);
            })
        });
        $('body').on('click', '.editProducty', function() {
            var product_id = $(this).data('id');
            $.get("{{ route('realisasirkkl.index') }}" + '/' + product_id + '/edit', function(data) {
                $('#modelHeadingy').html("Tambah Pembuat Laporan");
                $('#saveBtny').val("edit-user");
                $('#ajaxModely').modal('show');
                $('#product_idy').val(data.id);
                $('#file').val(data.file);
                $('#keterangan').val(data.keterangan);
            })
        });
        $("#productForm").validate({
            // Specify validation rules
            rules: {
                // The key name on the left side is the name attribute
                // of an input field. Validation rules are defined
                // on the right side
                t_realisasi_rkkl_id: "required",
                nama_pelaksana: "required",
                jabatan: "required",
                tempat_pelaksana: "required"
            },
        });
        $('#saveBtn').click(function(e) {
            if ($("#productForm").valid()) {
                e.preventDefault();
                $(this).html('Sending..');
                $.ajax({
                    data: $('#productForm').serialize(),
                    url: "{{ route('rincianpengeluaran.store') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function(data) {
                        if (data.success) {
                            $('#productForm').trigger("reset");
                            $('#ajaxModel').modal('hide');
                            $("#ref_keuangan_uraian_kegiatan_id").val(null).trigger(
                                "change");
                            $('#saveBtn').html('Save Changes');
                            $('#response').html(
                                '<button type="button" class="btn mb-3 btn-info rounded-pill"><i class="ri-heart-fill"></i> perubahan data pengeluaran berhasil <i class="ri-heart-fill"></i></button>'
                            );
                            $("#response").fadeTo(5000, 500).slideUp(500, function() {
                                $("#response").slideUp(500);
                            });
                            table.draw();
                        } else {
                            $('#productForm').trigger("reset");
                            $('#ajaxModel').modal('hide');
                            $("#ref_keuangan_uraian_kegiatan_id").val(null).trigger(
                                "change");
                            $('#saveBtn').html('Save Changes');
                            $('#response').html(
                                '<button type="button" class="btn mb-3 btn-danger rounded-pill"><i class="las la-skull-crossbones"></i> perubahan data pengeluaran gagal <i class="las la-skull-crossbones"></i></button> <button type="button" class="btn mb-3 btn-warning rounded-pill"><i class="las la-exclamation-triangle"></i> pastikan sisa anggaran mencukupi <i class="las la-exclamation-triangle"></i></button>'
                            );
                            $("#response").fadeTo(5000, 500).slideUp(500, function() {
                                $("#response").slideUp(500);
                            });
                            table.draw();
                        }
                    },
                    error: function(data) {
                        console.log('Error:', data);
                        $('#saveBtn').html('Save Changes');
                    }
                });
            }
        });
        $('#saveBtnx').click(function(e) {
            e.preventDefault();
            $(this).html('Sending..');
            $.ajax({
                data: $('#productFormx').serialize(),
                url: "{{ route('rincianpelaksanaan.storex') }}",
                type: "POST",
                dataType: 'json',
                success: function(data) {
                    $('#productFormx').trigger("reset");
                    $('#ajaxModelx').modal('hide');
                    $('#saveBtnx').html('Save Changes');
                    table.draw();
                },
                error: function(data) {
                    console.log('Error:', data);
                    $('#saveBtnx').html('Save Changes');
                }
            });
        });
        $('#saveBtnz').click(function(e) {
            e.preventDefault();
            $(this).html('Sending..');
            $.ajax({
                data: $('#productFormz').serialize(),
                url: "{{ route('rincianpelaksanaan.storez') }}",
                type: "POST",
                dataType: 'json',
                success: function(data) {
                    $('#productFormz').trigger("reset");
                    $('#ajaxModelz').modal('hide');
                    $('#saveBtnz').html('Save Changes');
                    table.draw();
                },
                error: function(data) {
                    console.log('Error:', data);
                    $('#saveBtnz').html('Save Changes');
                }
            });
        });
        $('#saveBtny').click(function(e) {
            // document.getElementById("#saveBtny").reset();
            // e.preventDefault();
            // e.stopPropagation();
            $(this).html('Sending..');
            $.ajax({
                data: $('#productFormy').serialize(),
                url: "{{ route('rincianpelaksanaan.storey') }}",
                type: "POST",
                dataType: 'json',
                success: function(data) {
                    $('#productFormy').trigger("reset");
                    $('#ajaxModely').modal('hide');
                    $('#saveBtny').html('Save Changes');
                    table.draw();
                },
                error: function(data) {
                    console.log('Error:', data);
                    $('#saveBtny').html('Save Changes');
                }
            });
            $(document).ready(function(e) {
                //  e.preventDefault();
                $('#productFormy').ajaxForm({
                    beforeSend: function() {
                        var percentage = '0';
                    },
                    uploadProgress: function(event, position, total, percentComplete) {
                        var percentage = percentComplete;
                        $('.progress .progress-bar').css("width", percentage + '%',
                            function() {
                                return $(this).attr("aria-valuenow",
                                    percentage) + "%";
                            })
                    },
                    success: function(xhr) {
                        $('#productFormy').trigger("reset");
                        $('.progress .progress-bar').css("width", '0' + '%');
                        $('#ajaxModely').modal('hide');
                        $('#saveBtny').html('Save Changes');
                        table.draw();
                    },
                });
            });
        });
        $('body').on('click', '.deleteProduct', function() {
            var product_id = $(this).data("id");
            var result = confirm("kamu ingin delete rincian pengeluaran ini !");
            if (result) {
                $.ajax({
                    type: "DELETE",
                    url: "{{ route('rincianpengeluaran.store') }}" + '/' + product_id,
                    success: function(data) {
                        if (data.success) {
                            $('#response').html(
                                '<button type="button" class="btn mb-3 btn-warning rounded-pill"><i class="las la-exclamation-triangle"></i> data rincian pengeluaran telah dihapus <i class="las la-exclamation-triangle"></i></button>'
                            );
                            $("#response").fadeTo(5000, 500).slideUp(500, function() {
                                $("#response").slideUp(500);
                            });
                            table.draw();
                        } else {
                            $('#response').html(
                                '<button type="button" class="btn mb-3 btn-danger rounded-pill"><i class="las la-skull-crossbones"></i> data rincian pengeluaran gagal dihapus <i class="las la-skull-crossbones"></i></button>'
                            );
                            table.draw();
                        }
                    },
                    error: function(data) {
                        console.log('Error:', data);
                    }
                });
            } else {
                return false;
            }
        });
    });
</script>

<script type="text/javascript">
    var rupiah_add_rkkl = document.getElementById('nilai_pagu_realisasi');
    rupiah_add_rkkl.addEventListener('keyup', function(e) {
        // tambahkan 'Rp.' pada saat form di ketik
        // gunakan fungsi formatrupiah_add_rkkl() untuk mengubah angka yang di ketik menjadi format angka
        rupiah_add_rkkl.value = formatrupiah_add_rkkl(this.value);
    });
    /* Fungsi formatrupiah_add_rkkl */
    function formatrupiah_add_rkkl(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah_add_rkkl = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);
        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah_add_rkkl += separator + ribuan.join('.');
        }
        rupiah_add_rkkl = split[1] != undefined ? rupiah_add_rkkl + ',' + split[1] : rupiah_add_rkkl;
        return prefix == undefined ? rupiah_add_rkkl : (rupiah_add_rkkl ? +rupiah_add_rkkl : '');
    }
</script>

</html>

@endsection