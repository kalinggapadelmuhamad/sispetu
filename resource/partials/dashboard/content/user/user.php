<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pengguna</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pengguna</li>
        </ol>
    </div>
    <div class="row mb-3">
        <!-- Datatables -->
        <!-- DataTable with Hover -->
        <div class="col-lg-12">
            <?php require_once '../resource/partials/dashboard/content/user/addUser.php'; ?>
            <div class="card mb-4">
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Tanggal Lahir</th>
                                <th>Gender</th>
                                <th>Level</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Tanggal Lahir</th>
                                <th>Gender</th>
                                <th>Level</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            $no = 1;
                            while ($value  = $executePengguna->fetch_object()) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $value->fullName ?></td>
                                    <td><?= $value->email ?></td>
                                    <td><?= $value->tglLahir ?></td>
                                    <td><?= $value->gender ?></td>
                                    <td><?= ($value->isAdmin == '1') ? 'Admin' : 'User'; ?></td>
                                    <td>
                                        <?php require '../resource/partials/dashboard/content/user/updateUser.php'; ?>
                                        <a href="?page=user&&hapus=<?= $value->idUser ?>" class="btn btn-sm btn-danger mb-1">Hapus</a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>