@extends('layouts.app')

    @include('livewire.tambah-surat-masuk');
    {{-- @include('livewire.update'); --}}

    @section('nama_menu')

    <h5 class="mb-0">
        Input Surat
    </h5>

    <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a>A</a></li>
            <li class="breadcrumb-item active" aria-current="page">Surat Masuk</li>
        </ul>
    </nav>
    @endsection

    @section('content')
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
                        <div class="card-body">
                           @livewire('datatable-suratmasuk')
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

    @endsection

</div>

</div>