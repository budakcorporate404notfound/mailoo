<div wire:ignore.self class="modal fade" id="addStudentsModal_inputrekapperjanjiansewa" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Rekap Perjanjian Sewa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="Store_rekapperjanjiansewa" id="form-upload" enctype="multipart/form-data">
                    {{-- <form action=""> --}}
                    <div class="form-row">
                        <div class="col">
                            <label for="satuan_kerja">satuan kerja</label>
                            <input type="text" name="satuan_kerja" class="form-control" wire:model="satuan_kerja"
                                placeholder="satuan kerja ...">
                            @error('satuan_kerja')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="nomor_surat_rekomendasi_kpknl">nomor surat rekomendasi kpknl</label>
                            <input type="text" name="nomor_surat_rekomendasi_kpknl" class="form-control"
                                wire:model="nomor_surat_rekomendasi_kpknl"
                                placeholder="nomor surat rekomendasi kpknl ...">
                            @error('nomor_surat_rekomendasi_kpknl')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                    </div>

                    <br>

                    <div class="form-row">
                        <div class="col">
                            <label for="tanggal_surat_rekomendasi_kpknl">tanggal rekomendasi kpknl</label>
                            <input type="date" name="tanggal_surat_rekomendasi_kpknl" class="form-control"
                                wire:model="tanggal_surat_rekomendasi_kpknl"
                                placeholder="tanggal surat rekomendasi kpknl ... ">
                            @error('tanggal_surat_rekomendasi_kpknl')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="nomor_sk_sekma">nomor sk sekma</label>
                            <input type="text" name="nomor_sk_sekma" class="form-control" wire:model="nomor_sk_sekma"
                                placeholder="nomor sk sekma ...">
                            @error('nomor_sk_sekma')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                    </div>

                    <br>

                    <div class="form-row">
                        <div class="col">
                            <label for="tanggal_sk_sekma">tanggal_sk_sekma</label>
                            <input type="date" name="tanggal_sk_sekma" class="form-control"
                                wire:model="tanggal_sk_sekma" placeholder="tanggal sk sekma ... ">
                            @error('pejabat_pengirim_surat')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="kode_billing_bukti_setor">kode_billing_bukti_setor</label>
                            <input type="text" name="kode_billing_bukti_setor" class="form-control"
                                wire:model="kode_billing_bukti_setor" placeholder="kode billing bukti setor ...">
                            @error('kode_billing_bukti_setor')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                    </div>

                    <br>

                    <div class="form-row">
                        <div class="col">
                            <label for="tanggal_pembayaran">tanggal_pembayaran</label>
                            <input type="date" name="tanggal_pembayaran" class="form-control"
                                wire:model="tanggal_pembayaran" placeholder="tanggal_pembayaran ... ">
                            @error('tanggal_pembayaran')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="nomor_perjanjian_sewa">nomor_perjanjian_sewa</label>
                            <input type="text" name="nomor_perjanjian_sewa" class="form-control"
                                wire:model="nomor_perjanjian_sewa" placeholder="nomor_perjanjian_sewa ...">
                            @error('nomor_perjanjian_sewa')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                    </div>

                    <br>

                    <div class="form-row">
                        <div class="col">
                            <label for="tanggal_perjanjian_sewa">tanggal_perjanjian_sewa</label>
                            <input type="date" name="tanggal_perjanjian_sewa" class="form-control"
                                wire:model="tanggal_perjanjian_sewa" placeholder="tanggal_perjanjian_sewa ... ">
                            @error('tanggal_perjanjian_sewa')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="jenis_barang_milik_negara">jenis_barang_milik_negara</label>
                            <input type="text" name="jenis_barang_milik_negara" class="form-control"
                                wire:model="jenis_barang_milik_negara" placeholder="jenis_barang_milik_negara ...">
                            @error('jenis_barang_milik_negara')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                    </div>

                    <br>

                    <div class="form-row">
                        <div class="col">
                            <label for="alamat">alamat</label>
                            <input type="text" name="alamat" class="form-control" wire:model="alamat"
                                placeholder="alamat ... ">
                            @error('alamat')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="penyewa">penyewa</label>
                            <input type="text" name="penyewa" class="form-control" wire:model="penyewa"
                                placeholder="penyewa ...">
                            @error('penyewa')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                    </div>

                    <br>

                    <div class="form-row">
                        <div class="col">
                            <label for="tanggal_mulai_sewa">tanggal_mulai_sewa</label>
                            <input type="date" name="tanggal_mulai_sewa" class="form-control"
                                wire:model="tanggal_mulai_sewa" placeholder="tanggal_mulai_sewa ... ">
                            @error('tanggal_mulai_sewa')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="tanggal_berakhir_sewa">tanggal_berakhir_sewa</label>
                            <input type="date" name="tanggal_berakhir_sewa" class="form-control"
                                wire:model="tanggal_berakhir_sewa" placeholder="tanggal_berakhir_sewa ...">
                            @error('tanggal_berakhir_sewa')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                    </div>

                    <br>

                    <div class="form-row">
                        <div class="col">
                            <label for="nilai_sewa">nilai_sewa</label>
                            <input type="text" name="nilai_sewa" class="form-control" wire:model="nilai_sewa"
                                placeholder="nilai_sewa ... ">
                            @error('nilai_sewa')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="jangka_waktu_sewa">jangka_waktu_sewa</label>
                            <input type="text" name="jangka_waktu_sewa" class="form-control"
                                wire:model="jangka_waktu_sewa" placeholder="jangka_waktu_sewa ...">
                            @error('jangka_waktu_sewa')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                    </div>

                    <br>

                    <div class="form-row">
                        <div class="col">
                            <label for="peruntukan">peruntukan</label>
                            <input type="text" name="peruntukan" class="form-control" wire:model="peruntukan"
                                placeholder="peruntukan ... ">
                            @error('peruntukan')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>


                       <div class="col">
                           <label for="peruntukan">pdf surat</label>
                            <input type="file" name="pdf_surat" class="form-control-file" wire:model="pdf_surat">
                            {{-- <input type="file" name="pdf_surat" class="custom-file-input" wire:model="pdf_surat"
                                multiple> --}}
                            @error('pdf_surat')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
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