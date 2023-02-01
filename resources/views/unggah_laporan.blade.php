@extends('layouts.app')

@section('nama_menu')

<h5 class="mb-0">
    Unggah Laporan
</h5>

<nav aria-label="breadcrumb">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Keuangan</a></li>
        <li class="breadcrumb-item active" aria-current="page">Laporan Kegiatan</li>
        <li class="breadcrumb-item active" aria-current="page">Unggah Laporan</li>
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

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
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

    .ClassCenter {
        text-align: center;
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

    <div class="col-sm-12">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Unggah Laporan </h4>

                    <div id="response"></div>

                </div>

                {{-- <div>
                    <br>
                    <a class="btn btn-primary rounded-pill mb-3" href="javascript:void(0)" id="createNewProduct"
                        title="tambah realisasi rkkl"> + </a>
                </div> --}}
                {{-- <button type="button" class="btn btn-info rounded-pill mb-3">Info</button> --}}
            </div>
            <div class="iq-card-body">
                <div class="table-responsive">
                    {{-- <table class="table table-bordered data-table"> --}}
                    <table id="datatable" class="table table-striped table-bordered data-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>nama pelaksana</th>
                                <th>id realisasi rkkl</th>
                                <th>nomor surat tugas</th>
                                <th>tahun anggaran</th>
                                <th>created at</th>
                                <th>updated at</th>
                                <th>Action</th>

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
                            </tr>

                    </table>
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
                            <form action="unggahlaporan/storey" method="POST" enctype="multipart/form-data" id="productFormy" name="productFormy" class="form-horizontal">
                                {{ csrf_field() }}

                                <div id="pastikan_data_adalah_pdf"></div>

                                <input type="hidden" name="product_id" id="product_idy">
                                <input type="hidden" name="t_realisasi_rkkl_id" id="t_realisasi_rkkl_id">
                                <input type="hidden" name="no_surat_tugas" id="no_surat_tugas">

                                <div class="form-group">
                                    <b>File PDF</b><br />
                                    <input type="file" name="file" id="file" required>
                                    @error('file')
                                    <span class="text-danger"> {{$message}} </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <b>Keterangan</b>
                                    <textarea class="form-control" name="keterangan" placeholder="contoh : &#10; laporan kegiatan inventarisasi bmn pada pt jakarta" required></textarea>
                                </div>

                                <div class="form-group">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
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
        $("#tempat_pelaksana").select2();
    });

</script>

<script>
    $(document).ready(function() {
        // Initialize select2
        $("#user").select2();
    });

</script>

<script>
    $(document).ready(function() {
        // Initialize select2
        $("#ref_keuangan_uraian_kegiatan_id").select2();
    });

</script>

{{-- <script>
    $(document).ready(function() {
        // Initialize select2
        $("#user").select2();
    });
</script> --}}

{{-- <script type="text/javascript">
        $(document).ready(function() {
            $('#tempat_pelaksana').select2({
                    placeholder: "Select Category",
                    allowClear: true // This is for clear get the clear button if wanted
            });

        });
    </script> --}}

<script type="text/javascript">
    $('.livesearch').select2({
        placeholder: 'Pilih nama pembuat laporan ...'
        , ajax: {
            url: '/ajax-autocomplete-search'
            , dataType: 'json'
            , delay: 250
            , processResults: function(data) {
                return {
                    results: $.map(data, function(item) {
                        return {
                            text: item.nama_satuankerja
                            , id: item.nama_satuankerja,
                            // value : item.nama_satuankerja
                        }
                    })
                };
            }
            , cache: true
        }
    });

</script>

<script type="text/javascript">
    $('.livesearch2').select2({
        placeholder: 'Pilih nama pembuat laporan ...'
        , ajax: {
            url: '/ajax-autocomplete-search2'
            , dataType: 'json'
            , delay: 250
            , processResults: function(data) {
                return {
                    results: $.map(data, function(item) {
                        return {
                            text: item.name
                            , id: item.name,
                            // value : item.nama_satuankerja
                        }
                    })
                };
            }
            , cache: true
        }
    });

</script>

