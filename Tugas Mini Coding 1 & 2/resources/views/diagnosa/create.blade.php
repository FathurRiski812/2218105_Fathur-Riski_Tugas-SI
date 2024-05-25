<!-- Modal Create Diagnosa -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Diagnosa</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="/diagnosa/store" method="POST">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Diagnosa</label>
                        <input type="text" class="form-control" name="nama_diagnosa" required>
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">ID Pasien</label>
                    <select name="id_pasien" class="form-control" id="exampleFormControlSelect1">
                    @foreach($pasien as $item)
                    <option value="{{ $item->id_pasien }}">{{ $item->nama_pasien }}</option>
                    @endforeach
                    </select>
                </div>
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">ID Rule</label>
                    <select name="id_rule" class="form-control" id="exampleFormControlSelect1">
                    @foreach($rule as $item)
                    <option value="{{ $item->id_rule_gejala }}">{{ $item->aturan }}</option>
                    @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_diagnosa">Tanggal Diagnosa</label>
                        <input type="datetime-local" class="form-control" name="tanggal_diagnosa" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>