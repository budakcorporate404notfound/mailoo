@extends('layouts.app')

@section('nama_menu')

<h5 class="mb-0">
    Rincian Pengeluaran
</h5>

<nav aria-label="breadcrumb">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Keuangan</a></li>
        <li class="breadcrumb-item active" aria-current="page">Rincian</li>
        <li class="breadcrumb-item active" aria-current="page">Pengeluaran</li>
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

    <div class="modal fade" id="ModalSuccess" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body" style="text-align: justify">
                    <i class="las la-check-circle" style="color: green"></i>
                    <br> penginputan atau perubahan data berhasil dilakukan
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="ModalFailure" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body" style="text-align: justify">
                    <i class="las la-skull-crossbones" style="color: red"></i>
                    <br> gagal dilakukan penginputan atau perubahan data
                    <br> pastikan nilai anggaran tidak menjadi minus
                    <br> ketika dilakukan perubahan
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="ModalSuccessDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body" style="text-align: justify">
                    <i class="las la-check-circle" style="color: green"></i>
                    <br> data berhasil dilakukan penghapusan dari rincian pengeluaran
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="ModalFailureDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body" style="text-align: justify">
                    <i class="las la-skull-crossbones" style="color: red"></i>
                    <br> gagal dilakukan dilakukan penghapusan
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Rincian Pengeluaran</h4>

                    <div id="response"></div>

                </div>

            @switch(Auth::user()->jabatan)
                @case(5)
                <div>
                    <br>
                    <a class="btn btn-danger rounded-pill mb-3" href="javascript:void(0)" id="bulk_delete" name="bulk_delete"
                        title="tambah referensi"> x </a>
                </div>
                @break
                @case(6)
                <div>

                </div>
                @break
                @default

                @endswitch

            </div>
            <div class="iq-card-body">
                <div class="table-responsive">
                    {{-- <table class="table table-bordered data-table"> --}}
                    <table id="datatable" class="table table-striped table-bordered data-table">

                        {{-- <button type="button" name="bulk_delete" id="bulk_delete" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></button> --}}
                        <thead>
                            <tr>
                                <th><input name="select_all" value="1" id="example-select-all" type="checkbox" /></th>
                                <th>No</th>
                                <th>unit bagian</th>
                                <th>id realisasi rkkl</th>
                                <th>nomor surat tugas</th>
                                <th>nama pelaksana</th>
                                <th>jabatan</th>
                                <th>nip</th>
                                <th>golongan</th>
                                <th>tanggal pelaksanaan dari</th>
                                <th>tanggal pelaksanaan sampai</th>
                                <th>tempat pelaksana</th>
                                <th>kode anggaran</th>
                                <th>kode uraian kegiatan</th>
                                <th>nama uraian kegiatan</th>
                                <th>sub menu uraian kegiatan</th>
                                <th>kelompok pagu anggaran</th>
                                <th>hari</th>
                                <th>nilai</th>
                                <th>hari x nilai</th>
                                <th>keterangan</th>
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
                                <input id="bagian" name="bagian" required="" readonly
                                    placeholder="bagian ..." class="form-control" autocomplete="on">
                                @error('bagian')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="t_realisasi_rkkl_id">id realisasi rkkl <span style="color:red">read
                                        only</span></label>
                                <input id="t_realisasi_rkkl_id" name="t_realisasi_rkkl_id" required="" readonly
                                    placeholder="realiasi rkkl id ..." class="form-control" autocomplete="on" >
                                @error('nama_pelaksana')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror
                            </div>

                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col">
                            <label for="ref_keuangan_uraian_kegiatan_id"> referensi anggaran <span
                                        style="color:red;font-weight:bold">*</span></label>
                                <br>
                                <select id="ref_keuangan_uraian_kegiatan_id" name="ref_keuangan_uraian_kegiatan_id" required>
                                    <option value="">referensi anggaran ...</option>
                                    @foreach($datas as $data)
                                    <option value="{{ $data->id}}">
                                        {{$data->nama_uraian_kegiatan}} - {{$data->nama_sub_menu_uraian_kegiatan}} - {{$data->kelompok_pagu}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col">
                                <label class="col-sm-12 control-label">keterangan<span
                                        style="color:red;font-weight:bold">*</span></label>
                                <div class="col-sm-12">
                                    <select id="keterangan" name="keterangan" required>
                                        <option value="">pilih keterangan ...</option>
                                        @foreach($keterangans as $keterangan)
                                        <option value="{{ $keterangan->keterangan}}"> {{$keterangan->keterangan}}
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                        </div>

                        <br>

                        <div class="form-row">
                            <div class="col">
                                <label for="hari"> hari <span style="color:red"></label>
                                <input id="hari" name="hari"  required=""
                                    placeholder="hari ..." class="form-control" autocomplete="on">
                                @error('hari')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror
                            </div>

                            <div class="col">
                                <label for="nilai"> nilai <span style="color:red"></label>
                                <input id="nilai" name="nilai"  required=""
                                    placeholder="nilai ..." class="form-control" autocomplete="on">
                                @error('nilai')
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

<script>
    $(document).ready(function() {
        // Initialize select2
        $("#keterangan").select2();
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
            lengthMenu: [
            [10, 25, 50, 100, -1],
            [10, 25, 50, 100, 'All'],
            ],

            autoWidth: true,
            processing: true,
            serverSide: true,
            // scrollX: true,
            ajax: "{{ route('rincianpengeluaran.index') }}",
            columns: [
                {   data:'checkbox',
                    targets: 0,
                    orderable:false,
                    searchable:false,

                },
                {
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'bagian',
                    name: 'ref_unitbagian.name',
                    searchable: true
                },
                {
                    data: 't_realisasi_rkkl_id',
                    name: 't_realisasi_rkkl_id',
                    searchable: true
                },
                {
                    data: 'nomor_surat_tugas',
                    name: 't_realisasi_rkkl.nomor_surat_tugas',
                    searchable: true
                },
                {
                    data: 'nama_pelaksana',
                    name: 't_realisasi_tempatpelaksanaan.nama_pelaksana',
                    searchable: true
                },
                {
                    data: 'jabatan',
                    name: 't_realisasi_tempatpelaksanaan.jabatan',
                    searchable: true
                },
                {
                    data: 'nip',
                    name: 't_realisasi_tempatpelaksanaan.nip',
                    searchable: true
                },
                {
                    data: 'golongan',
                    name: 't_realisasi_tempatpelaksanaan.golongan',
                    searchable: true
                },
                {
                    data: 'tanggal_pelaksana_dari',
                    name: 't_realisasi_rkkl.tanggal_pelaksana_dari',
                    searchable: true
                },
                {
                    data: 'tanggal_pelaksana_sampai',
                    name: 't_realisasi_rkkl.tanggal_pelaksana_sampai',
                    searchable: true
                },
                {
                    data: 'tempat_pelaksana',
                    name: 't_realisasi_tempatpelaksanaan.tempat_pelaksana',
                    searchable: true
                },
                {
                    data: 'kode_anggaran',
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
                    data: 'hari',
                    name: 'hari',
                    searchable: true
                },
                {
                    data: 'nilai',
                    name: 'nilai',
                    searchable: true
                },
                {
                    data: 'nilai_pagu_realisasi',
                    name: 'nilai_pagu_realisasi',
                    searchable: true
                },
                {
                    data: 'keterangan',
                    name: 'keterangan',
                    searchable: true
                },
                {
                    data: 'tahun_anggaran',
                    name: 'tahun_anggaran',
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
            order: [1, 'asc'],
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
        $('#example-select-all').on('click', function(){
        // Check/uncheck all checkboxes in the table
        var rows = table.rows({ 'search': 'applied' }).nodes();
        $('input[type="checkbox"]', rows).prop('checked', this.checked);
        });
        $('#example tbody').on('change', 'input[type="checkbox"]', function(){
        // If checkbox is not checked
        if(!this.checked){
            var el = $('#example-select-all').get(0);
            // If "Select all" control is checked and has 'indeterminate' property
            if(el && el.checked && ('indeterminate' in el)){
            // Set visual state of "Select all" control
            // as 'indeterminate'
            el.indeterminate = true;
                }
            }
        });
        $('#frm-example').on('submit', function(e){
        var form = this;

        // Iterate over all checkboxes in the table
        table.$('input[type="checkbox"]').each(function(){
         // If checkbox doesn't exist in DOM
            if(!$.contains(document, this)){
            // If checkbox is checked
                if(this.checked){
                // Create a hidden element
                $(form).append(
                    $('<input>')
                        .attr('type', 'hidden')
                        .attr('name', this.name)
                        .val(this.value)
                );
                }
            }
        });
        $('#example-console').text($(form).serialize());
        console.log("Form submission", $(form).serialize());

        // Prevent actual form submission
        e.preventDefault();
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
                $('#hari').val(data.hari);
                $('#nilai').val(data.nilai);
                $('#nilai').val(data.keterangan);
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
                ref_keuangan_uraian_kegiatan_id: "required",
                hari: "required",
                nilai: "required",
                keterangan: "required"
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
                            $("#ref_keuangan_uraian_kegiatan_id").val(null).trigger("change");
                            $("#keterangan").val(null).trigger("change");
                            $('#saveBtn').html('Save Changes');
                            $('#ModalSuccess').modal('show');
                            // $('#response').html(
                            //     '<button type="button" class="btn mb-3 btn-info rounded-pill"><i class="ri-heart-fill"></i> perubahan data pengeluaran berhasil <i class="ri-heart-fill"></i></button>'
                            // );
                            $("#ModalSuccess").fadeTo(5000, 500).slideUp(500, function() {
                                $("#ModalSuccess").slideUp(500);
                                $('#ModalSuccess').modal('hide');
                            });
                            table.draw();
                        } else {
                            $('#productForm').trigger("reset");
                            $('#ajaxModel').modal('hide');
                            $("#ref_keuangan_uraian_kegiatan_id").val(null).trigger("change");
                            $("#keterangan").val(null).trigger("change");
                            $('#saveBtn').html('Save Changes');
                            $('#ModalFailure').modal('show');
                            // $('#response').html(
                            //    '<button type="button" class="btn mb-3 btn-danger rounded-pill"><i class="las la-skull-crossbones"></i> perubahan data pengeluaran gagal <i class="las la-skull-crossbones"></i></button> <button type="button" class="btn mb-3 btn-warning rounded-pill"><i class="las la-exclamation-triangle"></i> pastikan sisa anggaran mencukupi <i class="las la-exclamation-triangle"></i></button>'
                            // );
                            $("#ModalFailure").fadeTo(5000, 500).slideUp(500, function() {
                                $("#ModalFailure").slideUp(500);
                                $('#ModalFailure').modal('hide');
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
                            $('#ModalSuccessDelete').modal('show');
                            // $('#response').html(
                            //     '<button type="button" class="btn mb-3 btn-warning rounded-pill"><i class="las la-exclamation-triangle"></i> data rincian pengeluaran telah dihapus <i class="las la-exclamation-triangle"></i></button>'
                            // );
                            $("#ModalSuccessDelete").fadeTo(5000, 500).slideUp(500, function() {
                                $("#ModalSuccessDelete").slideUp(500);
                                $('#ModalSuccessDelete').modal('hide');
                            });
                            table.draw();
                        } else {
                            $('#ModalFailureDelete').modal('show');
                            // $('#response').html(
                            //     '<button type="button" class="btn mb-3 btn-danger rounded-pill"><i class="las la-skull-crossbones"></i> data rincian pengeluaran gagal dihapus <i class="las la-skull-crossbones"></i></button>'
                            // );
                            $("#ModalFailureDelete").fadeTo(5000, 500).slideUp(500,
                                function() {
                                    $("#ModalFailureDelete").slideUp(500);
                                    $('#ModalFailureDelete').modal('hide');
                                });
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
        $(document).on('click', '#bulk_delete', function(){
        var id = [];
        if(confirm("kamu yakin akan menghapus data ini?"))
        {
            $('.pengeluaran_checkbox:checked').each(function(){
                id.push($(this).val());
            });
            if(id.length > 0)
            {
                $.ajax({
                    url:"{{ route('rincianpengeluaran.massremove')}}",
                    method:"get",
                    data:{id:id},
                    success:function(data)
                    {
                        alert(data);
                        $('.data-table').DataTable().ajax.reload();
                    }
                });
            }
            else
            {
                alert("pilih data yang ingin dihapus terlebih dahulu");
            }
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