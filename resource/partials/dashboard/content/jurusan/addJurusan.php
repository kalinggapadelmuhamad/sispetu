<!-- Button trigger modal -->
<button type="button" class="btn btn-md btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
    Tambah Jurusan
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Jurusan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Jurusan</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="namaJurusan">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="addJurusan">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>