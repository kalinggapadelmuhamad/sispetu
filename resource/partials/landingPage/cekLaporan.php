<section id="cekPermohonan" class="cekPermohonan">
    <div class="container">
        <div class="row">
            <h2 class="text-center" data-aos="fade-up" data-aos-delay="400">Cek Status Permohonan</h2>
            <p class="text-center" data-aos="fade-up" data-aos-delay="800">UPT Pelayanan Biro Kemahasiswaan IIB Darmajaya</p>
            <div class="col-md-7 mt-3 align-self-center mx-auto" data-aos="fade-up" data-aos-delay="1000">
                <form action="" method="POST">
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" placeholder="ex:2011010098" name="nomorPermohonan">
                        <button class="btn btn-primary" type="submit" id="button-addon2" name="cekLaporan">Search</button>
                    </div>
                </form>
                <?php
                if (isset($_GET['validate'])) {
                    if ($_GET['validate'] == 'true') {
                        echo '<p class="text-success">Laporan kamu sudah di verifikasi</p>';
                    } else {
                        echo '<p class="text-danger">Laporan kamu belum di verifikasi</p>';
                    }
                }
                ?>
                <!-- <p class="text-danger">Laporan kamu belum di verifikasi</p>
                <p class="text-success">Laporan kamu sudah di verifikasi</p> -->
            </div>
        </div>
    </div>
</section>
<img src="assets/img/wave-bawah.svg" alt="" class="img-fluid">