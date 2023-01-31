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

#shiva {
    /* width: 100px;
        height: 100px;
        background: red;
        -moz-border-radius: 50px;
        -webkit-border-radius: 50px;
        border-radius: 50px;
        float: left;
        margin: 5px; */
}

.count {
    /* line-height: 100px;
        color: black;
        margin-left: 30px;
        font-size: 25px; */
}

#talkbubble {
    width: 120px;
    height: 80px;
    background: red;
    position: relative;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    border-radius: 10px;
    float: left;
    margin: 20px;
}

#talkbubble:before {
    content: "";
    position: absolute;
    right: 100%;
    top: 26px;
    width: 0;
    height: 0;
    border-top: 13px solid transparent;
    border-right: 26px solid red;
    border-bottom: 13px solid transparent;
}

.linker {
    font-size: 20px;
    font-color: black;
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

        <div class="row">

            {{-- {{ session()->get('name') }} --}}
            {{-- {{ session()->get('variableSetOnPageA') }} --}}

            @foreach ($data as $datas)
            <div class="col-lg-4">
                <div class="card iq-mb-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <a href="index.html">
                                @php
                                    $x = $datas->nilai_pagu_realisasi / $datas->pagu_anggaran * 100;

                                    if (round($x) >= 80) {
                                        echo '<img src="assets/images/hijau.gif" class="img-fluid" alt="">';
                                    } elseif (round($x) < 80 && round($x) >= 50 ) {
                                        echo '<img src="assets/images/kuning.gif" class="img-fluid" alt="">';
                                    } else {
                                        echo '<img src="assets/images/merah.gif" class="img-fluid" alt="">';
                                    }
                                @endphp
                            </a>

                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h6 class="card-title"> <b>{{$datas->nama_uraian_kegiatan}}</b> </h6>
                                <p class="card-text"> <small class="text-muted">
                                        {{$datas->nama_sub_menu_uraian_kegiatan}} <i class="las la-dot-circle"></i>
                                        {{$datas->kelompok_pagu}} </small> </p>
                            </div>
                        </div>

                        <table>
                            <tr>
                                <td><small class="text-muted"><i style="color: white"
                                            class="las la-dot-circle"></i></small></td>
                                <td><small class="text-muted">pagu</small></td>
                                <td><small class="text-muted"><i style="color: white"
                                            class="las la-dot-circle"></i></small></td>
                                <td><small class="text-muted">realisasi</small></td>
                                <td><small class="text-muted"><i style="color: white"
                                            class="las la-dot-circle"></i></small></td>
                                <td><small class="text-muted">sisa</small></td>
                                <td><small class="text-muted"><i style="color: white"
                                            class="las la-dot-circle"></i></small></td>
                                <td><small class="text-muted">persentase</small></td>
                            </tr>
                            <tr>
                                <td><small class="text-muted"><i style="color: white"
                                            class="las la-dot-circle"></i></small></td>
                                <td><small class="text-muted">{{number_format($datas->pagu_anggaran, 0, ",", ".")}}</small></td>
                                {{-- number_format($request->hari * $penginputan_tanpa_titik, 0, ",", "."), --}}
                                <td><small class="text-muted"><i style="color: white"
                                            class="las la-dot-circle"></i></small></td>
                                <td><small class="text-muted">{{number_format($datas->nilai_pagu_realisasi, 0, ",", ".")}}</small></td>
                                <td><small class="text-muted"><i style="color: white"
                                            class="las la-dot-circle"></i></small></td>
                                <td><small class="text-muted">
                                        @php
                                        $sisa = $datas->pagu_anggaran - $datas->nilai_pagu_realisasi;
                                        echo number_format($sisa, 0, ",", ".");
                                        @endphp
                                    </small>
                                </td>
                                <td><small class="text-muted"><i style="color: white"
                                            class="las la-dot-circle"></i></small></td>
                                <td><small class="text-muted"> @php
                                        $x = $datas->nilai_pagu_realisasi / $datas->pagu_anggaran * 100;
                                        // echo "<h4 align='center'>" . $x . "%" . "</h4>";
                                        echo "<div id='shiva'> <span class='count'>" . round($x) . "</span>%
                                        </div>";
                                        @endphp
                                    </small></td>
                            </tr>
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
                <br>
            </div>
            @endforeach

            <script>
            $('.count').each(function() {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 5000,
                    easing: 'swing',
                    step: function(now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });
            </script>

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
        ajax: "{{ route('rincianlaporan.index') }}",
        columns: [{
                data: 'DT_RowIndex',
                name: 'DT_RowIndex',
                orderable: false,
                searchable: false
            },
            {
                data: 'pengirim_laporan',
                name: 'pengirim_laporan',
                searchable: true
            },
            {
                data: 't_realisasi_rkkl_id',
                name: 't_realisasi_rkkl_id',
                searchable: true
            },
            {
                data: 'file',
                name: 'file',
                searchable: true
            },
            {
                data: 'keterangan',
                name: 'keterangan',
                searchable: true
            },
            {
                data: 'user_penginput_data',
                name: 'user_penginput_data',
                searchable: true
            },
            {
                data: 'created_at',
                name: 'created_at',
                searchable: true
            },
            {
                data: 'updated_at',
                name: 'updated_at',
                searchable: true
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
        $('#modelHeading').html("Tambah referensi");
        $('#ajaxModel').modal('show');
    });
    $('body').on('click', '.editProduct', function() {
        var product_id = $(this).data('id');
        $.get("{{ route('rincianpengeluaran.index') }}" + '/' + product_id + '/edit', function(
            data) {
            $('#modelHeading').html("edit rincian laporan");
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
        var result = confirm("kamu ingin delete rincian laporan ini !");
        if (result) {
            $.ajax({
                type: "DELETE",
                url: "{{ route('rincianlaporan.store') }}" + '/' + product_id,
                success: function(data) {
                    if (data.success) {
                        $('#response').html(
                            '<button type="button" class="btn mb-3 btn-warning rounded-pill"><i class="las la-exclamation-triangle"></i> data rincian laporan telah dihapus <i class="las la-exclamation-triangle"></i></button>'
                        );
                        $("#response").fadeTo(5000, 500).slideUp(500, function() {
                            $("#response").slideUp(500);
                        });
                        table.draw();
                    } else {
                        $('#response').html(
                            '<button type="button" class="btn mb-3 btn-danger rounded-pill"><i class="las la-skull-crossbones"></i> data rincian laporan gagal dihapus <i class="las la-skull-crossbones"></i></button>'
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