@extends('layouts.app')

@section('nama_menu')

<h5 class="mb-0">
    Tahun Anggaran
</h5>

<nav aria-label="breadcrumb">
    <ul class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Configure</li>
        <li class="breadcrumb-item active" aria-current="page">Tahun Anggaran</li>
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
                    <h4 class="card-title">Data Tahun Anggaran</h4>

                    <div id="response"></div>

                </div>

                @switch(Auth::user()->jabatan)
                @case(5)
                <div>
                    <br>
                    <a class="btn btn-primary rounded-pill mb-3" href="javascript:void(0)" id="createNewProduct"
                        title="tambah referensi menimbang"> + </a>
                </div>
                @break

                @default

                @endswitch

            </div>
            <div class="iq-card-body">
                <div class="table-responsive">
                    {{-- <table class="table table-bordered data-table"> --}}
                    <table id="datatable" class="table table-striped table-bordered data-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tahun Anggaran</th>
                                <th>locked</th>
                                <th width="280px">Action</th>

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
                        {{-- <input type="text" name="id_unitbagian" id="id_unitbagian"> --}}

                        <div class="form-row">
                            <div class="col">
                                <label for="tahun">nama Tahun Anggaran <span
                                        style="color:red;font-weight:bold">*</span></label>
                                <input id="tahun" name="tahun" required="" placeholder="nama Tahun Anggaran ..."
                                    class="form-control">
                                @error('tahun')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror
                            </div>

                            <div class="col">
                                <div class="iq-card-body" id="locked">
                                    <div
                                        class="custom-control custom-radio custom-radio-color-checked custom-control-inline">
                                        <input type="radio" id="customRadio-3" name="locked" value="0"
                                            class="custom-control-input bg-danger">
                                        <label class="custom-control-label" for="customRadio-3"><i
                                                class="las la-lock"></i> text terkunci </label>
                                    </div>

                                    <div
                                        class="custom-control custom-radio custom-radio-color-checked custom-control-inline">
                                        <input type="radio" id="customRadio-6" name="locked" value="1"
                                            class="custom-control-input bg-info">
                                        <label class="custom-control-label" for="customRadio-6"><i
                                                class="las la-lock-open"></i> text terbuka </label>
                                    </div>
                                </div>

                            </div>
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
                                        <input type="text" id="nip" name="nip" required="" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-12 control-label">golongan</label>
                                    <div class="col-sm-12">
                                        <input type="text" id="golongan" name="golongan" required=""
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-12 control-label">jabatan</label>
                                    <div class="col-sm-12">
                                        <input type="text" id="jabatan" name="jabatan" required="" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-12 control-label">tempat pelaksana</label>
                                    <div class="col-sm-12">
                                        <select class="livesearch form-control" style="width: 100%"
                                            name="tempat_pelaksana" id="livesearch"></select>
                                    </div>
                                </div>

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
            ajax: "{{ route('tahunanggaran.index') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'tahun',
                    name: 'tahun'
                },
                {
                    data: 'locked',
                    name: 'locked'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
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
            }
        });
        $('#createNewProduct').click(function() {
            $('#saveBtn').val("create-product");
            $('#product_id').val('');
            $('#productForm').trigger("reset");
            $('#modelHeading').html("Tambah Tahun Anggaran");
            $('#ajaxModel').modal('show');
        });
        $('body').on('click', '.editProduct', function() {
            var product_id = $(this).data('id');
            $.get("{{ route('tahunanggaran.index') }}" + '/' + product_id + '/edit', function(data) {
                $('#modelHeading').html("edit Tahun Anggaran");
                $('#saveBtn').val("edit-user");
                $('#ajaxModel').modal('show');
                $('#product_id').val(data.id);
                // $('#id_unitbagian').val(data.id_unitbagian);
                // $('#urutan').val(data.urutan);
                $('#tahun').val(data.tahun);
                $('#locked').val(data.locked);
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
                tahun: "required",
            },
        });
        $('#saveBtn').click(function(e) {
            if ($("#productForm").valid()) {
                e.preventDefault();
                $(this).html('Sending..');
                $.ajax({
                    data: $('#productForm').serialize(),
                    url: "{{ route('tahunanggaran.store') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function(data) {
                        if (data.success) {
                            $('#productForm').trigger("reset");
                            $('#ajaxModel').modal('hide');
                            $('#saveBtn').html('Save Changes');
                            $('#response').html(
                                '<button type="button" class="btn mb-3 btn-info rounded-pill"><i class="ri-heart-fill"></i> tambah atau edit Tahun Anggaran berhasil <i class="ri-heart-fill"></i></button>'
                            );
                            $("#response").fadeTo(5000, 500).slideUp(500, function() {
                                $("#response").slideUp(500);
                            });
                            table.draw();
                        } else {
                            $('#productForm').trigger("reset");
                            $('#ajaxModel').modal('hide');
                            $('#saveBtn').html('Save Changes');
                            $('#response').html(
                                '<button type="button" class="btn mb-3 btn-danger rounded-pill"><i class="las la-skull-crossbones"></i> tambah atau edit Tahun Anggaran gagal <i class="las la-skull-crossbones"></i></button>'
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
                url: "{{ route('realisasirkkl.storex') }}",
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
                url: "{{ route('realisasirkkl.storez') }}",
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
                url: "{{ route('realisasirkkl.storey') }}",
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
            var result = confirm("kamu ingin delete Tahun Anggaran ini !");
            if (result) {
                $.ajax({
                    type: "DELETE",
                    url: "{{ route('tahunanggaran.store') }}" + '/' + product_id,
                    success: function(data) {
                        if (data.success) {
                            $('#response').html(
                                '<button type="button" class="btn mb-3 btn-warning rounded-pill"><i class="las la-exclamation-triangle"></i> data Tahun Anggaran telah dihapus <i class="las la-exclamation-triangle"></i></button>'
                            );
                            $("#response").fadeTo(5000, 500).slideUp(500, function() {
                                $("#response").slideUp(500);
                            });
                            table.draw();
                        } else {
                            $('#response').html(
                                '<button type="button" class="btn mb-3 btn-danger rounded-pill"><i class="las la-skull-crossbones"></i> data Tahun Anggaran gagal dihapus <i class="las la-skull-crossbones"></i></button>'
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
    var rupiah_add_rkkl = document.getElementById('pagu_anggaran');
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