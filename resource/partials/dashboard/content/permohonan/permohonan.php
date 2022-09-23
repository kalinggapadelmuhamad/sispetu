<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Permohonan</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Permohonan</li>
        </ol>
    </div>
    <div class="row mb-3">
        <!-- Datatables -->
        <!-- DataTable with Hover -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Pemohon</th>
                                <th>NIM</th>
                                <th>Jurusan</th>
                                <th>No Whatsapp</th>
                                <th>Bukti Kehilangan</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Pemohon</th>
                                <th>NIM</th>
                                <th>Jurusan</th>
                                <th>No Whatsapp</th>
                                <th>Bukti Kehilangan</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            $no = 1;
                            while ($values = $executePermohonan->fetch_object()) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $values->idPermohonan ?></td>
                                    <td><?= $values->namaPemohon ?></td>
                                    <td><?= $values->nim ?></td>
                                    <td><?= $values->namaJurusan ?></td>
                                    <td><a href="https://wa.me/62<?= $values->noWa ?>?text=Hai%20Data%20Kamu%20Sudah%20Kami%20Verifikasi" target="_blank"><?= $values->noWa ?></a></td>
                                    <td><a href="../resource/file/<?= $values->buktiKehilangan ?>" target="_blank"><?= $values->buktiKehilangan ?></a></td>
                                    <td><?= ($values->validasi == 'N') ? '<span class="btn btn-sm btn-warning">BELUM</span>' : '<span class="btn btn-sm btn-success">SELESAI</span>' ?></td>
                                    <td>
                                        <a href="?page=formPermohonan&&validasi=<?= $values->idPermohonan ?>" class="btn btn-sm btn-success mb-1">Validasi</a>
                                        <?= ($values->validasi == 'N') ? '<a href="?page=formPermohonan&&hapus=' . $values->idPermohonan . '" class="btn btn-sm btn-danger mb-1">Hapus</a>' : ''; ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>