<script type="text/javascript">
    $('.livesearch3').select2({
        placeholder: 'Pilih pagu anggaran ...'
        , ajax: {
            url: '/ajax-autocomplete-search3'
            , dataType: 'json'
            , delay: 250
            , processResults: function(data) {
                return {
                    results: $.map(data, function(item) {
                        return {
                            text: item.nama_sub_menu_uraian_kegiatan
                            , id: item.id,
                            // value : item.nama_satuankerja
                        }
                    })
                };
            }
            , cache: true
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
            dom: 'lBfrtip'
            , buttons: [
                'copy', 'excel', 'pdf', 'csv', 'print'
            ]
            , autoWidth: true
            , processing: true
            , serverSide: true,
            // scrollX: true,
            ajax: "{{ route('unggahlaporan.index') }}"
            , columns: [{
                    data: 'DT_RowIndex'
                    , name: 'DT_RowIndex'
                    , orderable: false
                    , searchable: false
                }
                , {
                    data: 'nama_pelaksana'
                    , name: 'nama_pelaksana'
                    , searchable: true
                }
                , {
                    data: 't_realisasi_rkkl_id'
                    , name: 't_realisasi_rkkl_id'
                    , searchable: true
                }
                , {
                    data: 'no_surat_tugas'
                    , name: 'no_surat_tugas'
                    , searchable: true
                }
                , {
                    data: 'tahun_anggaran'
                    , name: 'tahun_anggaran'
                    , searchable: true
                }
                , {
                    data: 'created_at'
                    , name: 'created_at'
                    , searchable: true
                }
                , {
                    data: 'updated_at'
                    , name: 'updated_at'
                    , searchable: true
                }
                , {
                    data: 'action'
                    , name: 'action'
                    , orderable: false
                    , searchable: false
                    , className: "ClassCenter"
                }
            , ]
            , initComplete: function() {
                this.api().columns().every(function() {
                    var column = this;
                    var input = document.createElement("input");
                    $(input).appendTo($(column.footer()).empty())
                        .on('change', function() {
                            column.search($(this).val(), false, true, true).draw();
                        });
                });
            }
        });
        $('#createNewProduct').click(function() {
            $('#saveBtn').val("create-product");
            $('#product_id').val('');
            $('#productForm').trigger("reset");
            $('#modelHeading').html("Tambah Realiasasi RKKL");
            $('#verifikasi_kelengkapan').hide();
            $('#ajaxModel').modal('show');
        });
        $('body').on('click', '.editProduct', function() {
            var product_id = $(this).data('id');
            $.get("{{ route('realisasirkkl.index') }}" + '/' + product_id + '/edit', function(data) {
                $('#modelHeading').html("Edit Realisasi RKKL");
                $('#saveBtn').val("edit-user");
                $('#verifikasi_kelengkapan').show();
                $('#ajaxModel').modal('show');
                $('#product_id').val(data.id);
                $('#nomor_surat_tugas').val(data.nomor_surat_tugas);
                $('#tanggal_surat_tugas').val(data.tanggal_surat_tugas);
                $('#tanggal_pelaksana_dari').val(data.tanggal_pelaksana_dari);
                $('#verifikasi_kelengkapan').val(data.verifikasi_kelengkapan);
                $('#tanggal_pelaksana_sampai').val(data.tanggal_pelaksana_sampai);
            })
        });
        $('body').on('click', '.editProductx', function() {
            var product_id = $(this).data('id');
            $.get("{{ route('realisasirkkl.index') }}" + '/' + product_id + '/edit', function(data) {
                $('#modelHeadingx').html("Tambah tempat pelaksanaan");
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
                $('#nomor_surat_tugasz').val(data.nomor_surat_tugas);
                // $('#golongan').val(data.golongan);
                // $('#jabatan').val(data.jabatan);
                // $('#tempat_pelaksana').val(data.tempat_pelaksana);
            })
        });
        $('body').on('click', '.editProducty', function() {
            var product_id = $(this).data('id');
            $.get("{{ route('unggahlaporan.index') }}" + '/' + product_id + '/edit', function(data) {
                $('#modelHeadingy').html("Unggah Laporan");
                $('#saveBtny').val("edit-user");
                $('#ajaxModely').modal('show');
                $('#product_idy').val(data.id);
                $('#t_realisasi_rkkl_id').val(data.t_realisasi_rkkl_id);
                $('#no_surat_tugas').val(data.no_surat_tugas);
                $('#file').val(data.file);
                $('#keterangan').val(data.keterangan);
            })
        });
        $('body').on('click', '.editProductv', function() {
            var product_id = $(this).data('id');
            $.get("{{ route('realisasirkkl.index') }}" + '/' + product_id + '/edit', function(data) {
                $('#modelHeadingv').html("Tambah realisasi anggaran");
                $('#saveBtnv').val("edit-user");
                $('#ajaxModelv').modal('show');
                $('#product_idv').val(data.id);
                $('#ref_keuangan_uraian_kegiatan_id').val(data.ref_keuangan_uraian_kegiatan_id);
                $('#nilai_pagu_realisasixx').val(data.nilai_pagu_realisasi);
            })
        });
        $("#productForm").validate({
            // Specify validation rules
            rules: {
                // The key name on the left side is the name attribute
                // of an input field. Validation rules are defined
                // on the right side
                nomor_surat_tugas: "required"
                , tanggal_surat_tugas: "required"
                , tanggal_pelaksana_dari: "required"
                , tanggal_pelaksana_sampai: "required"
                , verifikasi_kelengkapan: "required"
            }
        , });
        $('#saveBtn').click(function(e) {
            if ($("#productForm").valid()) {
                e.preventDefault();
                $(this).html('Sending..');
                $.ajax({
                    data: $('#productForm').serialize()
                    , url: "{{ route('realisasirkkl.store') }}"
                    , type: "POST"
                    , dataType: 'json'
                    , success: function(data) {
                        if (data.success) {
                            $('#productForm').trigger("reset");
                            $('#ajaxModel').modal('hide');
                            // $("#tempat_pelaksana").val(null).trigger("change");
                            $('#saveBtn').html('Save Changes');
                            $('#response').html(
                                '<button type="button" class="btn mb-3 btn-info rounded-pill"><i class="ri-heart-fill"></i> tambah atau edit realisasi rkkl berhasil <i class="ri-heart-fill"></i></button>'
                            );
                            $("#response").fadeTo(5000, 500).slideUp(500, function() {
                                $("#response").slideUp(500);
                            });
                            table.draw();
                        } else {
                            $('#productForm').trigger("reset");
                            $('#ajaxModel').modal('hide');
                            // $("#tempat_pelaksana").val(null).trigger("change");
                            $('#saveBtn').html('Save Changes');
                            $('#response').html(
                                ' <button type="button" class="btn mb-3 btn-danger rounded-pill"><i class="las la-skull-crossbones"></i> tambah atau edit realisasi rkkl gagal <i class="las la-skull-crossbones"></i></button>'
                            );
                            $("#response").fadeTo(5000, 500).slideUp(500, function() {
                                $("#response").slideUp(500);
                            });
                            table.draw();
                        }
                    }
                    , error: function(data) {
                        console.log('Error:', data);
                        $('#saveBtn').html('Save Changes');
                    }
                });
            }
        });
        $("#productFormx").validate({
            // Specify validation rules
            rules: {
                // The key name on the left side is the name attribute
                // of an input field. Validation rules are defined
                // on the right side
                nama_pelaksana: "required"
                , jabatan: "required"
                , tempat_pelaksana: "required"
            , }
        , });
        $('#saveBtnx').click(function(e) {
            if ($("#productFormx").valid()) {
                e.preventDefault();
                $(this).html('Sending..');
                $.ajax({
                    data: $('#productFormx').serialize()
                    , url: "{{ route('realisasirkkl.storex') }}"
                    , type: "POST"
                    , dataType: 'json'
                    , success: function(data) {
                        if (data.success) {
                            $('#productFormx').trigger("reset");
                            $('#ajaxModelx').modal('hide');
                            $("#tempat_pelaksana").val(null).trigger("change");
                            $('#saveBtnx').html('Save Changes');
                            $('#response').html(
                                '<button type="button" class="btn mb-3 btn-info rounded-pill"><i class="ri-heart-fill"></i> tambah tempat pelaksanaan berhasil <i class="ri-heart-fill"></i></button>'
                            );
                            $("#response").fadeTo(5000, 500).slideUp(500, function() {
                                $("#response").slideUp(500);
                            });
                            table.draw();
                        } else {
                            $('#productFormx').trigger("reset");
                            $('#ajaxModelx').modal('hide');
                            $("#tempat_pelaksana").val(null).trigger("change");
                            $('#saveBtnx').html('Save Changes');
                            $('#response').html(
                                '<button type="button" class="btn mb-3 btn-danger rounded-pill"><i class="las la-skull-crossbones"></i> tambah tempat pelaksanaan gagal <i class="las la-skull-crossbones"></i></button>'
                            );
                            $("#response").fadeTo(5000, 500).slideUp(500, function() {
                                $("#response").slideUp(500);
                            });
                            table.draw();
                        }
                    }
                    , error: function(data) {
                        console.log('Error:', data);
                        $('#saveBtnx').html('Save Changes');
                    }
                });
            }
        });
        $("#productFormz").validate({
            // Specify validation rules
            rules: {
                // The key name on the left side is the name attribute
                // of an input field. Validation rules are defined
                // on the right side
                nama_pelaksana: "required"
            }
        , });
        $('#saveBtnz').click(function(e) {
            if ($("#productFormz").valid()) {
                e.preventDefault();
                $(this).html('Sending..');
                $.ajax({
                    data: $('#productFormz').serialize()
                    , url: "{{ route('realisasirkkl.storez') }}"
                    , type: "POST"
                    , dataType: 'json'
                    , success: function(data) {
                        if (data.success) {
                            $('#productFormz').trigger("reset");
                            $("#user").val(null).trigger("change");
                            $('#ajaxModelz').modal('hide');
                            $('#saveBtnz').html('Save Changes');
                            $('#response').html(
                                '<button type="button" class="btn mb-3 btn-info rounded-pill"><i class="ri-heart-fill"></i> tambah pembuat laporan berhasil <i class="ri-heart-fill"></i></button>'
                            );
                            $("#response").fadeTo(5000, 500).slideUp(500, function() {
                                $("#response").slideUp(500);
                            });
                            table.draw();
                        } else {
                            $('#productFormz').trigger("reset");
                            $("#user").val(null).trigger("change");
                            $('#ajaxModelz').modal('hide');
                            $('#saveBtnz').html('Save Changes');
                            $('#response').html(
                                '<button type="button" class="btn mb-3 btn-danger rounded-pill"><i class="las la-skull-crossbones"></i> tambah pembuat laporan gagal <i class="las la-skull-crossbones"></i></button>'
                            );
                            $("#response").fadeTo(5000, 500).slideUp(500, function() {
                                $("#response").slideUp(500);
                            });
                            table.draw();
                        }
                    }
                    , error: function(data) {
                        console.log('Error:', data);
                        $('#saveBtnz').html('Save Changes');
                    }
                });
            }
        });
        $("#productFormv").validate({
            // Specify validation rules
            rules: {
                // The key name on the left side is the name attribute
                // of an input field. Validation rules are defined
                // on the right side
                ref_keuangan_uraian_kegiatan_id: "required"
                , nilai_pagu_realisasi: "required"
            }
        , });
        $('#saveBtnv').click(function(e) {
            if ($("#productFormv").valid()) {
                e.preventDefault();
                $(this).html('Sending..');
                $.ajax({
                    data: $('#productFormv').serialize()
                    , url: "{{ route('realisasirkkl.storev') }}"
                    , type: "POST"
                    , dataType: 'json'
                    , success: function(data) {
                        if (data.success) {
                            $('#productFormv').trigger("reset");
                            $('#ajaxModelv').modal('hide');
                            $("#ref_keuangan_uraian_kegiatan_id").val(null).trigger(
                                "change");
                            $('#saveBtnv').html('Save Changes');
                            $('#response').html(
                                '<button type="button" class="btn mb-3 btn-info rounded-pill"><i class="ri-heart-fill"></i> tambah realisasi anggaran berhasil <i class="ri-heart-fill"></i></button>'
                            );
                            $("#response").fadeTo(5000, 500).slideUp(500, function() {
                                $("#response").slideUp(500);
                            });
                            table.draw();
                        } else {
                            $('#productFormv').trigger("reset");
                            $('#ajaxModelv').modal('hide');
                            $("#ref_keuangan_uraian_kegiatan_id").val(null).trigger(
                                "change");
                            $('#saveBtnv').html('Save Changes');
                            $('#response').html(
                                '<button type="button" class="btn mb-3 btn-danger rounded-pill"><i class="las la-skull-crossbones"></i> tambah realisasi anggaran gagal <i class="las la-skull-crossbones"></i></button> <button type="button" class="btn mb-3 btn-warning rounded-pill"><i class="las la-exclamation-triangle"></i> pastikan sisa anggaran mencukupi <i class="las la-exclamation-triangle"></i></button>'
                            );
                            $("#response").fadeTo(5000, 500).slideUp(500, function() {
                                $("#response").slideUp(500);
                            });
                            table.draw();
                        }
                    }
                    , error: function(data) {
                        console.log('Error:', data);
                        $('#saveBtnv').html('Save Changes');
                    }
                });
            }
        });
        $("#productFormy").validate({
            // Specify validation rules
            rules: {
                // The key name on the left side is the name attribute
                // of an input field. Validation rules are defined
                // on the right side
                file: "required"
                , keterangan: "required"
            }
        , });
        $('#saveBtny').click(function(e) {
            if ($("#productFormy").valid()) {
                // document.getElementById("#saveBtny").reset();
                // e.preventDefault();
                // e.stopPropagation();
                $(this).html('Sending..');
                $.ajax({
                    data: $('#productFormy').serialize()
                    , url: "{{ route('unggahlaporan.storey') }}"
                    , type: "POST"
                    , dataType: 'json'
                    , success: function(data) {
                        $('#productFormy').trigger("reset");
                        $('#ajaxModely').modal('hide');
                        $('#saveBtny').html('Save Changes');
                        table.draw();
                    }
                    , error: function(data) {
                        console.log('Error:', data);
                        $('#saveBtny').html('Save Changes');
                    }
                });
                $(document).ready(function(e) {
                    //  e.preventDefault();
                    $('#productFormy').ajaxForm({
                        beforeSend: function() {
                            var percentage = '0';
                        }
                        , uploadProgress: function(event, position, total
                            , percentComplete) {
                            var percentage = percentComplete;
                            $('.progress .progress-bar').css("width", percentage +
                                '%'
                                , function() {
                                    return $(this).attr("aria-valuenow"
                                        , percentage) + "%";
                                })
                        }
                        , success: function(xhr) {
                            if (xhr.success) {
                                $('#productFormy').trigger("reset");
                                $('.progress .progress-bar').css("width", '0' +
                                    '%');
                                $('#ajaxModely').modal('hide');
                                $('#response').html(
                                    '<button type="button" class="btn mb-3 btn-info rounded-pill"><i class="ri-heart-fill"></i> unggah laporan berhasil <i class="ri-heart-fill"></i></button>'
                                );
                                $("#response").fadeTo(5000, 500).slideUp(500
                                    , function() {
                                        $("#response").slideUp(500);
                                    });
                                $('#saveBtny').html('Save Changes');
                                table.draw();
                            } else {
                                $('#productFormy').trigger("reset");
                                $('.progress .progress-bar').css("width", '0' +
                                    '%');
                                $('#ajaxModely').modal('hide');
                                $('#response').html(
                                    '<button type="button" class="btn mb-3 btn-danger rounded-pill"><i class="las la-skull-crossbones"></i> unggah laporan gagal <i class="las la-skull-crossbones"></i></button></button> <button type="button" class="btn mb-3 btn-warning rounded-pill"><i class="las la-exclamation-triangle"></i> pastikan file yang diupload berbentuk pdf <i class="las la-exclamation-triangle"></i></button>'
                                );
                                $("#response").fadeTo(5000, 500).slideUp(500, function() {
                                    $("#response").slideUp(500);
                                });
                                $('#saveBtny').html('Save Changes');
                            }
                        }
                    , });
                });
            }
        });
        $('body').on('click', '.deleteProduct', function() {
            var product_id = $(this).data("id");
            var result = confirm("kamu yakin akan menghapus data ini !");
            if (result) {
                $.ajax({
                    type: "DELETE"
                    , url: "{{ route('realisasirkkl.store') }}" + '/' + product_id
                    , success: function(data) {
                        if (data.success) {
                            $('#response').html(
                                '<button type="button" class="btn mb-3 btn-warning rounded-pill"><i class="las la-exclamation-triangle"></i> data realisasi rkkl telah dihapus <i class="las la-exclamation-triangle"></i></button>'
                            );
                            $("#response").fadeTo(5000, 500).slideUp(500, function() {
                                $("#response").slideUp(500);
                            });
                            table.draw();
                        } else {
                            $('#response').html(
                                '<button type="button" class="btn mb-3 btn-danger rounded-pill"><i class="las la-skull-crossbones"></i> data realisasi rkkl gagal dihapus <i class="las la-skull-crossbones"></i></button>'
                            );
                            $("#response").fadeTo(5000, 500).slideUp(500, function() {
                                $("#response").slideUp(500);
                            });
                            table.draw();
                        }
                    }
                    , error: function(data) {
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
    var rupiah_add_rkkl = document.getElementById('nilai_pagu_realisasixx');
    rupiah_add_rkkl.addEventListener('keyup', function(e) {
        // tambahkan 'Rp.' pada saat form di ketik
        // gunakan fungsi formatrupiah_add_rkkl() untuk mengubah angka yang di ketik menjadi format angka
        rupiah_add_rkkl.value = formatrupiah_add_rkkl(this.value);
    });
    /* Fungsi formatrupiah_add_rkkl */
    function formatrupiah_add_rkkl(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString()
            , split = number_string.split(',')
            , sisa = split[0].length % 3
            , rupiah_add_rkkl = split[0].substr(0, sisa)
            , ribuan = split[0].substr(sisa).match(/\d{3}/gi);
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
