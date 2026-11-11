<!-- Packers & Movers Hero Banner Section -->
<section class="pm-hero-section">
    <!-- Soft Decorative Ambient Shapes -->
    <div class="pm-hero-shape pm-hero-shape-gold"></div>
    <div class="pm-hero-shape pm-hero-shape-red"></div>

    <div class="container py-3 py-md-4 position-relative z-2">
        <div class="row align-items-center g-3 g-lg-4">
            <!-- Left Column: Content -->
            <div class="col-lg-6">
                <!-- Location Pill Badge matching screenshot -->
                <div class="pm-hero-badge-pill mb-3">
                    <span class="pm-hero-badge-icon"><i class="bi bi-shield-fill-check"></i></span>
                    <span class="pm-hero-badge-text">Safe, Swift &amp; Stress-Free Shifting</span>
                </div>

                <!-- Subtitle paragraph matching screenshot -->
                <p class="lead pm-hero-lead mb-3">
                    Sanvi Packers and Movers delivers safe, careful, and timely shifting services for homes and offices across Mumbai and beyond. We handle every item with the utmost care — so you can move with peace of mind.
                </p>

                <!-- Action Buttons matching screenshot -->
                <div class="d-flex flex-wrap flex-sm-nowrap align-items-center gap-2 gap-sm-3 mb-3">
                    <a href="<?= site_url('contact') ?>" class="btn pm-hero-btn-outline px-3 py-2 rounded-pill d-inline-flex align-items-center justify-content-center gap-2 text-nowrap flex-grow-1 flex-sm-grow-0">
                        <i class="bi bi-envelope-fill text-danger"></i>
                        <span>Contact Us</span>
                    </a>
                    <a <?= $phonehtml ?> class="btn pm-hero-btn-phone px-3 py-2 rounded-pill d-inline-flex align-items-center justify-content-center gap-2 text-nowrap flex-grow-1 flex-sm-grow-0">
                        <i class="bi bi-telephone-fill"></i>
                        <span><?= $phone ?></span>
                    </a>
                </div>

                <!-- Trust Metrics matching screenshot -->
                <div class="pm-hero-trust-bar">
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center gap-1">
                            <div class="d-flex text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <span class="text-dark fw-bold ms-1">4.9/5</span>
                        </div>
                        <span class="pm-hero-trust-subtext small">(25,000+ Happy Moves)</span>
                    </div>
                    <div class="pm-hero-trust-divider d-none d-sm-block"></div>
                    <div class="pm-hero-trust-item">
                        <i class="bi bi-shield-fill-check text-danger fs-5"></i>
                        <span>100% Transit Insured</span>
                    </div>
                    <div class="pm-hero-trust-divider d-none d-sm-block"></div>
                    <div class="pm-hero-trust-item">
                        <i class="bi bi-clock-history text-danger fs-5"></i>
                        <span>On-Time Guarantee</span>
                    </div>
                </div>
            </div>

            <!-- Right Column: Quote Form -->
            <div class="col-lg-6">
                <?= view('Modules\Contacts\Views\quoteform') ?>
            </div>
        </div>
    </div>
</section>
