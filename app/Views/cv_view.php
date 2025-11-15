<?= $this->extend('layout/template'); // Kita tetap pakai template utama kita ?>

<?= $this->section('content'); // Ini adalah konten spesifik halaman CV ?>

<section class="bg-dark text-light d-flex align-items-center" style="min-height: 90vh;">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <img src="/assets/images/<?= $biodata['foto_profil']; ?>" class="rounded-circle mb-4" alt="Foto Profil" width="150" height="150">
                
                <h1 class="display-3 fw-bold"><?= $biodata['nama_lengkap']; ?></h1>
                <p class="lead fw-light"><?= $biodata['judul_profesi']; ?></p>
                <p class="mt-4 col-md-8 mx-auto"><?= $biodata['summary']; ?></p>
                
                <a href="mailto:<?= $biodata['email']; ?>" class="btn btn-primary btn-lg mt-3">
                 <i class="bi bi-envelope-fill"></i> Hubungi Saya
                </a>
                <a href="tel:<?= $biodata['telepon']; ?>" class="btn btn-outline-light btn-lg mt-3">
                <i class="bi bi-telephone-fill"></i> Telepon Saya
                </a>
            </div>
        </div>
    </div>
</section>

<section id="riwayat" class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="display-5 fw-bold mb-4">Pendidikan</h2>
                <?php foreach ($pendidikan as $pen) : ?>
                <div class="card shadow-sm mb-4 p-3">
                <h5><?= $pen['jurusan']; ?></h5>
                <p class="badge bg-primary fs-6"><?= $pen['tahun_masuk']; ?> - <?= $pen['tahun_lulus']; ?></p>
                <p class="mb-0"><?= $pen['nama_institusi']; ?> (<?= $pen['jenjang']; ?>)</p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="col-lg-6">
                <h2 class="display-5 fw-bold mb-4">Pengalaman</h2>
                <?php foreach ($pengalaman as $peng) : ?>
                    <div class="card shadow-sm mb-4 p-3">
                    <h5><?= $peng['posisi']; ?></h5>
                    <p class="badge bg-primary fs-6"><?= $peng['tahun_mulai']; ?> - <?= $peng['tahun_selesai']; ?></p>
                    <p class="mb-0 fw-bold"><?= $peng['perusahaan']; ?></p>
                    <p class="mb-0"><?= $peng['deskripsi']; ?></p>
</div>
<?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section id="skills">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-12">
                <h2 class="display-5 fw-bold">Keahlian</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <?php foreach ($skills as $skill) : ?>
                <div class="mb-3">
                    <h5 class="mb-1"><?= $skill['nama_skill']; ?></h5>
                    <div class="progress" style="height: 25px;">
                        <div class="progress-bar" role="progressbar" 
                             style="width: <?= $skill['persentase']; ?>%;" 
                             aria-valuenow="<?= $skill['persentase']; ?>" 
                             aria-valuemin="0" aria-valuemax="100">
                             <?= $skill['persentase']; ?>%
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>