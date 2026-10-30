<!-- Packers & Movers Hero Banner Section -->
<section class="pm-hero-section">
    <!-- Atmospheric Glow Orbs -->
    <div class="pm-glow-orb pm-glow-orb-red"></div>
    <div class="pm-glow-orb pm-glow-orb-yellow"></div>
    <div class="pm-glow-orb pm-glow-orb-center"></div>

    <div class="container py-5 position-relative z-2">
        <div class="row align-items-center g-4 py-lg-4">
            <!-- Left Column: Content -->
            <div class="col-lg-6">
                <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill pm-badge-glass mb-3">
                    <span class="pm-pulse-dot"></span>
                    <i class="bi bi-shield-check pm-text-accent-yellow"></i>
                    <span class="fw-semibold small text-uppercase">India's Trusted Relocation Partner</span>
                </div>

                <h1 class="display-5 fw-bold text-white lh-sm mb-3">
                    Safe, Swift & Stress-Free <span class="pm-text-gradient">Home & Office Shifting</span>
                </h1>

                <p class="lead pm-text-muted mb-4">
                    Professional packaging with 5-layer corrugated protection, certified handlers, and 100% damage-free delivery guarantee across 500+ Indian cities.
                </p>

                <div class="d-flex flex-wrap flex-sm-nowrap align-items-center gap-2 gap-sm-3 mb-4">
                    <a href="<?= site_url('about') ?>" class="btn btn-pm-outline px-3 py-2 py-md-3 rounded-pill d-inline-flex align-items-center justify-content-center gap-2 text-nowrap flex-grow-1 flex-sm-grow-0">
                        <i class="bi bi-info-circle-fill pm-text-accent-yellow"></i>
                        <span>About Us</span>
                    </a>
                    <a href="<?= site_url('contact') ?>" class="btn btn-pm-outline px-3 py-2 py-md-3 rounded-pill d-inline-flex align-items-center justify-content-center gap-2 text-nowrap flex-grow-1 flex-sm-grow-0">
                        <i class="bi bi-chat-dots-fill"></i>
                        <span>Contact Us</span>
                    </a>
                    <?php if (!empty($phone)): ?>
                    <a href="tel:<?= preg_replace('/[^0-9+]/', '', $phone) ?>" class="btn btn-pm-yellow px-3 py-2 py-md-3 rounded-pill d-inline-flex align-items-center justify-content-center gap-2 text-nowrap w-100 w-sm-auto">
                        <i class="bi bi-telephone-fill"></i>
                        <span><?= esc($phone) ?></span>
                    </a>
                    <?php endif; ?>
                </div>

                <!-- Trust Metrics -->
                <div class="d-flex flex-wrap align-items-center gap-4 pt-3 border-top border-secondary border-opacity-25">
                    <div class="d-flex align-items-center gap-2">
                        <div class="d-flex text-warning">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <span class="text-white fw-bold">4.9/5</span>
                        <span class="pm-text-muted small">(25,000+ Happy Moves)</span>
                    </div>
                    <div class="d-flex align-items-center gap-2 text-white small">
                        <i class="bi bi-patch-check-fill pm-text-accent-red"></i>
                        <span>100% Transit Insured</span>
                    </div>
                    <div class="d-flex align-items-center gap-2 text-white small">
                        <i class="bi bi-clock-history pm-text-accent-yellow"></i>
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
