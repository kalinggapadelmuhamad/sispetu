<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-aos="fade-up" data-aos-delay="1600">
    Buat Permohonan
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Permohonan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-start">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Kalingga Padel Muhamad" name="namaLengkap">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput2" class="form-label">NIM</label>
                        <input type="number" class="form-control" id="exampleFormControlInput2" placeholder="2011010098" name="npm">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Jurusan</label>
                        <select class="form-select" aria-label="Default select example" name="jurusan">
                            <?php
                            while ($jurusan = $executeJurusan->fetch_object()) { ?>
                                <option value="<?= $jurusan->idJurusan ?>"><?= $jurusan->namaJurusan ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput2" class="form-label">No Whatsapp</label>
                        <input type="number" class="form-control" id="exampleFormControlInput2" placeholder="082175572310" name="noWa">
                    </div>
                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Upload Surat Kehilangan</label>
                        <input class="form-control form-control-sm" id="formFileSm" type="file" name="bukti">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="permohonanAdd">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>