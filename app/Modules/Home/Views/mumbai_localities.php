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
    'Packers and Movers Vile Parle',
    'Packers and Movers in Santacruz',
    'Packers and Movers in Mulund',
    'Packers and Movers in Marol',
    'Packers and Movers in Sakinaka',
    'Packers and Movers in Lokhandwala',
    'Packers and Movers in Airoli',
    'Packers and Movers in Khar',
];
?>
<div class="card border shadow-sm rounded-3 overflow-hidden bg-white mt-4 pm-localities-card">
    <div class="card-header bg-white border-bottom py-3 d-flex flex-wrap align-items-center justify-content-between gap-2">
        <div class="d-flex align-items-center gap-2">
            <span class="badge bg-danger rounded-circle p-2 text-white">
                <i class="bi bi-geo-alt-fill"></i>
            </span>
            <h3 class="h6 fw-bold mb-0 text-dark">Top Localities For Packers And Movers Services in Mumbai</h3>
        </div>
        <span class="badge bg-light text-secondary border small">Mumbai Metro Coverage</span>
    </div>
    <div class="card-body p-3 p-md-4">
        <div class="row g-2 g-md-3 row-cols-1 row-cols-sm-2 row-cols-lg-3">
            <?php foreach ($mumbaiLocalities as $loc): ?>
                <div class="col">
                    <a href="<?= site_url('/') ?>" class="pm-locality-link" title="<?= esc($loc) ?>">
                        <span class="pm-locality-item">
                            <i class="bi bi-geo-alt-fill me-2"></i>
                            <span class="pm-locality-name"><?= esc($loc) ?></span>
                        </span>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

