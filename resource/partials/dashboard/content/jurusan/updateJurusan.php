<button type="button" class="btn btn-sm btn-warning mb-1" data-toggle="modal" data-target="#exampleModal1<?= $executeResultJurusan->idJurusan ?>">
    Ubah
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal1<?= $executeResultJurusan->idJurusan ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Jurusan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php include '../app/models/jurusan/storebyId.php'; ?>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Jurusan</label>
                        <input type="hidden" class="form-control" id="exampleFormControlInput1" name="idJurusan" value="<?= $executeresultStore->idJurusan ?>">
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="namaJurusan" value="<?= $executeresultStore->namaJurusan ?>">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="updateJurusan">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>