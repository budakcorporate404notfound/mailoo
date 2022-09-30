@extends('layouts.app')

@section('nama_menu')

<h5 class="mb-0">
    Realisasi RKKL
</h5>

<nav aria-label="breadcrumb">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Keuangan</a></li>
        <li class="breadcrumb-item active" aria-current="page">Realisasi RKKL</li>
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

    .textaligncenter {
        text-align: center;
    }

    .bg-cream{
    background-color: #FFCC8F;
    }

    .bg-softcream{
    background-color: #FFE182;
    }

    .bg-softred{
    background-color: #FFA282;
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
                    <br> data berhasil dilakukan penghapusan dari surat tugas
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
                    <h4 class="card-title">Realisasi RKKL </h4>

                    <div id="response"></div>

                </div>

                {{-- <div>
                    <br>
                    <a class="btn btn-primary rounded-pill mb-3" href="javascript:void(0)" id="createNewProduct"
                        title="tambah realisasi rkkl"> + </a>
                </div>
                 --}}
                {{-- <button type="button" class="btn btn-info rounded-pill mb-3">Info</button> --}}
            </div>
            <div class="iq-card-body">
                <div class="table-responsive">
                    {{-- <table class="table table-bordered data-table"> --}}
                    <table id="datatable" class="table table-striped table-bordered data-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>id realiasi rkkl</th>
                                <th>nomor surat tugas</th>
                                <th>tanggal surat tugas</th>
                                <th>tanggal pelaksanaan dari</th>
                                <th>tanggal pelaksanaan sampai</th>
                                <th>nama pelaksana</th>
                                <th>nip</th>
                                <th>gol</th>
                                <th>jabatan</th>
                                <th>tempat pelaksanaan</th>
                                <th>kode anggaran</th>
                                <th>nilai anggaran</th>
                                <th>Pembuat Laporan</th>
                                <th>file pdf</th>
                                <th>kelengkapan</th>
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
                                <label for="nomor_surat_tugas">nomor surat tugas <span
                                        style="color:red;font-weight:bold">*</span></label>
                                <input id="nomor_surat_tugas" name="nomor_surat_tugas" required
                                    placeholder="nomor surat tugas ..." class="form-control" autocomplete="on">
                                @error('nomor_surat_tugas')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="tanggal_surat_tugas">tanggal surat tugas <span
                                        style="color:red;font-weight:bold">*</span></label>
                                <input type="date" id="tanggal_surat_tugas" name="tanggal_surat_tugas" required=""
                                    placeholder="tanggal surat tugas ..." class="form-control" autocomplete="on">
                                @error('tanggal_surat_tugas')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror
                            </div>
                        </div>

                        <br>

                        <div class="form-row">
                            <div class="col">
                                <label for="tanggal_pelaksana_dari">tanggal pelaksanaan dari <span
                                        style="color:red;font-weight:bold">*</span></label>
                                <input type="date" id="tanggal_pelaksana_dari" name="tanggal_pelaksana_dari"
                                    placeholder="tanggal pelaksanaan dari  ..." class="form-control" autocomplete="on">
                                @error('tanggal_pelaksana_dari')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="tanggal_pelaksana_sampai">tanggal pelaksanaan sampai <span
                                        style="color:red;font-weight:bold">*</span></label>
                                <input type="date" id="tanggal_pelaksana_sampai" name="tanggal_pelaksana_sampai"
                                    required="" placeholder="tanggal pelaksanaan sampai ..." class="form-control" autocomplete="on">
                                @error('tanggal_pelaksana_sampai')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror
                            </div>
                        </div>

                        <br>

                        <div class="iq-card-body" id="verifikasi_kelengkapan">
                            <p>apakah data sudah lengkap ? <span style="color:red;font-weight:bold">*</span></p>

                            <div class="custom-control custom-radio custom-radio-color-checked custom-control-inline">
                                <input type="radio" id="customRadio-3" name="verifikasi_kelengkapan"
                                    value="belum lengkap" class="custom-control-input bg-danger">
                                <label class="custom-control-label" for="customRadio-3"> belum lengkap</label>
                            </div>

                            <div class="custom-control custom-radio custom-radio-color-checked custom-control-inline">
                                <input type="radio" id="customRadio-6" name="verifikasi_kelengkapan"
                                    value="sudah lengkap" class="custom-control-input bg-info">
                                <label class="custom-control-label" for="customRadio-6"> sudah lengkap </label>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save
                                changes</button>
                        </div>

                        {{-- <div class="form-group">
                            <label class="col-sm-12 control-label">Tempat Pelaksanaan</label>
                            <div class="col-sm-12">
                                <input type="text" id="tempat_pelaksana" name="tempat_pelaksana" required=""
                                    placeholder="tempat pelakasana" class="form-control">
                            </div>
                        </div> --}}

                        {{-- <div class="form-group">
                            <label class="col-sm-12 control-label">menggunakan pagu anggaran</label>
                            <div class="col-sm-12">
                                <select id="id_kode_uraian_kegiatan" name="id_kode_uraian_kegiatan">
                                    <option value="">pilih pagu anggaran ...</option>
                                    @foreach($datas as $data)
                                    <option value="{{ $data->id}}">
                        {{ $data->nama_uraian_kegiatan}}-{{ $data->nama_sub_menu_uraian_kegiatan}}
                        </option>
                        @endforeach
                        </select>
                </div>

            </div> --}}
            {{--
            <div class="form-group">
                <label class="col-sm-12 control-label">menggunakan pagu anggaran</label>
                <div class="col-sm-12">
                    <select class="livesearch3 form-control" style="width: 100%" name="id_kode_uraian_kegiatan"
                        id="livesearch3"></select>
                </div>
            </div> --}}

            {{-- <div class="form-group">
                <label class="col-sm-12 control-label">nilai realisasi pagu anggaran</label>
                <div class="col-sm-12">
                    <input type="text" id="nilai_pagu_realisasixx" name="nilai_pagu_realisasi" required=""
                        placeholder="menggunakan pagu anggaran" class="form-control">
                </div>
            </div> --}}

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

                    <form id="productFormx" name="productFormx" class="form-horizontal">

                        <input type="hidden" name="product_id" id="product_idx">

                        <div class="form-row">
                            <div class="col">
                                <label for="nomor_surat_tugas">nama pelaksana <span
                                        style="color:red;font-weight:bold">*</span></label>
                                <input type="text" id="nomor_surat_tugas" name="nama_pelaksana" required
                                    placeholder="nama pelaksana ..." class="form-control" autocomplete="on">
                                @error('nama_pelaksana')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="tanggal_surat_tugas">nip</label>
                                <input type="number" id="nip" name="nip" placeholder="nip ..." class="form-control" autocomplete="on">
                                @error('nip')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror
                            </div>
                        </div>

                        <br>

                        <div class="form-row">
                            <div class="col">
                                <label for="nomor_surat_tugas">golongan </label>
                                <input type="text" id="golongan" name="golongan" placeholder="golongan ..."
                                    class="form-control" autocomplete="on">
                                @error('golongan')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="jabatan">jabatan <span style="color:red;font-weight:bold">*</span></label>
                                <input type="text" id="jabatan" name="jabatan" required required=""
                                    placeholder="jabatan ..." class="form-control" autocomplete="on">
                                @error('jabatan')
                                <span class="text-danger"> {{$message}} </span>
                                @enderror
                            </div>
                        </div>

                        <br>
                        {{-- <div class="form-group">
                                    <label class="col-sm-12 control-label">tempat pelaksana</label>
                                    <div class="col-sm-12">
                                        <select class="livesearch form-control" style="width: 100%"
                                            name="tempat_pelaksana" id="livesearch"></select>
                                    </div>
                                </div> --}}

                        <div class="form-row">
                            <div class="col">
                                <label for="tempat_pelaksana">tempat pelaksana <span
                                        style="color:red;font-weight:bold">*</span></label>
                                <br>
                                <select id="tempat_pelaksana" name="tempat_pelaksana">
                                    <option value="">tempat pelaksana ...</option>
                                    @foreach($tempats as $tempat)
                                    <option value="{{ $tempat->nama_satuankerja}}">
                                        {{$tempat->nama_satuankerja}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <br>

                        {{-- <div class="form-group">
                                    <label class="col-sm-12 control-label">tempat pelaksana </label>
                                    <div class="col-sm-12">
                                        <select id="tempat_pelaksana" name="tempat_pelaksana">
                                            <option value="">tempat pelaksana ...</option>
                                            @foreach($tempats as $tempat)
                                            <option value="{{ $tempat->nama_satuankerja}}">
                        {{$tempat->nama_satuankerja}}
                        </option>
                        @endforeach
                        </select>
                </div>
            </div> --}}

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" id="saveBtnx" value="create">Save
                    changes</button>
            </div>
            </form>

        </div>
    </div>
    </div>
    </div>

    <div class="modal fade" id="ajaxModelv" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modelHeadingv"></h4>
                </div>
                <div class="modal-body">

                    <form id="productFormv" name="productFormv" class="form-horizontal">

                        <input type="hidden" name="product_id" id="product_idv">

                        <div class="form-group">
                            <label class="col-sm-12 control-label">referensi realisasi pagu anggaran <span
                                    style="color:red;font-weight:bold">*</span></label>
                            <div class="col-sm-12">
                                <select id="ref_keuangan_uraian_kegiatan_id" name="ref_keuangan_uraian_kegiatan_id"
                                    required>
                                    <option value="">referensi realisasi pagu anggaran ...</option>
                                    @foreach($datas as $data)
                                    <option value="{{ $data->id}}"> {{$data->nama_uraian_kegiatan}} >>
                                        {{$data->nama_sub_menu_uraian_kegiatan}} >> {{$data->kelompok_pagu}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-12 control-label">nilai realisasi <span
                                    style="color:red;font-weight:bold">*</span></label>
                            <div class="col-sm-12">
                                <input type="text" id="nilai_pagu_realisasixx" name="nilai_pagu_realisasi" required
                                    placeholder="nilai realisasi ..." class="form-control">
                            </div>
                        </div>

                        <br>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" id="saveBtnv" value="create">Save
                                changes</button>
                        </div>

                        {{-- <div class="form-group">
                                    <label class="col-sm-12 control-label">tempat pelaksana</label>
                                    <div class="col-sm-12">
                                        <select class="livesearch form-control" style="width: 100%"
                                            name="tempat_pelaksana" id="livesearch"></select>
                                    </div>
                                </div> --}}

                        {{-- <div class="form-group">
                                    <label class="col-sm-12 control-label">tempat pelaksana</label>
                                    <div class="col-sm-12">
                                        <select id="tempat_pelaksana" name="tempat_pelaksana">
                                            <option value="">tempat pelaksana ...</option>
                                            @foreach($tempats as $tempat)
                                            <option value="{{ $tempat->nama_satuankerja}}">
                        {{$tempat->nama_satuankerja}}
                        </option>
                        @endforeach
                        </select>
                </div>
            </div> --}}

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
                                <input type="hidden" name="nomor_surat_tugas" id="nomor_surat_tugasz">

                                {{-- <div class="form-group">
                                    <label class="col-sm-12 control-label">nama pembuat laporan </label>
                                    <div class="col-sm-12">
                                        <select class="livesearch2 form-control" style="width: 100%" name="user"
                                            id="livesearch2"></select>
                                    </div>
                                </div> --}}

                                <div class="form-group">
                                    <label class="col-sm-12 control-label">nama pembuat laporan <span
                                            style="color:red;font-weight:bold">*</span></label>
                                    <div class="col-sm-12">
                                        <select id="user" name="user" required>
                                            <option value="">nama pembuat laporan ...</option>
                                            @foreach($laporans as $laporan)
                                            <option value="{{ $laporan->name}}"> {{$laporan->name}}
                                            </option>
                                            @endforeach
                                        </select>
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
            ajax: "{{ route('realisasirkkl.index') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false,
                    className: 'textaligncenter',
                    render: function(data, type, row) {
                        console.log('content of data is :' + data);
                        badge = '';
                        switch (data) {
                            case 0:
                                badge = '<span class="badge bg-cream" style="width : 100%">' +
                                    data + '</span>';
                                break;
                            default:
                                badge = '<span class="badge bg-cream" style="width : 100%">' +
                                    data + '</span>';
                                break;
                        }
                        console.log('content of badge is' + badge);
                        return badge;
                    }
                },
                {
                    data: 'id',
                    name: 'id',
                    searchable: true,
                    className: 'textaligncenter',
                    render: function(data, type, row) {
                        console.log('content of data is :' + data);
                        badge = '';
                        switch (data) {
                            case 0:
                                badge = '<span class="badge bg-cream" style="width : 100%">' +
                                    data + '</span>';
                                break;
                            default:
                                badge = '<span class="badge bg-cream" style="width : 100%">' +
                                    data + '</span>';
                                break;
                        }
                        console.log('content of badge is' + badge);
                        return badge;
                    }
                },
                {
                    data: 'nomor_surat_tugas',
                    name: 'nomor_surat_tugas',
                    searchable: true,
                    className: 'textaligncenter',
                    render: function(data, type, row) {
                        console.log('content of data is :' + data);
                        badge = '';
                        switch (data) {
                            case 0:
                                badge = '<span class="badge bg-cream" style="width : 100%">' +
                                    data + '</span>';
                                break;
                            default:
                                badge = '<span class="badge bg-cream" style="width : 100%">' +
                                    data + '</span>';
                                break;
                        }
                        console.log('content of badge is' + badge);
                        return badge;
                    }
                },
                {
                    data: 'tanggal_surat_tugas',
                    name: 'tanggal_surat_tugas',
                    searchable: true,
                    className: 'textaligncenter',
                    render: function(data, type, row) {
                        console.log('content of data is :' + data);
                        badge = '';
                        switch (data) {
                            case 0:
                                badge = '<span class="badge bg-cream" style="width : 100%">' +
                                    data + '</span>';
                                break;
                            default:
                                badge = '<span class="badge bg-cream" style="width : 100%">' +
                                    data + '</span>';
                                break;
                        }
                        console.log('content of badge is' + badge);
                        return badge;
                    }
                },
                {
                    data: 'tanggal_pelaksana_dari',
                    name: 'tanggal_pelaksana_dari',
                    searchable: true,
                    className: 'textaligncenter',
                    render: function(data, type, row) {
                        console.log('content of data is :' + data);
                        badge = '';
                        switch (data) {
                            case 0:
                                badge = '<span class="badge bg-cream" style="width : 100%">' +
                                    data + '</span>';
                                break;
                            default:
                                badge = '<span class="badge bg-cream" style="width : 100%">' +
                                    data + '</span>';
                                break;
                        }
                        console.log('content of badge is' + badge);
                        return badge;
                    }
                },
                {
                    data: 'tanggal_pelaksana_sampai',
                    name: 'tanggal_pelaksana_sampai',
                    searchable: true,
                    className: 'textaligncenter',
                    render: function(data, type, row) {
                        console.log('content of data is :' + data);
                        badge = '';
                        switch (data) {
                            case 0:
                                badge = '<span class="badge bg-cream" style="width : 100%">' +
                                    data + '</span>';
                                break;
                            default:
                                badge = '<span class="badge bg-cream" style="width : 100%">' +
                                    data + '</span>';
                                break;
                        }
                        console.log('content of badge is' + badge);
                        return badge;
                    }
                },
                {
                    data: 'nama_pelaksana',
                    name: 'nama_pelaksana',
                    searchable: true,
                    className: 'textaligncenter',
                    render: function(data, type, row) {
                        console.log('content of data is :' + data);
                        badge = '';
                        switch (data) {
                            case 0:
                                badge = '<span class="badge bg-softcream" style="width : 100%">' +
                                    data + '</span>';
                                break;
                            default:
                                badge = '<span class="badge bg-softcream" style="width : 100%">' +
                                    data + '</span>';
                                break;
                        }
                        console.log('content of badge is' + badge);
                        return badge;
                    }
                },
                {
                    data: 'nip',
                    name: 'nip',
                    searchable: true,
                    className: 'textaligncenter',
                    render: function(data, type, row) {
                        console.log('content of data is :' + data);
                        badge = '';
                        switch (data) {
                            case 0:
                                badge = '<span class="badge bg-softcream" style="width : 100%">' +
                                    data + '</span>';
                                break;
                            default:
                                badge = '<span class="badge bg-softcream" style="width : 100%">' +
                                    data + '</span>';
                                break;
                        }
                        console.log('content of badge is' + badge);
                        return badge;
                    }
                },
                {
                    data: 'gol',
                    name: 'gol',
                    searchable: true,
                    className: 'textaligncenter',
                    render: function(data, type, row) {
                        console.log('content of data is :' + data);
                        badge = '';
                        switch (data) {
                            case 0:
                                badge = '<span class="badge bg-softcream" style="width : 100%">' +
                                    data + '</span>';
                                break;
                            default:
                                badge = '<span class="badge bg-softcream" style="width : 100%">' +
                                    data + '</span>';
                                break;
                        }
                        console.log('content of badge is' + badge);
                        return badge;
                    }
                },
                {
                    data: 'jabatan',
                    name: 'jabatan',
                    searchable: true,
                    className: 'textaligncenter',
                    render: function(data, type, row) {
                        console.log('content of data is :' + data);
                        badge = '';
                        switch (data) {
                            case 0:
                                badge = '<span class="badge bg-softcream" style="width : 100%">' +
                                    data + '</span>';
                                break;
                            default:
                                badge = '<span class="badge bg-softcream" style="width : 100%">' +
                                    data + '</span>';
                                break;
                        }
                        console.log('content of badge is' + badge);
                        return badge;
                    }
                },
                {
                    data: 'tempat_pelaksana',
                    name: 'tempat_pelaksana',
                    searchable: true,
                    className: 'textaligncenter',
                    render: function(data, type, row) {
                        console.log('content of data is :' + data);
                        badge = '';
                        switch (data) {
                            case 0:
                                badge = '<span class="badge bg-softcream" style="width : 100%">' +
                                    data + '</span>';
                                break;
                            default:
                                badge = '<span class="badge bg-softcream" style="width : 100%">' +
                                    data + '</span>';
                                break;
                        }
                        console.log('content of badge is' + badge);
                        return badge;
                    }
                },
                {
                    data: 'ref_keuangan_uraian_kegiatan_id',
                    name: 'ref_keuangan_uraian_kegiatan_id',
                    searchable: true,
                    className: 'textaligncenter',
                    render: function(data, type, row) {
                        console.log('content of data is :' + data);
                        badge = '';
                        switch (data) {
                            case 0:
                                badge = '<span class="badge bg-softred" style="width : 100%">' +
                                    data + '</span>';
                                break;
                            default:
                                badge = '<span class="badge bg-softred" style="width : 100%">' +
                                    data + '</span>';
                                break;
                        }
                        console.log('content of badge is' + badge);
                        return badge;
                    }
                },
                {
                    data: 'nilai_pagu_realisasi',
                    name: 'nilai_pagu_realisasi',
                    searchable: true,
                    className: 'textaligncenter',
                    render: function(data, type, row) {
                        console.log('content of data is :' + data);
                        badge = '';
                        switch (data) {
                            case 0:
                                badge = '<span class="badge bg-softred" style="width : 100%">' +
                                    data + '</span>';
                                break;
                            default:
                                badge = '<span class="badge bg-softred" style="width : 100%">' +
                                    data + '</span>';
                                break;
                        }
                        console.log('content of badge is' + badge);
                        return badge;
                    }
                },
                {
                    data: 'pembuat_laporan',
                    name: 'pembuat_laporan',
                    searchable: true,
                    className: 'textaligncenter',
                    render: function(data, type, row) {
                        console.log('content of data is :' + data);
                        badge = '';
                        switch (data) {
                            case 0:
                                badge = '<span class="badge badge-warning" style="width : 100%">' +
                                    data + '</span>';
                                break;
                            default:
                                badge = '<span class="badge badge-warning" style="width : 100%">' +
                                    data + '</span>';
                                break;
                        }
                        console.log('content of badge is' + badge);
                        return badge;
                    }
                },
                {
                    data: 'file_pdf',
                    name: 'file_pdf',
                    searchable: true
                },
                {
                    data: 'verifikasi_kelengkapan',
                    name: 'verifikasi_kelengkapan',
                    searchable: true
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    className: 'textaligncenter',
                    render: function(data, type, row) {
                        console.log('content of data is :' + data);
                        badge = '';
                        switch (data) {
                            case 0:
                                badge = '<span class="badge badge-dark" style="width : 100%">' +
                                    data + '</span>';
                                break;
                            default:
                                badge = '<span class="badge badge-dark" style="width : 100%">' +
                                    data + '</span>';
                                break;
                        }
                        console.log('content of badge is' + badge);
                        return badge;
                    }
                },
            ],
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
            $('#modelHeading').html("Tambah Realiasasi RKKL");
            $('#verifikasi_kelengkapan').hide();
            $('#ajaxModel').modal('show');
        });
        $('body').on('click', '.editProduct', function() {
            var product_id = $(this).data('id');
            $.get("{{ route('spj.index') }}" + '/' + product_id + '/edit', function(data) {
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
            $.get("{{ route('realisasirkkl.index') }}" + '/' + product_id + '/edit', function(data) {
                $('#modelHeadingy').html("Tambah realisasi");
                $('#saveBtny').val("edit-user");
                $('#ajaxModely').modal('show');
                $('#product_idy').val(data.id);
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
                nomor_surat_tugas: "required",
                tanggal_surat_tugas: "required",
                tanggal_pelaksana_dari: "required",
                tanggal_pelaksana_sampai: "required",
                verifikasi_kelengkapan: "required"
            },
        });
        $('#saveBtn').click(function(e) {
            if ($("#productForm").valid()) {
                e.preventDefault();
                $(this).html('Sending..');
                $.ajax({
                    data: $('#productForm').serialize(),
                    url: "{{ route('realisasirkkl.store') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function(data) {
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
                    },
                    error: function(data) {
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
                nama_pelaksana: "required",
                jabatan: "required",
                tempat_pelaksana: "required",
            },
        });
        $('#saveBtnx').click(function(e) {
            if ($("#productFormx").valid()) {
                e.preventDefault();
                $(this).html('Sending..');
                $.ajax({
                    data: $('#productFormx').serialize(),
                    url: "{{ route('realisasirkkl.storex') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function(data) {
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
                    },
                    error: function(data) {
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
            },
        });
        $('#saveBtnz').click(function(e) {
            if ($("#productFormz").valid()) {
                e.preventDefault();
                $(this).html('Sending..');
                $.ajax({
                    data: $('#productFormz').serialize(),
                    url: "{{ route('realisasirkkl.storez') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function(data) {
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
                    },
                    error: function(data) {
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
                ref_keuangan_uraian_kegiatan_id: "required",
                nilai_pagu_realisasi: "required"
            },
        });
        $('#saveBtnv').click(function(e) {
            if ($("#productFormv").valid()) {
                e.preventDefault();
                $(this).html('Sending..');
                $.ajax({
                    data: $('#productFormv').serialize(),
                    url: "{{ route('realisasirkkl.storev') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function(data) {
                        if (data.success) {
                            $('#productFormv').trigger("reset");
                            $('#ajaxModelv').modal('hide');
                            $("#ref_keuangan_uraian_kegiatan_id").val(null).trigger(
                                "change");
                            $('#saveBtnv').html('Save Changes');
                            $('#ModalSuccess').modal('show');
                            // $('#response').html(
                            //     '<button type="button" class="btn mb-3 btn-info rounded-pill"><i class="ri-heart-fill"></i> tambah realisasi anggaran berhasil <i class="ri-heart-fill"></i></button>'
                            // );
                            $("#ModalSuccess").fadeTo(5000, 500).slideUp(500, function() {
                                $("#ModalSuccess").slideUp(500);
                                $('#ModalSuccess').modal('hide');
                            });
                            table.draw();
                        } else {
                            $('#productFormv').trigger("reset");
                            $('#ajaxModelv').modal('hide');
                            $("#ref_keuangan_uraian_kegiatan_id").val(null).trigger(
                                "change");
                            $('#saveBtnv').html('Save Changes');
                            $('#ModalFailure').modal('show');
                            // $('#response').html(
                            //     '<button type="button" class="btn mb-3 btn-danger rounded-pill"><i class="las la-skull-crossbones"></i> tambah realisasi anggaran gagal <i class="las la-skull-crossbones"></i></button> <button type="button" class="btn mb-3 btn-warning rounded-pill"><i class="las la-exclamation-triangle"></i> pastikan sisa anggaran mencukupi <i class="las la-exclamation-triangle"></i></button>'
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
                        $('#saveBtnv').html('Save Changes');
                    }
                });
            }
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
            var result = confirm("kamu yakin akan menghapus data ini !");
            if (result) {
                $.ajax({
                    type: "DELETE",
                    url: "{{ route('realisasirkkl.store') }}" + '/' + product_id,
                    success: function(data) {
                        if (data.success) {
                            $('#ModalSuccessDelete').modal('show');
                            // $('#response').html(
                            //     '<button type="button" class="btn mb-3 btn-warning rounded-pill"><i class="las la-exclamation-triangle"></i> data realisasi rkkl telah dihapus <i class="las la-exclamation-triangle"></i></button>'
                            // );
                            $("#ModalSuccessDelete").fadeTo(5000, 500).slideUp(500,
                                function() {
                                    $("#ModalSuccessDelete").slideUp(500);
                                    $('#ModalSuccessDelete').modal('hide');
                                });
                            table.draw();
                        } else {
                            $('#ModalFailureDelete').modal('show');
                            //  $('#response').html(
                            //     '<button type="button" class="btn mb-3 btn-danger rounded-pill"><i class="las la-skull-crossbones"></i> data realisasi rkkl gagal dihapus <i class="las la-skull-crossbones"></i></button>'
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