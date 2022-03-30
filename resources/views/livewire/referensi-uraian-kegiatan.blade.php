<div>

    @include('livewire.tambah-referensi-uraian-kegiatan');
    @include('livewire.update-referensi-uraian-kegiatan');

    @section('nama_menu')

    <h5 class="mb-0">
        Keuangan
    </h5>

    <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a>Keuangan </a></li>
            <li class="breadcrumb-item active" aria-current="page">Referensi Uraian Kegiatan</li>
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
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-8">
                                    <h3>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-secondary  " data-toggle="modal"
                                            data-target="#addStudentsModal_ReferensiUraianKegiatan">
                                            <i class="las la-plus" style="font-size: 16px"></i>data
                                        </button>

                                        <a style="color: #6c757d">referensi uraian kegiatan</a>
                                    </h3>
                                </div>

                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="search..."
                                        wire:model="searchTerm">
                                </div>
                            </div>

                        </div>
                        <div class="card-body">

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>id unit bagian</th>
                                        <th>nama bagian</th>
                                        <th>kode uraian kegiatan</th>
                                        <th>nama uraian kegiatan</th>
                                        <th>nama sub menu uraian kegiatan</th>
                                        <th>pagu anggaran</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($data as $t)
                                    <tr>
                                        <td> {{$t->id_unitbagian}} </td>
                                        <td> {{$t->name}} </td>
                                        <td> {{$t->kode_uraian_kegiatan}} </td>
                                        <td> {{$t->nama_uraian_kegiatan}} </td>
                                        <td> {{$t->nama_sub_menu_uraian_kegiatan}} </td>
                                        <td> {{$t->pagu_anggaran}} </td>

                                        <td>
                                            <button type="button" class="btn btn-warning" data-toggle="modal"
                                                data-target="#updateStudentsModal_referensiuraiankegiatan"
                                                wire:click.prevent="edit_referensiuraiankegiatan({{$t->id}})">E</button>
                                            {{-- <button type="button" class="btn btn-danger"
                                                wire:click.prevent="delete({{$t->id}})">D</button> --}}
                                            <button type="button" wire:click="deleteId({{ $t->id }})"
                                                class="btn btn-danger" data-toggle="modal"
                                                data-target="#exampleModal">D</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <button type="button" class="btn mb-3 btn-primary" wire:click="loadMore()"><i
                                    class="las la-redo-alt" style="font-size: 16px "></i>load data</button>
                            {{-- <button type="button" class="btn mb-3 btn-primary"><i class="ri-bill-fill"></i>Primary</button> --}}
                            <br>
                            <br>
                            {{$data->links()}}

                            {{-- <div>
                                <button type="button" wire:click.prevent="test()"> test </button>
                            </div> --}}

                        </div>

                        @livewire('datatable-suratmasuk')

                    </div>
                </div>

            </div>

        </div>
    </section>

    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true close-btn">×</span>
                            </button>
                        </div>
                       <div class="modal-body">
                            <p>Apakah kamu yakin ingin menghapusnya ?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Tutup</button>
                            <button type="button" wire:click.prevent="delete()" class="btn btn-danger close-modal" data-dismiss="modal">Iya, Hapus  </button>
                        </div>
                    </div>
                </div>
            </div>


    @livewireScripts
    {{-- <script src="assets/js/jquery.min.js"></script> --}}

</div>

</div>