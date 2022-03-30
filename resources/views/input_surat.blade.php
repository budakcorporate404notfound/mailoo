@extends('layouts.app')

@section('nama_menu')
<h5 class="mb-0">
    Input Surat
</h5>

<nav aria-label="breadcrumb">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a>Input Surat</a></li>
        <li class="breadcrumb-item active" aria-current="page">Surat Masuk</li>
    </ul>
</nav>
@endsection

@section('konten')

<div class="row">
    <div class="col-md-12">
        <div class="ais-InstantSearch">
            <div class="row">
                <div class="col-md-3">
                    <div class="left-panel">
                        <div class="iq-filter-border iq-card py-2 px-3">
                            <h5 class="card-title">Asal Surat</h5>
                            <input type="text" class="form-control" id="asal_surat" name="asal_surat"
                                placeholder="Masukan asal surat" required>
                        </div>
                        <div class="iq-filter-border iq-card">
                            <h5 class="card-title">Nomor Surat</h5>
                            <input type="text" class="form-control" id="nomor_surat" name="nomor_surat"
                                placeholder="Masukan nomor surat" required>
                        </div>

                        <div class="iq-filter-border iq-card">
                            <h5 class="card-title">Disposisi Surat</h5>
                            {{-- <div id="brand-list"></div> --}}
                            {{-- <select class="form-control" name="product_id">
                                <option>Select Item</option>
                                @foreach ($referensi_unitbagian as $key => $value)
                                <option value="{{ $key }}" {{ ( $key == $selectedID_unitbagian) ? 'selected' : '' }}>
                            {{ $value }}
                            </option>
                            @endforeach
                            </select> --}}

                            <form>
                                @foreach ($referensi_unitbagian_4_surat_masuk as $key => $value)
                                <input type="checkbox" id="vehicle1" name="vehicle1"
                                    value="{{ $key }} {{ ( $key == $selectedID_unitbagian_4_surat_masuk) ? 'selected' : '' }}">
                                <label for="vehicle1"> {{ $value }}</label><br>

                                {{-- <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                                <label for="vehicle2"> I have a car</label><br>
                                <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                                <label for="vehicle3"> I have a boat</label><br><br>
                                <input type="submit" value="Submit"> --}}
                                @endforeach
                            </form>

                        </div>

                       <div class="custom-file">
                                 <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                 <label class="custom-file-label" for="validatedCustomFile">Upload PDF Surat ... </label>
                                 <div class="invalid-feedback">Example invalid custom file feedback</div>
                              </div>

                        {{-- <div class="custom-file">
                                 <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                 <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                 <div class="invalid-feedback">Example invalid custom file feedback</div>
                              </div> --}}

                    </div>
                </div>
                <div class="col-md-9">
                    <div class="right-panel">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="iq-card py-2 px-3">
                                    <div class="row">
                                        <div class="align-self-center d-flex col-lg-8 col-6">
                                            <div id="stats"></div>
                                        </div>
                                        <div class="col-lg-12 col-8">
                                            <h5 class="card-title">Tanggal Surat</h5>
                                            <input type="date" class="form-control" id="tanggal_surat"
                                                name="tanggal_surat" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="iq-card py-2 px-3">
                                    <div class="row">
                                        <div class="align-self-center d-flex col-lg-8 col-6">
                                            <div id="stats"></div>
                                        </div>
                                        <div class="col-lg-12 col-8">
                                            <h5 class="card-title">Perihal Surat</h5>
                                            <input type="text" class="form-control" id="perihal_surat"
                                                name="perihal_surat" placeholder="Masukan perihal surat" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="iq-card py-2 px-3">
                                    <div class="row">
                                        <div class="align-self-center d-flex col-lg-8 col-6">
                                            <div id="stats"></div>
                                        </div>
                                        <div class="col-lg-12 col-8">
                                            <h5 class="card-title">Surat ditujukan kepada</h5>
                                            <input type="text" class="form-control" id="surat_ditunjukan_kepada"
                                                name="perihal_surat" placeholder="Surat ditujukan kepada Yth ..."
                                                required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="iq-card py-2 px-3">
                                    <div class="row">
                                        <div class="align-self-center d-flex col-lg-8 col-6">
                                            <div id="stats"></div>
                                        </div>
                                        <div class="col-lg-12 col-8">
                                            <h5 class="card-title">Pejabat pengirim surat</h5>
                                            <input type="text" class="form-control" id="surat_ditunjukan_kepada"
                                                name="perihal_surat" placeholder="Surat ditujukan kepada Yth ..."
                                                required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="iq-card py-2 px-3">
                                    <div class="row">
                                        <div class="align-self-center d-flex col-lg-8 col-6">
                                            <div id="stats"></div>
                                        </div>
                                        <div class="col-lg-12 col-8">
                                            <h5 class="card-title">Nomor Agenda Surat</h5>
                                            <input type="text" class="form-control" id="nomor_agenda_surat"
                                                name="nomor_agenda_surat" placeholder="Nomor Agenda Surat" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection