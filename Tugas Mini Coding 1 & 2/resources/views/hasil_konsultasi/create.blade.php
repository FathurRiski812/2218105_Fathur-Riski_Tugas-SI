<!-- Modal Create Konsultasi -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Konsultasi</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="/hasil_konsultasi/store" method="POST">
                <div class="modal-body">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlSelect1">ID Konsultasi</label>
                    <select name="id_konsultasi" class="form-control" id="exampleFormControlSelect1">
                    @foreach($konsultasi as $item)
                    <option value="{{ $item->id_konsultasi }}">{{ $item->id_konsultasi }}</option>
                    @endforeach
                    </select>
                    </div>
                    
                <div class="form-group">
                        <label for="hasil_konsultasi">Hasil Konsultasi</label>
                        <input type="text" class="form-control" name="hasil_konsultasi" required>
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