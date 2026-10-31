<?php
$serviceMeta = [
    'household-moving' => [
        'title'      => 'Household Moving',
        'icon'       => 'bi-house-heart-fill',
        'tag'        => 'Doorstep',
        'tagIcon'    => 'bi-door-open-fill',
        'chip1_icon' => 'bi-shield-check text-danger',
        'chip1_text' => 'Zero Damage Move',
        'chip2_icon' => 'bi-box-seam text-warning',
        'chip2_text' => '5-Layer Bubble Pack',
    ],
    'office-relocation' => [
        'title'      => 'Office Relocation',
        'icon'       => 'bi-buildings-fill',
        'tag'        => 'Corporate',
        'tagIcon'    => 'bi-briefcase-fill',
        'chip1_icon' => 'bi-clock-history text-danger',
        'chip1_text' => 'Zero Downtime',
        'chip2_icon' => 'bi-server text-warning',
        'chip2_text' => 'IT & Server Care',
    ],
    'vehicle-transportation' => [
        'title'      => 'Car & Bike Shifting',
        'icon'       => 'bi-car-front-fill',
        'tag'        => 'GPS Live',
        'tagIcon'    => 'bi-geo-alt-fill',
        'chip1_icon' => 'bi-truck text-danger',
        'chip1_text' => 'Covered Trailers',
        'chip2_icon' => 'bi-shield-fill-check text-warning',
        'chip2_text' => 'Transit Insured',
    ],
    'warehouse-storage' => [
        'title'      => 'Warehouse Storage',
        'icon'       => 'bi-archive-fill',
        'tag'        => 'Secure',
        'tagIcon'    => 'bi-lock-fill',
        'chip1_icon' => 'bi-camera-video-fill text-danger',
        'chip1_text' => '24/7 CCTV Monitored',
        'chip2_icon' => 'bi-fire text-warning',
        'chip2_text' => 'Pest & Fire Safe',
    ],
    'packing-moving' => [
        'title'      => 'Packing & Moving',
        'icon'       => 'bi-box-seam-fill',
        'tag'        => 'Safe Pack',
        'tagIcon'    => 'bi-patch-check-fill',
        'chip1_icon' => 'bi-box2-heart-fill text-danger',
        'chip1_text' => 'Heavy Duty Cartons',
        'chip2_icon' => 'bi-tags-fill text-warning',
        'chip2_text' => 'Item Label Tagging',
    ],
    'loading-unloading' => [
        'title'      => 'Loading & Unloading',
        'icon'       => 'bi-truck-front-fill',
        'tag'        => 'Equipped',
        'tagIcon'    => 'bi-gear-fill',
        'chip1_icon' => 'bi-wrench-adjustable text-danger',
        'chip1_text' => 'Hydraulic Equipment',
        'chip2_icon' => 'bi-people-fill text-warning',
        'chip2_text' => 'Trained Ground Crew',
    ],
];
?>

