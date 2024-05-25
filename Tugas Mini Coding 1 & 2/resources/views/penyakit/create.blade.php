<!-- Modal Create Penyakit -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Dokter</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="/penyakit/store" method="POST">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Penyakit</label>
                        <input type="text" class="form-control" name="nama_penyakit" required>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi_penyakit">Deskripsi Penyakit</label>
                        <input type="text" class="form-control" name="deskripsi_penyakit" required>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>