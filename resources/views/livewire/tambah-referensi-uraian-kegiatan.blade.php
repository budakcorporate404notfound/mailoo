<div wire:ignore.self class="modal fade" id="addStudentsModal_ReferensiUraianKegiatan" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Referensi Uraian Kegiatan</h5>
                <button type="button" class="close" data-dismiss="modal" wire:click.prevent="resetInputFields()" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="Store_ReferensiUraianKegiatan" id="form-upload"
                    enctype="multipart/form-data">
                    {{-- <form action=""> --}}
                    <div class="form-row">

                        {{-- <input type="hidden" name="id_unitbagian" value="{{Auth::user()->unit_kerja}}"
                        class="form-control" wire:model="id_unitbagian"
                        placeholder="id unit bagian ..."> --}}

                        <div class="col">
                            <label for="kode_uraian_kegiatan">kode uraian kegiatan</label>
                            <input type="text" name="kode_uraian_kegiatan" class="form-control"
                                wire:model="kode_uraian_kegiatan" placeholder="kode uraian kegiatan ...">
                            @error('kode_uraian_kegiatan')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="nama_uraian_kegiatan">nama uraian kegiatan</label>
                            <input type="text" name="nama_uraian_kegiatan" class="form-control"
                                wire:model="nama_uraian_kegiatan" placeholder="nama uraian kegiatan ...">
                            @error('nama_uraian_kegiatan')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                    </div>

                    <br>

                    <div class="form-row">
                        <div class="col">
                            <label for="nama sub menu uraian kegiatan">nama sub menu uraian kegiatan</label>
                            <input type="text" name="nama_sub_menu_uraian_kegiatan" class="form-control"
                                wire:model="nama_sub_menu_uraian_kegiatan"
                                placeholder="nama sub menu uraian kegiatan ... ">
                            @error('nama_sub_menu_uraian_kegiatan')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="pagu_anggaran">pagu anggaran</label>
                            <input type="text" id="rupiah" name="pagu_anggaran" class="form-control"
                                wire:model="pagu_anggaran" placeholder="pagu anggaran ...">
                            @error('pagu_anggaran')
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
    var rupiah = document.getElementById('rupiah');
    rupiah.addEventListener('keyup', function(e) {
        // tambahkan 'Rp.' pada saat form di ketik
        // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
        rupiah.value = formatRupiah(this.value);
    });
    /* Fungsi formatRupiah */
    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);
        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? +rupiah : '');
    }
</script>