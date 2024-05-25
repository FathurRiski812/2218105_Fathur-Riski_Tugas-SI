<!-- Modal Create Rule Gejala -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Rule Gejala</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="/rule_gejala/store" method="POST">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">ID Gejala</label>
                    <select name="id_gejala" class="form-control" id="exampleFormControlSelect1">
                    @foreach($gejala as $item)
                    <option value="{{ $item->id_gejala }}">{{ $item->nama_gejala }}</option>
                    @endforeach
                    </select>
                </div>
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">ID Penyakit</label>
                    <select name="id_penyakit" class="form-control" id="exampleFormControlSelect1">
                    @foreach($penyakit as $item)
                    <option value="{{ $item->id_penyakit }}">{{ $item->nama_penyakit }}</option>
                    @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                        <label for="aturan">Aturan</label>
                        <input type="text" class="form-control" name="aturan" required>
                    </div>
                    <div class="form-group">
                        <label for="hasil_aturan">Hasil Aturan</label>
                        <input type="text" class="form-control" name="hasil_aturan" required>
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