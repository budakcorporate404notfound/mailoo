<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateStudentsModal_referensiuraiankegiatan" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Referensi Uraian Kegiatan</h5>
                <button type="button" class="close" data-dismiss="modal" wire:click.prevent="resetInputFields()"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <input type="hidden" name="id" wire:model="ids">

                    <div class="form-row">
                        <div class="col">
                            <label for="id_unitbagian">id unit bagian</label>
                            <input type="text" name="id_unitbagian" readonly class="form-control"
                                placeholder="id unit bagian ..." wire:model="id_unitbagian">
                            @error('id_unitbagian')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="name">nama bagian</label>
                            <input type="text" name="name" readonly class="form-control" placeholder="nama bagian ..."
                                wire:model="name">
                            @error('name')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>

                    </div>

                    <br>

                    <div class="form-row">
                        <div class="col">
                            <label for="kode_uraian_kegiatan">kode uraian kegiatan</label>
                            <input type="text" name="kode_uraian_kegiatan" class="form-control"
                                placeholder="kode uraian kegiatan ..." wire:model="kode_uraian_kegiatan">
                            @error('kode_uraian_kegiatan')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="nama_uraian_kegiatan">nama uraian kegiatan</label>
                            <input type="text" name="nama_uraian_kegiatan" class="form-control"
                                placeholder="nama uraian kegiatan ..." wire:model="nama_uraian_kegiatan">
                            @error('nama_uraian_kegiatan')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>

                    </div>

                    <br>

                    <div class="form-row">
                        <div class="col">
                            <label for="nama_sub_menu_uraian_kegiatan">nama sub menu uraian kegiatan</label>
                            <input type="text" name="nama_sub_menu_uraian_kegiatan" class="form-control"
                                placeholder="nama sub menu uraian kegiatan ..."
                                wire:model="nama_sub_menu_uraian_kegiatan">
                            @error('nama_sub_menu_uraian_kegiatan')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="pagu_anggaran">pagu anggaran</label>
                            <input type="text" id="rupiah_update" name="pagu_anggaran" class="form-control"
                                placeholder="pagu anggaran ..." wire:model="pagu_anggaran">
                            @error('pagu_anggaran')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>

                    </div>

                </form>
            </div>

            {{-- <div class="form-row">
                <div class="col">
                    <label for="nama sub menu uraian kegiatan">nama sub menu uraian kegiatan</label>
                    <input type="text" name="nama_sub_menu_uraian_kegiatan" class="form-control"
                        wire:model="nama_sub_menu_uraian_kegiatan" placeholder="nama sub menu uraian kegiatan ... ">
                    @error('nama_sub_menu_uraian_kegiatan')
                    <span class="text-danger"> {{$message}} </span>
            @enderror
        </div>

        <div class="col">
            <label for="pagu_anggaran">pagu anggaran</label>
            <input type="text" id="rupiah_update" name="pagu_anggaran" class="form-control" wire:model="pagu_anggaran"
                placeholder="pagu anggaran ...">
            @error('pagu_anggaran')
            <span class="text-danger"> {{$message}} </span>
            @enderror
        </div>
    </div> --}}

    {{-- <div class="modal-body">
        <form action="">
            <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" name="lastname" class="form-control" wire:model="lastname">
                @error('lastname')
                <span class="text-danger"> {{$message}} </span>
    @enderror
</div>
</form>
</div>
<div class="modal-body">
    <form action="">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" wire:model="email">
            @error('email')
            <span class="text-danger"> {{$message}} </span>
            @enderror
        </div>
    </form>
</div>
<div class="modal-body">
    <form action="">
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="number" name="phone" class="form-control" wire:model="phone">
            @error('phone')
            <span class="text-danger"> {{$message}} </span>
            @enderror
        </div>
    </form>
</div> --}}
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal"
        wire:click.prevent="resetInputFields()">Tutup</button>
    {{-- <button type="button" class="btn iq-bg-danger" wire:click.prevent="resetInputFields">reset</button> --}}
    <button type="button" class="btn btn-primary" wire:click.prevent="update_referensiuraiankegiatan()">Update Data</button>
</div>
</div>
</div>
</div>

<script type="text/javascript">
    var rupiah_update = document.getElementById('rupiah_update');
    rupiah_update.addEventListener('keyup', function(e) {
        // tambahkan 'Rp.' pada saat form di ketik
        // gunakan fungsi formatrupiah_update() untuk mengubah angka yang di ketik menjadi format angka
        rupiah_update.value = formatrupiah_update(this.value);
    });
    /* Fungsi formatrupiah_update */
    function formatrupiah_update(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah_update = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);
        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah_update += separator + ribuan.join('.');
        }
        rupiah_update = split[1] != undefined ? rupiah_update + ',' + split[1] : rupiah_update;
        return prefix == undefined ? rupiah_update : (rupiah_update ? +rupiah_update : '');
    }
</script>