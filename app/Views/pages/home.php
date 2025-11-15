<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="bg-dark text-light d-flex align-items-center" style="min-height: 90vh;">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <img src="https://placehold.co/150x150/FFF/333?text=SH" class="rounded-circle mb-4" alt="Foto Samsul Huda" width="150" height="150">
                
                <h1 class="display-3 fw-bold">Samsul Huda</h1>
                <p class="lead fw-light">
                    Mahasiswa Teknik Informatika | Web Developer Enthusiast
                </p>
                <p class="mt-4">
                    Saya sedang membangun portofolio ini menggunakan CodeIgniter 4 dan Bootstrap 5.
                </p>
                <a href="<?= site_url('portfolio'); ?>" class="btn btn-primary btn-lg mt-3">Lihat Proyek Saya</a>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>