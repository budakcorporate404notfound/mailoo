<div wire:ignore.self class="modal fade" id="addStudentsModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Surat Masuk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="Store" id="form-upload" enctype="multipart/form-data">
                    {{-- <form action=""> --}}
                    <div class="form-row">
                        <div class="col">
                            <label for="asal_surat">asal surat masuk</label>
                            <input type="text" name="asal_surat" class="form-control" wire:model="asal_surat"
                                placeholder="asal surat ...">
                            @error('asal_surat')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="nomor_surat">nomor surat masuk</label>
                            <input type="text" name="nomor_surat" class="form-control" wire:model="nomor_surat"
                                placeholder="nomor surat ...">
                            @error('nomor_surat')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                    </div>

                    <br>

                    <div class="form-row">
                        <div class="col">
                            <label for="tanggal_surat">tanggal surat masuk</label>
                            <input type="date" name="tanggal_surat" class="form-control" wire:model="tanggal_surat"
                                placeholder="tanggal surat ... ">
                            @error('tanggal_surat')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="perihal_surat">perihal surat masuk</label>
                            <input type="text" name="perihal_surat" class="form-control" wire:model="perihal_surat"
                                placeholder="perihal surat ...">
                            @error('perihal_surat')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                    </div>

                    <br>

                    <div class="form-row">
                        <div class="col">
                            <label for="pejabat_pengirim_surat">pejabat pengirim surat masuk</label>
                            <input type="text" name="pejabat_pengirim_surat" class="form-control"
                                wire:model="pejabat_pengirim_surat" placeholder="pejabat pengirim surat ... ">
                            @error('pejabat_pengirim_surat')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="surat_ditujukan_kepada">surat masuk ditujukan kepada</label>
                            <input type="text" name="surat_ditujukan_kepada" class="form-control"
                                wire:model="surat_ditujukan_kepada" placeholder="surat ditujukan kepada ...">
                            @error('surat_ditujukan_kepada')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                    </div>

                    <br>

                    <div class="form-group">
                        <input type="file" name="pdf_surat" class="form-control-file"
                            wire:model="pdf_surat">
                        {{-- <input type="file" name="pdf_surat" class="custom-file-input" wire:model="pdf_surat"
                                multiple> --}}
                        @error('pdf_surat')
                        <span class="text-danger"> {{$message}} </span>
                        @enderror
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn iq-bg-danger"
                            wire:click.prevent="resetInputFields">reset</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>

                </form>


                                 <a class="iq-icons-list" href="#"><i class="fa fa-address-book" aria-hidden="true"></i>address-book</a>


            </div>
        </div>
    </div>
</div>