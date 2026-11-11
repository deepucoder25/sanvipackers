<?php
/**
 * Top Localities For Packers And Movers Services in Mumbai
 * Clickable locality links navigating directly to the Home Page
 */
$mumbaiLocalities = [
    'Packers and Movers in Bhayander',
    'Packers and Movers in Mira Road',
    'Packers and Movers in Dahisar',
    'Packers and Movers in Borivali',
    'Packers and Movers in Kandivali',
    'Packers and Movers in Malad',
    'Packers and Movers in Goregaon',
    'Packers and Movers in Jogeshwari',
    'Packers and Movers in Andheri',
    'Packers and Movers in Juhu',
    'Packers and Movers in Vile Parle',
    'Packers and Movers in Santacruz',
    'Packers and Movers in Mulund',
    'Packers and Movers in Marol',
    'Packers and Movers in Sakinaka',
    'Packers and Movers in Lokhandwala',
    'Packers and Movers in Airoli',
    'Packers and Movers in Khar',
];
?>
<section class="pm-localities-section py-5">
    <div class="container">
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden pm-localities-card">
            <div class="card-header bg-white border-bottom py-3 px-3 px-md-4 d-flex flex-wrap align-items-center justify-content-between gap-2">
                <div class="d-flex align-items-center gap-2">
                    <span class="pm-locality-header-icon">
                        <i class="bi bi-geo-alt-fill"></i>
                    </span>
                    <h2 class="h6 fw-bold mb-0 text-dark">Top Localities For Packers And Movers Services in Mumbai</h2>
                </div>
                <span class="badge pm-metro-badge">
                    <i class="bi bi-pin-map-fill text-danger me-1"></i> Mumbai Metro Coverage
                </span>
            </div>
            <div class="card-body p-3 p-md-4">
                <div class="row g-2 g-md-3 row-cols-1 row-cols-sm-2 row-cols-lg-3">
                    <?php foreach ($mumbaiLocalities as $loc): ?>
                        <div class="col">
                            <a href="<?= site_url('/') ?>" class="pm-locality-link" title="<?= esc($loc) ?>">
                                <div class="pm-locality-item">
                                    <span class="pm-locality-icon">
                                        <i class="bi bi-geo-alt-fill"></i>
                                    </span>
                                    <span class="pm-locality-name"><?= esc($loc) ?></span>
                                    <i class="bi bi-chevron-right pm-locality-arrow ms-auto"></i>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

