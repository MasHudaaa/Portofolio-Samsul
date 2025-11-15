<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold">Tentang Saya</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 text-center">
                <img src="https://placehold.co/300x300/FFF/333?text=FOTO+SAYA" class="img-fluid rounded-circle" alt="Foto Samsul Huda">
            </div>
            <div class="col-lg-6">
                <h3 class="mt-4 mt-lg-0">Samsul Huda</h3>
                <p class="lead">Mahasiswa Teknik Informatika, Semester 5.</p>
                <p>
                    Halo! Saya adalah seorang mahasiswa yang memiliki minat besar dalam dunia pengembangan web. 
                    Saat ini saya sedang fokus mendalami framework backend seperti CodeIgniter 4 dan 
                    mempelajari teknologi frontend modern menggunakan Bootstrap.
                </p>
                <p>
                    Website portofolio ini adalah salah satu proyek saya untuk menerapkan ilmu yang 
                    saya pelajari di perkuliahan dan secara otodidak. Saya terbuka untuk 
                    belajar hal-hal baru dan berkolaborasi dalam proyek menarik.
                </p>
                
                <h5 class="mt-4">Skill Saya:</h5>
                <span class="badge bg-primary fs-6 m-1">PHP</span>
                <span class="badge bg-secondary fs-6 m-1">CodeIgniter 4</span>
                <span class="badge bg-success fs-6 m-1">MySQL</span>
                <span class="badge bg-danger fs-6 m-1">HTML</span>
                <span class="badge bg-warning text-dark fs-6 m-1">CSS</span>
                <span class="badge bg-info fs-6 m-1">Bootstrap</span>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>