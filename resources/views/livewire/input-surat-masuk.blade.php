<div>

    @include('livewire.tambah-surat-masuk');
    {{-- @include('livewire.update'); --}}

    @section('nama_menu')

    <h5 class="mb-0">
        Surat Masuk
    </h5>

    <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a>Surat Masuk&#160;</a></li>
            <li><a><i class="fas fa-caret-right"></i>&#160;Input Surat Masuk</a></li>
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
                                            data-target="#addStudentsModal"><i class="far fa-envelope"></i><i class="fas fa-plus"></i>
                                        </button>

                                        <a style="color: #6c757d">Input Surat Masuk</a>
                                    </h3>
                                </div>

                                {{-- <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="search..."
                                        wire:model="searchTerm">
                                </div> --}}
                            </div>

                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>nomor_surat</th>

                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    @foreach ($datas as $data)
                                    <tr>
                                        <td> {{$data->tanggal_surat}} </td>

                                        <td>
                                            <button type="button" class="btn btn-info" data-toggle="modal"
                                                data-target="#updateStudentsModal"
                                                wire:click.prevent="edit({{$data->id}})">Edit</button>
                                            <button type="button" class="btn btn-danger"
                                                wire:click.prevent="delete({{$data->id}})">Delete</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div>
                                <button type="button" wire:click.prevent="test()"> test </button>
                            </div>

                        </div>

                        @livewire('datatable-suratmasuk')

                    </div>
                </div>

            </div>

        </div>
    </section>

    @livewireScripts
       {{-- <script src="assets/js/jquery.min.js"></script> --}}
</div>

</div>