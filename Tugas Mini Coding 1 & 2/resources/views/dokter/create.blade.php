<!-- Modal Create Dokter -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Dokter</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="/dokter/store" method="POST">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Dokter</label>
                        <input type="text" class="form-control" name="nama_dokter" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="no_telp">No. Telepon</label>
                        <input type="number" class="form-control" name="no_telepon" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_pelayanan">Tanggal Pelayanan</label>
                        <input type="datetime-local" class="form-control" name="tanggal_pelayanan" required>
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