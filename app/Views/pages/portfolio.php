<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section id="portfolio" class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold">Proyek Saya</h2>
                <p class="lead">Beberapa proyek yang pernah saya kerjakan.</p>
            </div>
        </div>

        <div class="row">

            <?php foreach ($projects as $project) : ?>

            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="card card-project shadow-sm h-100">
                    
                    <img src="/assets/images/<?= $project['image']; ?>" class="card-img-top" alt="<?= $project['title']; ?>">
                    
                    <div class="card-body">
                        <h5 class="card-title"><?= $project['title']; ?></h5>
                        <p class="card-text"><?= $project['description']; ?></p>
                    </div>

                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <?php endforeach; ?>
            </div>
    </div>
</section>
<?= $this->endSection(); ?>