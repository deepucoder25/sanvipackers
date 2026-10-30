<div class="page-banner">
    <div class="container">
        <div class="breadcrumbs">
            <a href="<?= site_url('/') ?>"><i class="bi bi-house-door-fill"></i> Home</a> / <span>Video Gallery</span>
        </div>
        <h1>Video Gallery</h1>
        <p>Explore our latest videos and highlights.</p>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="row g-4">
                    <?php if (!empty($videos)): ?>
                        <?php foreach ($videos as $video): ?>
                            <div class="col-md-6">
                                <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                                    <div class="ratio ratio-16x9">
                                        <iframe src="<?= esc($video->video_url ?? '') ?>" 
                                                title="<?= esc($video->title ?? '') ?>" 
                                                allowfullscreen 
                                                class="border-0"></iframe>
                                    </div>
                                    <?php if (!empty($video->title)): ?>
                                        <div class="card-body p-3">
                                            <h5 class="card-title fw-bold fs-6 mb-0"><?= esc($video->title) ?></h5>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="col-12">
                            <div class="alert alert-info text-center py-5 rounded-4">
                                <i class="bi bi-camera-video fs-1 d-block mb-2"></i>
                                Videos will be updated soon.
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
                            <a href="<?= site_url('photo-gallery') ?>" class="text-decoration-none fw-semibold text-dark d-flex align-items-center justify-content-between p-2 rounded hover-bg-light">
                                <span><i class="bi bi-camera me-2"></i> Photo Gallery</span>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('video-gallery') ?>" class="text-decoration-none fw-semibold text-primary d-flex align-items-center justify-content-between p-2 rounded bg-light">
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
