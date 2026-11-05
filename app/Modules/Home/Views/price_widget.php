<?php
$priceRates = [
    [
        'sno'      => '1',
        'type'     => '1 RK / Studio Shifting',
        'packing'  => 'Cartons + Bubble Wrap',
        'local'    => '₹2,500 – ₹4,500',
        'domestic' => '₹6,000 – ₹11,000',
        'crew'     => '2 Handlers (2–3h)',
        'popular'  => false,
    ],
    [
        'sno'      => '2',
        'type'     => '1 BHK Complete Shifting',
        'packing'  => '3-Layer + Bubble Wrap',
        'local'    => '₹3,500 – ₹6,500',
        'domestic' => '₹8,500 – ₹16,000',
        'crew'     => '3 Handlers (3–4h)',
        'popular'  => false,
    ],
    [
        'sno'      => '3',
        'type'     => '2 BHK Complete Shifting',
        'packing'  => 'Heavy 3-Layer + Foam',
        'local'    => '₹6,000 – ₹11,500',
        'domestic' => '₹13,500 – ₹24,000',
        'crew'     => '4 Handlers (4–6h)',
        'popular'  => false,
    ],
    [
        'sno'      => '4',
        'type'     => '3 BHK / Villa Shifting',
        'packing'  => 'Wooden Crates + Film',
        'local'    => '₹10,500 – ₹18,000',
        'domestic' => '₹19,000 – ₹35,000',
        'crew'     => '5 Handlers (6–8h)',
        'popular'  => false,
    ],
    [
        'sno'      => '5',
        'type'     => 'Bike / Two-Wheeler',
        'packing'  => 'Scratch Wrap + Stand',
        'local'    => '₹1,500 – ₹3,000',
        'domestic' => '₹3,500 – ₹8,000',
        'crew'     => 'Covered Carrier',
        'popular'  => false,
    ],
    [
        'sno'      => '6',
        'type'     => 'Car Transportation',
        'packing'  => 'Enclosed Carrier',
        'local'    => '₹3,000 – ₹6,000',
        'domestic' => '₹8,000 – ₹18,500',
        'crew'     => 'GPS Tracked',
        'popular'  => false,
    ],
    [
        'sno'      => '7',
        'type'     => 'Office Relocation',
        'packing'  => 'Anti-Static IT Wrap',
        'local'    => '₹8,000 – ₹16,000',
        'domestic' => '₹18,000 – ₹38,000',
        'crew'     => 'Corporate Team',
        'popular'  => false,
    ],
];
?>

<section class="py-4 py-lg-5 bg-light pm-pricing-section" id="pricing">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center mb-4">
            <h2 class="h3 fw-bold text-dark mb-1">
                Packers and Movers <span class="text-danger">Rate Chart</span>
            </h2>
            <p class="text-muted small mb-0">
                Transparent standard rates for local shifting and domestic intercity relocation
            </p>
        </div>

        <!-- Table Card Wrapper (No Scroll on Desktop, Responsive on Mobile) -->
        <div class="card border shadow-sm rounded-3 overflow-hidden bg-white pm-clean-rate-wrapper">
            <div class="table-responsive-lg">
                <table class="table table-bordered table-striped table-hover align-middle mb-0 pm-clean-rate-table text-nowrap">
                    <!-- Semantic Table Caption -->
                    <caption class="p-2.5 px-3 text-muted small bg-light border-top">
                        <i class="bi bi-info-circle-fill text-danger me-1"></i>
                        <strong>Note:</strong> Indicative moving rates. Final price depends on actual goods volume, distance, and floor level.
                    </caption>

                    <!-- Red Table Header -->
                    <thead>
                        <tr>
                            <th scope="col" class="text-center" style="width: 45px;">#</th>
                            <th scope="col">Shifting Requirement</th>
                            <th scope="col">Packing Standard</th>
                            <th scope="col" class="text-center">Local Moving</th>
                            <th scope="col" class="text-center">Domestic Moving</th>
                            <th scope="col" class="text-center">Crew &amp; Time</th>
                            <th scope="col" class="text-center" style="width: 110px;">Action</th>
                        </tr>
                    </thead>

                    <!-- Table Body with Strict Single-Line Rows -->
                    <tbody>
                        <?php foreach ($priceRates as $row): ?>
                            <tr class="<?= $row['popular'] ? 'table-warning bg-opacity-25' : '' ?>">
                                <td class="text-center fw-bold text-secondary"><?= esc($row['sno']) ?></td>
                                <td>
                                    <strong><?= esc($row['type']) ?></strong>
                                    <?php if ($row['popular']): ?>
                                        <span class="badge bg-danger rounded-pill ms-1 small">Popular</span>
                                    <?php endif; ?>
                                </td>
                                <td><?= esc($row['packing']) ?></td>
                                <td class="text-center fw-bold text-dark"><?= esc($row['local']) ?></td>
                                <td class="text-center fw-bold text-danger"><?= esc($row['domestic']) ?></td>
                                <td class="text-center text-secondary"><?= esc($row['crew']) ?></td>
                                <td class="text-center">
                                    <button type="button" 
                                            class="btn btn-danger btn-sm rounded-pill px-3 py-1 fw-semibold text-nowrap" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#qteModal"
                                            title="Book <?= esc($row['type']) ?>">
                                        Book Now
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Single Line Helpline Subtext -->
        <div class="text-center mt-3 text-muted small">
            <i class="bi bi-headset text-danger me-1"></i> Need a customized quote or free home survey? Call us at 
            <a <?= !empty($phonehtml) ? $phonehtml : 'href="tel:+919930444433"' ?> class="text-danger fw-bold text-decoration-none">
                <?= esc($phone ?? '+91 99304 44433') ?>
            </a>
        </div>
    </div>
</section>
