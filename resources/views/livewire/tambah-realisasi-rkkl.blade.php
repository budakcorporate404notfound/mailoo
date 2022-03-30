<div wire:ignore.self class="modal fade" id="addStudentsModal_RealisasiRKKL" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Realisasi RKKL</h5>
                <button type="button" class="close" data-dismiss="modal" wire:click.prevent="resetInputFields()"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="Store_RealisasiRKKL" id="form-upload" enctype="multipart/form-data">
                    {{-- <form action=""> --}}
                    <div class="form-row">

                        {{-- <input type="hidden" name="id_unitbagian" value="{{Auth::user()->unit_kerja}}"
                        class="form-control" wire:model="id_unitbagian"
                        placeholder="id unit bagian ..."> --}}

                        <div class="col">
                            <label for="nomor_surat_tugas">nomor surat tugas</label>
                            <input type="text" name="nomor_surat_tugas" class="form-control"
                                wire:model="nomor_surat_tugas" placeholder="nomor surat tugas ...">
                            @error('nomor_surat_tugas')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="tanggal_surat_tugas">tanggal surat tugas</label>
                            <input type="date" name="tanggal_surat_tugas" class="form-control"
                                wire:model="tanggal_surat_tugas" placeholder="tanggal surat tugas ...">
                            @error('tanggal_surat_tugas')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                    </div>

                    <br>

                       <div class="form-row">
                        <div class="col">
                            <label for="tempat_pelaksana">tempat pelaksana</label>
                            <input type="text" name="tempat_pelaksana" class="form-control"
                                wire:model="tempat_pelaksana" placeholder="tempat pelaksana ... ">
                            @error('tempat_pelaksana')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>


                    </div>

                    <br>

                    <div class="form-row">

                        <div class="col">
                            <label for="tempat_pelaksana">menggunakan pagu anggaran</label>


                            <select name="id_kode_uraian_kegiatan" wire:model="id_kode_uraian_kegiatan" class="form-control">
                                <option value="" selected>pilih pagu anggaran</option>
                                @foreach($referensi_kode_uraian_kegitan as $ref_kuk)
                                <option value="{{ $ref_kuk->id }}">{{ $ref_kuk->kode_uraian_kegiatan }}</option>
                                @endforeach
                            </select>
                        </div>

                         <div class="col">
                            <label for="nilai_pagu_realisasi">nilai pagu realisasi</label>
                            <input id="rupiah_add_rkkl" type="text" name="nilai_pagu_realisasi" class="form-control"
                                wire:model="nilai_pagu_realisasi" placeholder="nilai pagu realisasi ... ">
                            @error('nilai_pagu_realisasi')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>

                    </div>

                    <br>

                    <div class="form-row">

                        <div class="col">
                            <label for="tanggal_pelaksana_dari">tanggal pelaksana dari</label>
                            <input type="date" name="tanggal_pelaksana_dari" class="form-control"
                                wire:model="tanggal_pelaksana_dari" placeholder="tanggal pelaksana dari ...">
                            @error('tanggal_pelaksana_dari')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="tempat_pelaksana">tanggal pelaksana sampai</label>
                            <input type="date" name="tanggal_pelaksana_sampai" class="form-control"
                                wire:model="tanggal_pelaksana_sampai" placeholder="tanggal pelaksana sampai... ">
                            @error('tanggal_pelaksana_sampai')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                    </div>

                    <br>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            wire:click.prevent="resetInputFields()">Tutup</button>
                        <button type="button" class="btn iq-bg-danger"
                            wire:click.prevent="resetInputFields">reset</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>

                </form>

                {{-- <a class="iq-icons-list" href="#"><i class="fa fa-address-book" aria-hidden="true"></i>address-book</a> --}}

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var rupiah_add_rkkl = document.getElementById('rupiah_add_rkkl');
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