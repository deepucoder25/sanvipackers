<?php
$whyPoints = [
    [
        'icon'  => 'bi-patch-check-fill text-danger',
        'title' => 'ISO & IBA Approved',
        'desc'  => 'ISO 9001:2015 certified and IBA approved relocation services.',
    ],
    [
        'icon'  => 'bi-layers-fill text-warning',
        'title' => 'Multi-Layer Protection',
        'desc'  => 'Multi-layer protection for packing household and commercial goods.',
    ],
    [
        'icon'  => 'bi-geo-alt-fill text-danger',
        'title' => 'Live GPS Tracking',
        'desc'  => 'Live GPS tracking of transportation across all moving routes.',
    ],
    [
        'icon'  => 'bi-shield-fill-check text-success',
        'title' => 'Transit Insurance',
        'desc'  => 'Transit insurance options for additional protection of goods.',
    ],
    [
        'icon'  => 'bi-person-badge-fill text-primary',
        'title' => 'Police-Verified Crew',
        'desc'  => 'Police-verified uniformed moving professionals.',
    ],
    [
        'icon'  => 'bi-headset text-danger',
        'title' => 'Dedicated Support',
        'desc'  => 'Dedicated moving coordinators and customer support.',
    ],
    [
        'icon'  => 'bi-gear-wide-connected text-warning',
        'title' => 'Professional Equipment',
        'desc'  => 'Professional equipment for heavy lifting and proper weight balancing.',
    ],
    [
        'icon'  => 'bi-map-fill text-success',
        'title' => '500+ Indian Cities',
        'desc'  => 'Relocation services across 500+ Indian cities nationwide.',
    ],
];
?>

<section class="py-5 pm-why-choose-section position-relative bg-light">
    <div class="container py-lg-3">
        <!-- Section Header -->
        <div class="text-center mb-5">
            <span class="badge px-3 py-2 rounded-pill text-uppercase mb-2 pm-service-badge">
                <i class="bi bi-award-fill me-1"></i> Core Advantages
            </span>
            <h2 class="display-6 fw-bold text-dark mb-3 pm-section-title">
                Why Choose <span class="pm-text-red">Sanvi Packers and Movers</span>?
            </h2>
            <p class="lead text-muted mx-auto mb-0 pm-section-subtitle pm-why-subtitle">
                Choosing the right moving company makes a real difference to your relocation experience. It is all about making suitable arrangements to protect your belongings at every stage of the moving process.
            </p>
        </div>

        <!-- 8 Core Points Grid (4 Columns on Desktop, 2 on Tablet/Mobile) -->
        <div class="row g-3 g-lg-4 row-cols-1 row-cols-sm-2 row-cols-lg-4">
            <?php foreach ($whyPoints as $idx => $item): ?>
                <div class="col d-flex">
                    <div class="card w-100 border-0 rounded-4 shadow-sm p-3 p-lg-3 bg-white d-flex flex-column transition-hover pm-why-card">
                        <!-- 3 Things in One Line: [Icon] [Title] [01 Badge] -->
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="rounded-3 d-flex align-items-center justify-content-center flex-shrink-0 pm-why-icon-box">
                                <i class="bi <?= esc($item['icon']) ?>"></i>
                            </div>
                            <h3 class="h6 fw-bold text-dark mb-0 flex-grow-1 pm-why-card-title">
                                <?= esc($item['title']) ?>
                            </h3>
                            <span class="badge rounded-pill bg-light text-muted fw-bold px-2 py-1 flex-shrink-0 pm-why-step-badge">
                                0<?= $idx + 1 ?>
                            </span>
                        </div>
                        <p class="text-muted small mb-0 flex-grow-1 pm-why-card-desc"><?= esc($item['desc']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
