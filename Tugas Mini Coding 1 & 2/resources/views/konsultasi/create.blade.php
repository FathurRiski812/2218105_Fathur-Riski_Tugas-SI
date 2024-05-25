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
            <form action="/konsultasi/store" method="POST">
                <div class="modal-body">
                @csrf
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">ID Pasien</label>
                    <select name="id_pasien" class="form-control" id="exampleFormControlSelect1">
                    @foreach($pasien as $item)
                    <option value="{{ $item->id_pasien }}">{{ $item->nama_pasien }}</option>
                    @endforeach
                    </select>
                    </div>
                    
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">ID Dokter</label>
                    <select name="id_dokter" class="form-control" id="exampleFormControlSelect1">
                    @foreach($dokter as $item)
                    <option value="{{ $item->id_dokter }}">{{ $item->nama_dokter }}</option>
                    @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">ID Diagnosa</label>
                    <select name="id_diagnosa" class="form-control" id="exampleFormControlSelect1">
                    @foreach($diagnosa as $item)
                    <option value="{{ $item->id_diagnosa }}">{{ $item->nama_diagnosa }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                        <label for="tanggal_konsultasi">Tanggal Konsultasi</label>
                        <input type="datetime-local" class="form-control" name="tanggal_konsultasi" required>
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