<?php
$steps = [
    [
        'num'   => '01',
        'icon'  => 'bi-clipboard2-check',
        'title' => 'Request a Quote',
        'desc'  => 'Share your moving details and get a free, no-obligation quote instantly.',
    ],
    [
        'num'   => '02',
        'icon'  => 'bi-headset',
        'title' => 'Free Consultation',
        'desc'  => 'Our experts understand your needs and suggest the best moving solution for you.',
    ],
    [
        'num'   => '03',
        'icon'  => 'bi-box-seam',
        'title' => 'Packing & Preparation',
        'desc'  => 'We use high-quality packing materials to pack your items safely and securely.',
    ],
    [
        'num'   => '04',
        'icon'  => 'bi-truck',
        'title' => 'Safe Transportation',
        'desc'  => 'Your belongings are transported safely to your new destination on time.',
    ],
    [
        'num'   => '05',
        'icon'  => 'bi-house-check',
        'title' => 'Unloading & Settle In',
        'desc'  => 'We unload, unpack, and help you settle in comfortably in your new place.',
    ],
];
?>

<section class="py-5 pm-process-section position-relative">
    <div class="container py-lg-4 pm-process-flow-wrap">
        <!-- Section Header (Same structure & classes as service_widget) -->
        <div class="text-center mb-5">
            <span class="badge px-3 py-2 rounded-pill text-uppercase mb-2 pm-service-badge">
                <i class="bi bi-arrow-repeat me-1"></i> Our Process
            </span>
            <h2 class="display-6 fw-bold text-dark mb-3 pm-section-title">
                From Start to <span class="pm-text-red">Settle</span>
            </h2>
            <p class="lead text-muted mx-auto mb-0 pm-section-subtitle">
                We take care of everything, so you can focus on your new beginning.
            </p>
        </div>

        <!-- Master Flow: 5 Hexagon Steps Flow (Full Container Width) -->
        <div class="pm-flow-track mb-4">
            <div class="d-flex align-items-start justify-content-between pm-flow-steps-wrap">
                <?php foreach ($steps as $idx => $s): ?>
                    <?php $isLast = ($idx === count($steps) - 1); ?>
                    <!-- Step Column -->
                    <div class="pm-flow-step <?= $isLast ? 'pm-flow-step-odd' : '' ?>">
                        <!-- Top Hexagon Box with Number Pill Badge & Centered Icon -->
                        <div class="pm-hex-wrapper">
                            <span class="pm-hex-badge"><?= esc($s['num']) ?></span>
                            <div class="pm-hex-box">
                                <svg class="pm-hex-svg" viewBox="0 0 130 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <polygon points="22,4 108,4 126,45 108,86 22,86 4,45" class="pm-hex-shape" />
                                </svg>
                                <div class="pm-hex-icon d-flex align-items-center justify-content-center">
                                    <i class="bi <?= esc($s['icon']) ?>"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Step Title & Description -->
                        <h3 class="pm-step-title fw-bold"><?= esc($s['title']) ?></h3>
                        <p class="pm-step-desc text-muted small"><?= esc($s['desc']) ?></p>

                        <!-- Vertical Guideline & Baseline Dot (Desktop) -->
                        <div class="pm-step-footer d-none d-lg-flex flex-column align-items-center">
                            <div class="pm-step-guideline"></div>
                            <div class="pm-step-dot"></div>
                        </div>
                    </div>

                    <!-- Directional Arrow Between Hexagons (Desktop Only) -->
                    <?php if ($idx < count($steps) - 1): ?>
                        <div class="pm-hex-arrow d-none d-lg-flex align-items-center justify-content-center">
                            <svg width="32" height="18" viewBox="0 0 32 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 6H18V1L32 9L18 17V12H0V6Z" class="pm-arrow-shape" />
                            </svg>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>

            <!-- Horizontal Dashed Baseline Track (Passes Behind All 5 Dots) -->
            <div class="pm-steps-baseline-track d-none d-lg-block"></div>
        </div>

        <!-- Bottom Assistance Strip (Responsive 1-Row Mobile Layout) -->
        <div class="mt-5 p-4 rounded-4 shadow-sm pm-process-cta-box d-flex flex-column flex-md-row align-items-center justify-content-between gap-3">
            <div class="d-flex align-items-center gap-3 text-start">
                <div class="pm-strip-icon-box rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
                    <i class="bi bi-shield-check fs-4"></i>
                </div>
                <div>
                    <div class="h5 fw-bold mb-1">Planning Your Move This Weekend?</div>
                    <p class="text-muted small mb-0">Book your shifting slot today and get free on-site survey with upfront pricing.</p>
                </div>
            </div>
            <div class="d-flex gap-2 pm-bottom-buttons-wrap">
                <a href="tel:<?= esc($phone1 ?? '+919876543210') ?>" class="btn rounded-pill px-4 fw-bold pm-btn-dark" aria-label="Call relocation specialist for weekend moving slots">
                    <i class="bi bi-telephone-fill me-1"></i> Call Specialist
                </a>
                <button type="button" class="btn btn-danger rounded-pill px-4 fw-bold pm-btn-red" data-bs-toggle="modal" data-bs-target="#qteModal">
                    Get Instant Quote <i class="bi bi-arrow-right ms-1"></i>
                </button>
            </div>
        </div>
    </div>
</section>
