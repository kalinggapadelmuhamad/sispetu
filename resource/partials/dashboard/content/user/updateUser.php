<!-- Button trigger modal -->
<button type="button" class="btn btn-sm btn-warning mb-1" data-toggle="modal" data-target="#exampleModalUpdate<?= $value->idUser ?>">
    Ubah
</button>

<!-- Modal -->
<div class=" modal fade" id="exampleModalUpdate<?= $value->idUser ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Pengguna</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php include '../app/models/user/storebyId.php' ?>
                <form action="" method="POST">
                    <div class="mb-3">
                        <input type="hidden" class="form-control" id="exampleFormControlInput1" name="idUser" value="<?= $executeresultStore->idUser ?>">
                        <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="namaLengkap" value="<?= $executeresultStore->fullName ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="exampleFormControlInput1" name="tglLahir" value="<?= $executeresultStore->tglLahir ?>">
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="gender">
                                <?= ($executeresultStore->gender == 'L') ? '<option value="L" selected>Laki Laki</option> <option value="P">Perempuan</option>' : '<option value="L">Laki Laki</option> <option value="P" selected>Perempuan</option>'; ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">New Password</label>
                        <input type="password" class="form-control" id="exampleFormControlInput1" name="password">
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Level</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="level">
                                <?= ($executeresultStore->isAdmin == '1') ? '<option value="1" selected>Admin</option> <option value="2">User</option>' : '<option value="1">Admin</option> <option value="2" selected>User</option>'; ?>
                            </select>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="penggunaEdit">Save</button>

            </div>
            </form>
        </div>
    </div>
</div>