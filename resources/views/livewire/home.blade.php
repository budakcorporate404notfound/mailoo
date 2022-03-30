@extends('layouts.app')

@include('livewire.tambah-surat-masuk');
{{-- @include('livewire.update'); --}}

@section('nama_menu')

<h5 class="mb-0">
    Home
</h5>

<nav aria-label="breadcrumb">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a>Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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

            </div>

        </div>

    </div>
</section>

@livewireScripts
<script src="assets/js/jquery.min.js"></script>

@endsection

</div>

</div>