<section class="py-5 pm-services-section">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center mb-5">
            <span class="badge px-3 py-2 rounded-pill text-uppercase mb-2 pm-service-badge">
                <i class="bi bi-box-seam-fill me-1"></i> What We Offer
            </span>
            <h2 class="display-6 fw-bold text-dark mb-3 pm-section-title">
                Our Professional <span class="pm-text-red">Relocation Services</span>
            </h2>
            <p class="lead text-muted mx-auto mb-0 pm-section-subtitle">
                Comprehensive, door-to-door relocation and storage solutions tailored to your schedule.
            </p>
        </div>

        <!-- 6 Services in 1 Single Row (Desktop lg/xl/xxl) -->
        <div class="row g-3 row-cols-2 row-cols-md-3 row-cols-lg-6 justify-content-center pm-services-grid">
            <?php foreach ($services as $idx => $srv): ?>
                <?php
                $meta = $serviceMeta[$srv['slug']] ?? [
                    'title'      => $srv['title'],
                    'icon'       => 'bi-box-seam-fill',
                    'tag'        => 'Verified',
                    'tagIcon'    => 'bi-shield-check',
                    'chip1_icon' => 'bi-check-circle-fill text-danger',
                    'chip1_text' => $srv['features'][0] ?? 'Safe Handling',
                    'chip2_icon' => 'bi-shield-fill-check text-warning',
                    'chip2_text' => $srv['features'][1] ?? 'Doorstep Delivery',
                ];
                $cardTitle = $meta['title'] ?? $srv['title'];
                ?>
                <div class="col d-flex">
                    <div class="card w-100 border-0 rounded-4 pm-pod-card position-relative overflow-hidden text-center">
                        <div class="card-body p-3 d-flex flex-column position-relative">
                            <!-- Top Row: Step Number & Verified Tag (Separated, No Overlap) -->
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <span class="badge rounded-pill pm-pod-num">0<?= $idx + 1 ?></span>
                                <span class="badge rounded-pill pm-pod-tag">
                                    <i class="bi <?= esc($meta['tagIcon']) ?> me-1"></i><?= esc($meta['tag']) ?>
                                </span>
                            </div>

                            <!-- Center Hero Icon -->
                            <div class="pm-pod-icon-wrap mx-auto mb-3 d-flex align-items-center justify-content-center">
                                <i class="bi <?= esc($meta['icon']) ?>"></i>
                            </div>

                            <!-- Title (Centered, Fixed Height for Perfect Symmetry) -->
                            <h3 class="pm-pod-title fw-bold mb-2"><?= esc($cardTitle) ?></h3>

                            <!-- Key Highlights Chips (Clean, No Ellipsis) -->
                            <div class="pm-pod-chips d-flex flex-column gap-2 mb-3 mt-1">
                                <div class="pm-pod-chip d-flex align-items-center justify-content-center gap-1">
                                    <i class="bi <?= esc($meta['chip1_icon']) ?>"></i>
                                    <span><?= esc($meta['chip1_text']) ?></span>
                                </div>
                                <div class="pm-pod-chip d-flex align-items-center justify-content-center gap-1">
                                    <i class="bi <?= esc($meta['chip2_icon']) ?>"></i>
                                    <span><?= esc($meta['chip2_text']) ?></span>
                                </div>
                            </div>

                            <!-- Full-Width Bottom CTA Button -->
                            <div class="mt-auto pt-2">
                                <span class="btn btn-sm pm-pod-btn w-100 rounded-pill fw-bold d-flex align-items-center justify-content-center gap-2">
                                    <span>Explore <span class="visually-hidden"><?= esc($cardTitle) ?></span></span>
                                    <i class="bi bi-arrow-right pm-btn-arrow"></i>
                                </span>
                            </div>

                            <a href="<?= site_url('services/' . $srv['slug']) ?>" class="stretched-link" aria-label="Explore <?= esc($cardTitle) ?>"></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Bottom Assistance Strip -->
        <div class="mt-5 p-4 rounded-4 shadow-sm pm-service-bottom-strip d-flex flex-column flex-md-row align-items-center justify-content-between gap-3">
            <div class="d-flex align-items-center gap-3 text-start">
                <div class="pm-strip-icon-box rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-shield-check fs-4"></i>
                </div>
                <div>
                    <div class="h5 fw-bold mb-1">Need a Customized Moving Plan?</div>
                    <p class="text-muted small mb-0">Our relocation specialists provide free on-site survey &amp; accurate quotes.</p>
                </div>
            </div>
            <div class="d-flex gap-2 flex-nowrap justify-content-center pm-strip-btn-group">
                <a <?= $phonehtml ?> class="btn btn-outline-dark rounded-pill px-4 fw-bold pm-strip-btn" aria-label="Call relocation specialist for customized moving plan">
                    <i class="bi bi-telephone-fill me-1"></i> Call Specialist
                </a>
                <button type="button" class="btn btn-danger rounded-pill px-4 fw-bold pm-btn-red pm-strip-btn" data-bs-toggle="modal" data-bs-target="#qteModal">
                    Get Instant Quote <i class="bi bi-arrow-right ms-1"></i>
                </button>
            </div>
        </div>
    </div>
</section>
