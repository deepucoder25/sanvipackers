<div class="page-banner">
    <div class="container">
        <div class="breadcrumbs">
            <a href="<?= site_url('/') ?>"><i class="bi bi-house-door-fill"></i> Home</a> / <span>Photo Gallery</span>
        </div>
        <h1>Photo Gallery</h1>
        <p>Explore our latest photo collection and gallery.</p>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="row g-4">
                    <?php if (!empty($photos)): ?>
                        <?php foreach ($photos as $photo): ?>
                            <div class="col-md-6">
                                <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden gallery-card">
                                    <div class="gallery-thumb-wrap">
                                        <img src="<?= base_url('assets/uploads/gallery/' . ($photo->image ?? '')) ?>" 
                                             class="card-img-top gallery-thumb" 
                                             alt="<?= esc($photo->title ?? '') ?>"
                                             onerror="this.src='<?= base_url('assets/images/about/packers_movers.jpg') ?>'">
                                    </div>
                                    <?php if (!empty($photo->title) || !empty($photo->album_name)): ?>
                                        <div class="card-body p-3">
                                            <?php if (!empty($photo->album_name)): ?>
                                                <span class="badge bg-primary-subtle text-primary mb-2"><?= esc($photo->album_name) ?></span>
                                            <?php endif; ?>
                                            <?php if (!empty($photo->title)): ?>
                                                <h5 class="card-title fw-bold fs-6 mb-0"><?= esc($photo->title) ?></h5>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="col-12">
                            <div class="alert alert-info text-center py-5 rounded-4">
                                <i class="bi bi-images fs-1 d-block mb-2"></i>
                                Photos will be updated soon.
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm rounded-3 p-4 mb-4">
                    <h4 class="fw-bold fs-5 mb-3">Quick Navigation</h4>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2">
                            <a href="<?= site_url('photo-gallery') ?>" class="text-decoration-none fw-semibold text-primary d-flex align-items-center justify-content-between p-2 rounded bg-light">
                                <span><i class="bi bi-camera me-2"></i> Photo Gallery</span>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('video-gallery') ?>" class="text-decoration-none fw-semibold text-dark d-flex align-items-center justify-content-between p-2 rounded hover-bg-light">
                                <span><i class="bi bi-play-circle me-2"></i> Video Gallery</span>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="card border-0 shadow-sm rounded-3 p-4 bg-primary text-white">
                    <h4 class="fw-bold fs-5 mb-2">Get in Touch</h4>
                    <p class="small opacity-75 mb-3">Feel free to reach out to our team for any inquiries.</p>
                    <?php if (!empty($phone)): ?>
                        <a href="tel:<?= preg_replace('/[^0-9+]/', '', $phone) ?>" class="btn btn-light fw-bold text-primary w-100 mb-2">
                            <i class="bi bi-telephone-fill me-1"></i> <?= esc($phone) ?>
                        </a>
                    <?php endif; ?>
                    <a href="<?= site_url('contact') ?>" class="btn btn-outline-light w-100">
                        <i class="bi bi-envelope-fill me-1"></i> Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
