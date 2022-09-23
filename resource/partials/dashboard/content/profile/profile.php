<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Profile</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profile</li>
        </ol>
    </div>

    <div class="row mb-3">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-3 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <?= ($executeResultProfile->gender == 'L') ? '<img class="d-block mx-auto img-profile rounded-circle" src="img/boy.png" style="max-width: 200px;">' : '<img class="d-block mx-auto img-profile rounded-circle" src="img/girl.png" style="max-width: 200px;">'; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Annual) Card Example -->
        <div class="col-xl-9 col-md-9 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <form action="" method="POST">
                        <input type="hidden" class="form-control" id="exampleFormControlInput1" value="<?= $executeResultProfile->idUser ?>" name="idUser">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" value="<?= $executeResultProfile->fullName ?>" name="namaLengkap">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1" value="<?= $executeResultProfile->tglLahir ?>" name="tglLahir">
                        </div>
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="gender">
                                    <?= ($executeResultProfile->gender == 'L') ? '<option value="L" selected>Laki Laki</option> <option value="P">Perempuan</option>' : '<option value="L">Laki Laki</option> <option value="P" selected>Perempuan</option>'; ?>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" value="<?= $executeResultProfile->email ?>" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Password Baru" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Level</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" value="<?= ($executeResultProfile->isAdmin == 1) ? 'Admin' : 'User' ?>" readonly>
                        </div>
                        <button type="submit" class="btn btn-primary" name="profileUpdate">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>