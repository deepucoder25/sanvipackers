<?php
/**
 * Packers & Movers Complete Rate Chart Component
 * Contains all 10 verified relocation rate tables
 */

// Table 1: Detailed Local Shifting Rates (0-50km)
$localShiftingRates = [
    ['type' => '1BHK Shifting', 'k10' => '₹4,000 - ₹8,000', 'k30' => '₹6,000 - ₹10,000', 'k50' => '₹8,000 - ₹15,000'],
    ['type' => '2BHK Shifting', 'k10' => '₹5,000 - ₹9,000', 'k30' => '₹6,000 - ₹11,000', 'k50' => '₹7,500 - ₹17,000'],
    ['type' => '3BHK Shifting', 'k10' => '₹6,000 - ₹11,000', 'k30' => '₹7,500 - ₹13,000', 'k50' => '₹9,000 - ₹19,000'],
    ['type' => '4BHK Shifting', 'k10' => '₹8,000 - ₹12,000', 'k30' => '₹10,000 - ₹14,500', 'k50' => '₹12,000 - ₹22,000'],
];

// Table 2: Local vs. Long-Distance Shifting Charges
$localVsLongDistance = [
    ['service' => '1 BHK',               'local' => '₹3,000 - ₹10,000', 'long' => '₹5,000 - ₹27,000'],
    ['service' => '2 BHK',               'local' => '₹5,000 - ₹15,000', 'long' => '₹6,000 - ₹36,000'],
    ['service' => '3+ BHK',              'local' => '₹8,000 - ₹22,000', 'long' => '₹9,000 - ₹50,000'],
    ['service' => 'Few Household Goods', 'local' => '₹1,000 - ₹6,000',  'long' => '₹3,000 - ₹20,000'],
];

// Table 3: Home Relocation Charges
$homeRelocationCharges = [
    ['size' => '1 BHK House',    'd10' => '₹4,000 - ₹7,000',  'd150' => '₹7,000 - ₹15,000',  'd500' => '₹15,000 - ₹25,000',   'd1200' => '₹25,000 - ₹50,000'],
    ['size' => '2 BHK House',    'd10' => '₹6,000 - ₹12,000', 'd150' => '₹15,000 - ₹35,000', 'd500' => '₹35,000 - ₹75,000',   'd1200' => '₹75,000 - ₹1,50,000'],
    ['size' => '3 BHK House',    'd10' => '₹8,000 - ₹18,000', 'd150' => '₹22,000 - ₹40,000', 'd500' => '₹50,000 - ₹90,000',   'd1200' => '₹90,000 - ₹1,60,000'],
    ['size' => '4+ BHK / Villa', 'd10' => '₹9,000 - ₹14,000', 'd150' => '₹40,000 - ₹80,000', 'd500' => '₹80,000 - ₹1,50,000',  'd1200' => '₹1,50,000 - ₹3,00,000'],
];

// Table 4: Office Relocation Charges
$officeRelocationCharges = [
    ['size' => 'Small Office',  'd10' => '₹10,000 - ₹20,000', 'd150' => '₹18,000 - ₹35,000', 'd500' => '₹35,000 - ₹70,000',    'd1200' => '₹70,000 - ₹1,40,000'],
    ['size' => 'Medium Office', 'd10' => '₹20,000 - ₹35,000', 'd150' => '₹35,000 - ₹60,000', 'd500' => '₹60,000 - ₹1,10,000',   'd1200' => '₹1,10,000 - ₹2,00,000'],
    ['size' => 'Large Office',  'd10' => '₹35,000 - ₹60,000', 'd150' => '₹60,000 - ₹1,00,000', 'd500' => '₹1,00,000 - ₹1,80,000', 'd1200' => '₹1,80,000 - ₹3,00,000'],
];

// Table 5: Car Transportation Charges
$carTransportationCharges = [
    ['type' => 'Hatchback', 'd10' => '₹3,000 - ₹6,000', 'd150' => '₹6,000 - ₹10,000', 'd500' => '₹10,000 - ₹18,000', 'd1200' => '₹18,000 - ₹30,000'],
    ['type' => 'Sedan',     'd10' => '₹4,000 - ₹7,000', 'd150' => '₹7,000 - ₹12,000', 'd500' => '₹12,000 - ₹22,000', 'd1200' => '₹22,000 - ₹35,000'],
    ['type' => 'SUV',       'd10' => '₹5,000 - ₹9,000', 'd150' => '₹9,000 - ₹15,000', 'd500' => '₹15,000 - ₹25,000', 'd1200' => '₹25,000 - ₹40,000'],
];

// Table 6: Bike Transportation Charges
$bikeTransportationCharges = [
    ['type' => 'Standard Bike', 'd10' => '₹1,500 - ₹3,000', 'd150' => '₹3,000 - ₹5,000', 'd500' => '₹5,000 - ₹8,000',  'd1200' => '₹8,000 - ₹15,000'],
    ['type' => 'Sports Bike',   'd10' => '₹2,000 - ₹4,000', 'd150' => '₹4,000 - ₹7,000', 'd500' => '₹7,000 - ₹12,000', 'd1200' => '₹12,000 - ₹20,000'],
    ['type' => 'Premium Bike',  'd10' => '₹3,000 - ₹5,000', 'd150' => '₹5,000 - ₹9,000', 'd500' => '₹9,000 - ₹15,000', 'd1200' => '₹15,000 - ₹25,000'],
];

// Table 7: Warehouse Storage Charges
$warehouseStorageCharges = [
    ['size' => 'Small Storage',  'w1' => '₹1,500 - ₹3,000', 'd15' => '₹3,000 - ₹5,000', 'm1' => '₹5,000 - ₹8,000',  'm3' => '₹12,000 - ₹20,000'],
    ['size' => 'Medium Storage', 'w1' => '₹3,000 - ₹5,000', 'd15' => '₹5,000 - ₹8,000', 'm1' => '₹8,000 - ₹12,000', 'm3' => '₹20,000 - ₹35,000'],
    ['size' => 'Large Storage',  'w1' => '₹5,000 - ₹8,000', 'd15' => '₹8,000 - ₹12,000', 'm1' => '₹12,000 - ₹18,000', 'm3' => '₹35,000 - ₹60,000'],
];

// Table 8: Packing Services Charges
$packingServicesCharges = [
    ['size' => '1 BHK', 'pOnly' => '₹2,000 - ₹4,000', 'pLoad' => '₹4,000 - ₹7,000',  'pTrans' => '₹7,000 - ₹12,000',  'pComp' => '₹12,000 - ₹18,000'],
    ['size' => '2 BHK', 'pOnly' => '₹3,000 - ₹6,000', 'pLoad' => '₹6,000 - ₹10,000', 'pTrans' => '₹10,000 - ₹18,000', 'pComp' => '₹18,000 - ₹28,000'],
    ['size' => '3 BHK', 'pOnly' => '₹5,000 - ₹8,000', 'pLoad' => '₹8,000 - ₹14,000', 'pTrans' => '₹14,000 - ₹22,000', 'pComp' => '₹22,000 - ₹35,000'],
];

// Table 9: Intercity Packers and Movers Charges (Approx.)
$intercityCharges = [
    ['item' => 'Few Household Goods', 'd400' => '₹5,000 - ₹10,000',  'd800' => '₹7,000 - ₹12,000',  'd1300' => '₹8,000 - ₹15,000',  'd1900' => '₹9,000 - ₹18,000'],
    ['item' => '1 BHK House',         'd400' => '₹8,000 - ₹15,000',  'd800' => '₹10,000 - ₹20,000', 'd1300' => '₹11,000 - ₹22,000', 'd1900' => '₹12,000 - ₹24,000'],
    ['item' => '2 BHK House',         'd400' => '₹10,000 - ₹18,000', 'd800' => '₹12,000 - ₹25,000', 'd1300' => '₹14,000 - ₹24,000', 'd1900' => '₹15,000 - ₹28,000'],
    ['item' => '3 BHK House',         'd400' => '₹15,000 - ₹25,000', 'd800' => '₹17,000 - ₹30,000', 'd1300' => '₹19,000 - ₹28,000', 'd1900' => '₹22,000 - ₹34,000'],
    ['item' => '4 BHK House',         'd400' => '₹17,000 - ₹28,000', 'd800' => '₹18,000 - ₹32,000', 'd1300' => '₹18,000 - ₹32,000', 'd1900' => '₹28,000 - ₹42,000'],
    ['item' => 'Vehicle Only',        'd400' => '₹3,000 - ₹5,000',   'd800' => '₹4,000 - ₹7,000',   'd1300' => '₹5,000 - ₹9,000',   'd1900' => '₹6,000 - ₹10,000'],
    ['item' => 'Complete Office',     'd400' => '₹12,000 - ₹26,000', 'd800' => '₹15,000 - ₹30,000', 'd1300' => '₹17,000 - ₹32,000', 'd1900' => '₹20,000 - ₹40,000'],
];

// Table 10: Typical Packers and Movers Charges You’ll See
$typicalCharges = [
    ['type' => '1BHK Local Move',     'range' => '₹3,500 - ₹7,000'],
    ['type' => '2BHK Shifting',       'range' => '₹6,000 - ₹11,000'],
    ['type' => '3BHK Household Move', 'range' => '₹9,000 - ₹18,000'],
    ['type' => 'Bike Transport',      'range' => '₹2,500 - ₹6,000'],
    ['type' => 'Car Transport',       'range' => '₹6,000 - ₹15,000'],
    ['type' => 'Intercity Moving',    'range' => '₹15 - ₹30 per km'],
];
?>

<section class="py-4 py-lg-5 bg-light pm-pricing-section" id="pricing">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center mb-4">
            <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 rounded-pill px-3 py-2 small fw-bold mb-2">
                <i class="bi bi-tag-fill me-1"></i> Standard Pricing Matrix
            </span>
            <h2 class="h3 fw-bold text-dark mb-1">
                Packers and Movers <span class="text-danger">Rate Chart</span>
            </h2>
            <p class="text-muted small mb-0">
                Transparent shifting charges for local moves, intercity relocation, office shifting, vehicle transport &amp; storage
            </p>
        </div>

        <!-- Quick Jump Filter Chips for Instant Navigation -->
        <div class="d-flex flex-wrap justify-content-center align-items-center gap-2 mb-4">
            <a href="#rates-local-dist" class="btn btn-sm btn-white border rounded-pill px-3 py-1.5 shadow-sm text-dark fw-semibold text-decoration-none">
                <i class="bi bi-pin-map-fill text-danger me-1"></i> Local (0-50km)
            </a>
            <a href="#rates-local-vs-long" class="btn btn-sm btn-white border rounded-pill px-3 py-1.5 shadow-sm text-dark fw-semibold text-decoration-none">
                <i class="bi bi-arrow-left-right text-danger me-1"></i> Local vs Long Distance
            </a>
            <a href="#rates-home" class="btn btn-sm btn-white border rounded-pill px-3 py-1.5 shadow-sm text-dark fw-semibold text-decoration-none">
                <i class="bi bi-house-door-fill text-danger me-1"></i> Home Relocation
            </a>
            <a href="#rates-office" class="btn btn-sm btn-white border rounded-pill px-3 py-1.5 shadow-sm text-dark fw-semibold text-decoration-none">
                <i class="bi bi-buildings-fill text-danger me-1"></i> Office Shifting
            </a>
            <a href="#rates-vehicles" class="btn btn-sm btn-white border rounded-pill px-3 py-1.5 shadow-sm text-dark fw-semibold text-decoration-none">
                <i class="bi bi-car-front-fill text-danger me-1"></i> Car &amp; Bike
            </a>
            <a href="#rates-storage-pack" class="btn btn-sm btn-white border rounded-pill px-3 py-1.5 shadow-sm text-dark fw-semibold text-decoration-none">
                <i class="bi bi-box-seam-fill text-danger me-1"></i> Storage &amp; Packing
            </a>
            <a href="#rates-intercity" class="btn btn-sm btn-white border rounded-pill px-3 py-1.5 shadow-sm text-dark fw-semibold text-decoration-none">
                <i class="bi bi-truck text-danger me-1"></i> Intercity Charges
            </a>
        </div>

        <!-- 1. Row: Local Relocation Section -->
        <div class="row g-4 mb-4">
            <!-- Table 1: Detailed Local Shifting Rates by Distance (0-50km) -->
            <div class="col-12" id="rates-local-dist">
                <div class="card border shadow-sm rounded-3 overflow-hidden bg-white pm-clean-rate-wrapper">
                    <div class="card-header bg-white border-bottom py-3 d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-danger rounded-circle p-2 text-white">
                                <i class="bi bi-speedometer2"></i>
                            </span>
                            <h3 class="h6 fw-bold mb-0 text-dark">Detailed Local Shifting Rates by Distance (0-50km)</h3>
                        </div>
                        <span class="badge bg-light text-secondary border small">0 - 50 KM Local Moves</span>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover align-middle mb-0 pm-clean-rate-table text-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col" class="col-w-30">Type of Relocation</th>
                                    <th scope="col" class="text-center col-w-22">0Km - 10Km</th>
                                    <th scope="col" class="text-center col-w-22">10Km - 30Km</th>
                                    <th scope="col" class="text-center col-w-26">30Km - 50Km</th>
                                    <th scope="col" class="text-center col-w-action-md">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($localShiftingRates as $r): ?>
                                    <tr>
                                        <td><strong><?= esc($r['type']) ?></strong></td>
                                        <td class="text-center fw-bold text-dark"><?= esc($r['k10']) ?></td>
                                        <td class="text-center fw-bold text-dark"><?= esc($r['k30']) ?></td>
                                        <td class="text-center fw-bold text-dark"><?= esc($r['k50']) ?></td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-danger btn-sm rounded-pill px-3 py-1 fw-semibold text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">
                                                Book Now
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. Row: Two Comparison Cards (Side-by-Side on Desktop) -->
        <div class="row g-4 mb-4" id="rates-local-vs-long">
            <!-- Table 2: Local vs. Long-Distance Shifting Charges -->
            <div class="col-lg-6">
                <div class="card border shadow-sm rounded-3 overflow-hidden bg-white h-100 pm-clean-rate-wrapper">
                    <div class="card-header bg-white border-bottom py-3 d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-danger rounded-circle p-2 text-white">
                                <i class="bi bi-arrow-left-right"></i>
                            </span>
                            <h3 class="h6 fw-bold mb-0 text-dark">Local vs. Long-Distance Shifting Charges</h3>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover align-middle mb-0 pm-clean-rate-table text-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">Service Type</th>
                                    <th scope="col" class="text-center">Local (Up to 50Km)</th>
                                    <th scope="col" class="text-center">Long Distance (Up to 999Km)</th>
                                    <th scope="col" class="text-center col-w-action">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($localVsLongDistance as $r): ?>
                                    <tr>
                                        <td><strong><?= esc($r['service']) ?></strong></td>
                                        <td class="text-center fw-bold text-dark"><?= esc($r['local']) ?></td>
                                        <td class="text-center fw-bold text-dark"><?= esc($r['long']) ?></td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-danger btn-sm rounded-pill px-3 py-1 fw-semibold text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">
                                                Get Quote
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Table 10: Typical Packers and Movers Charges You’ll See -->
            <div class="col-lg-6">
                <div class="card border shadow-sm rounded-3 overflow-hidden bg-white h-100 pm-clean-rate-wrapper">
                    <div class="card-header bg-white border-bottom py-3 d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-danger rounded-circle p-2 text-white">
                                <i class="bi bi-lightning-charge-fill"></i>
                            </span>
                            <h3 class="h6 fw-bold mb-0 text-dark">Typical Packers and Movers Charges You’ll See</h3>
                        </div>
                        <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 small">Quick Glance</span>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover align-middle mb-0 pm-clean-rate-table text-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">Move Type</th>
                                    <th scope="col" class="text-center">Price Range</th>
                                    <th scope="col" class="text-center col-w-action">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($typicalCharges as $r): ?>
                                    <tr>
                                        <td><strong><?= esc($r['type']) ?></strong></td>
                                        <td class="text-center fw-bold text-dark"><?= esc($r['range']) ?></td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-danger btn-sm rounded-pill px-3 py-1 fw-semibold text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">
                                                Inquire
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- 3. Row: Home Relocation Charges -->
        <div class="row g-4 mb-4" id="rates-home">
            <div class="col-12">
                <div class="card border shadow-sm rounded-3 overflow-hidden bg-white pm-clean-rate-wrapper">
                    <div class="card-header bg-white border-bottom py-3 d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-danger rounded-circle p-2 text-white">
                                <i class="bi bi-house-door-fill"></i>
                            </span>
                            <h3 class="h6 fw-bold mb-0 text-dark">Home Relocation Charges</h3>
                        </div>
                        <span class="badge bg-light text-secondary border small">By House Size &amp; Distance</span>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover align-middle mb-0 pm-clean-rate-table text-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">House Size / Distance</th>
                                    <th scope="col" class="text-center">Up to 10 km</th>
                                    <th scope="col" class="text-center">Up to 150 km</th>
                                    <th scope="col" class="text-center">Up to 500 km</th>
                                    <th scope="col" class="text-center">1200 km &amp; Above</th>
                                    <th scope="col" class="text-center col-w-action-md">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($homeRelocationCharges as $r): ?>
                                    <tr>
                                        <td><strong><?= esc($r['size']) ?></strong></td>
                                        <td class="text-center fw-bold text-dark"><?= esc($r['d10']) ?></td>
                                        <td class="text-center fw-bold text-dark"><?= esc($r['d150']) ?></td>
                                        <td class="text-center fw-bold text-dark"><?= esc($r['d500']) ?></td>
                                        <td class="text-center fw-bold text-dark"><?= esc($r['d1200']) ?></td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-danger btn-sm rounded-pill px-3 py-1 fw-semibold text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">
                                                Book Now
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4. Row: Office Relocation Charges -->
        <div class="row g-4 mb-4" id="rates-office">
            <div class="col-12">
                <div class="card border shadow-sm rounded-3 overflow-hidden bg-white pm-clean-rate-wrapper">
                    <div class="card-header bg-white border-bottom py-3 d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-danger rounded-circle p-2 text-white">
                                <i class="bi bi-buildings-fill"></i>
                            </span>
                            <h3 class="h6 fw-bold mb-0 text-dark">Office Relocation Charges</h3>
                        </div>
                        <span class="badge bg-light text-secondary border small">Corporate &amp; Commercial Moves</span>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover align-middle mb-0 pm-clean-rate-table text-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">Office Size / Distance</th>
                                    <th scope="col" class="text-center">Up to 10 km</th>
                                    <th scope="col" class="text-center">Up to 150 km</th>
                                    <th scope="col" class="text-center">Up to 500 km</th>
                                    <th scope="col" class="text-center">1200 km &amp; Above</th>
                                    <th scope="col" class="text-center col-w-action-md">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($officeRelocationCharges as $r): ?>
                                    <tr>
                                        <td><strong><?= esc($r['size']) ?></strong></td>
                                        <td class="text-center fw-bold text-dark"><?= esc($r['d10']) ?></td>
                                        <td class="text-center fw-bold text-dark"><?= esc($r['d150']) ?></td>
                                        <td class="text-center fw-bold text-dark"><?= esc($r['d500']) ?></td>
                                        <td class="text-center fw-bold text-dark"><?= esc($r['d1200']) ?></td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-danger btn-sm rounded-pill px-3 py-1 fw-semibold text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">
                                                Book Now
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- 5. Row: Vehicle Transportation (Car & Bike Side-by-Side) -->
        <div class="row g-4 mb-4" id="rates-vehicles">
            <!-- Table 5: Car Transportation Charges -->
            <div class="col-lg-6">
                <div class="card border shadow-sm rounded-3 overflow-hidden bg-white h-100 pm-clean-rate-wrapper">
                    <div class="card-header bg-white border-bottom py-3 d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-danger rounded-circle p-2 text-white">
                                <i class="bi bi-car-front-fill"></i>
                            </span>
                            <h3 class="h6 fw-bold mb-0 text-dark">Car Transportation Charges</h3>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover align-middle mb-0 pm-clean-rate-table text-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">Car Type</th>
                                    <th scope="col" class="text-center">Up to 10 km</th>
                                    <th scope="col" class="text-center">Up to 150 km</th>
                                    <th scope="col" class="text-center">Up to 500 km</th>
                                    <th scope="col" class="text-center">1200 km+</th>
                                    <th scope="col" class="text-center col-w-action-sm">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($carTransportationCharges as $r): ?>
                                    <tr>
                                        <td><strong><?= esc($r['type']) ?></strong></td>
                                        <td class="text-center fw-bold text-dark"><?= esc($r['d10']) ?></td>
                                        <td class="text-center fw-bold text-dark"><?= esc($r['d150']) ?></td>
                                        <td class="text-center fw-bold text-dark"><?= esc($r['d500']) ?></td>
                                        <td class="text-center fw-bold text-dark"><?= esc($r['d1200']) ?></td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-danger btn-sm rounded-pill px-3 py-1 fw-semibold text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">
                                                Book
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Table 6: Bike Transportation Charges -->
            <div class="col-lg-6">
                <div class="card border shadow-sm rounded-3 overflow-hidden bg-white h-100 pm-clean-rate-wrapper">
                    <div class="card-header bg-white border-bottom py-3 d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-danger rounded-circle p-2 text-white">
                                <i class="bi bi-bicycle"></i>
                            </span>
                            <h3 class="h6 fw-bold mb-0 text-dark">Bike Transportation Charges</h3>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover align-middle mb-0 pm-clean-rate-table text-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">Bike Type</th>
                                    <th scope="col" class="text-center">Up to 10 km</th>
                                    <th scope="col" class="text-center">Up to 150 km</th>
                                    <th scope="col" class="text-center">Up to 500 km</th>
                                    <th scope="col" class="text-center">1200 km+</th>
                                    <th scope="col" class="text-center col-w-action-sm">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($bikeTransportationCharges as $r): ?>
                                    <tr>
                                        <td><strong><?= esc($r['type']) ?></strong></td>
                                        <td class="text-center fw-bold text-dark"><?= esc($r['d10']) ?></td>
                                        <td class="text-center fw-bold text-dark"><?= esc($r['d150']) ?></td>
                                        <td class="text-center fw-bold text-dark"><?= esc($r['d500']) ?></td>
                                        <td class="text-center fw-bold text-dark"><?= esc($r['d1200']) ?></td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-danger btn-sm rounded-pill px-3 py-1 fw-semibold text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">
                                                Book
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- 6. Row: Warehouse Storage & Packing Services (Side-by-Side) -->
        <div class="row g-4 mb-4" id="rates-storage-pack">
            <!-- Table 7: Warehouse Storage Charges -->
            <div class="col-lg-6">
                <div class="card border shadow-sm rounded-3 overflow-hidden bg-white h-100 pm-clean-rate-wrapper">
                    <div class="card-header bg-white border-bottom py-3 d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-danger rounded-circle p-2 text-white">
                                <i class="bi bi-shield-lock-fill"></i>
                            </span>
                            <h3 class="h6 fw-bold mb-0 text-dark">Warehouse Storage Charges</h3>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover align-middle mb-0 pm-clean-rate-table text-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">Storage Size</th>
                                    <th scope="col" class="text-center">1 Week</th>
                                    <th scope="col" class="text-center">15 Days</th>
                                    <th scope="col" class="text-center">1 Month</th>
                                    <th scope="col" class="text-center">3 Months</th>
                                    <th scope="col" class="text-center col-w-action-sm">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($warehouseStorageCharges as $r): ?>
                                    <tr>
                                        <td><strong><?= esc($r['size']) ?></strong></td>
                                        <td class="text-center fw-bold text-dark"><?= esc($r['w1']) ?></td>
                                        <td class="text-center fw-bold text-dark"><?= esc($r['d15']) ?></td>
                                        <td class="text-center fw-bold text-dark"><?= esc($r['m1']) ?></td>
                                        <td class="text-center fw-bold text-dark"><?= esc($r['m3']) ?></td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-danger btn-sm rounded-pill px-3 py-1 fw-semibold text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">
                                                Reserve
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Table 8: Packing Services Charges -->
            <div class="col-lg-6">
                <div class="card border shadow-sm rounded-3 overflow-hidden bg-white h-100 pm-clean-rate-wrapper">
                    <div class="card-header bg-white border-bottom py-3 d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-danger rounded-circle p-2 text-white">
                                <i class="bi bi-box-seam-fill"></i>
                            </span>
                            <h3 class="h6 fw-bold mb-0 text-dark">Packing Services Charges</h3>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover align-middle mb-0 pm-clean-rate-table text-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">House Size</th>
                                    <th scope="col" class="text-center">Packing Only</th>
                                    <th scope="col" class="text-center">Packing + Load</th>
                                    <th scope="col" class="text-center">Pack + Transport</th>
                                    <th scope="col" class="text-center">Complete</th>
                                    <th scope="col" class="text-center col-w-action-sm">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($packingServicesCharges as $r): ?>
                                    <tr>
                                        <td><strong><?= esc($r['size']) ?></strong></td>
                                        <td class="text-center fw-bold text-dark"><?= esc($r['pOnly']) ?></td>
                                        <td class="text-center fw-bold text-dark"><?= esc($r['pLoad']) ?></td>
                                        <td class="text-center fw-bold text-dark"><?= esc($r['pTrans']) ?></td>
                                        <td class="text-center fw-bold text-dark"><?= esc($r['pComp']) ?></td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-danger btn-sm rounded-pill px-3 py-1 fw-semibold text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">
                                                Select
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- 7. Row: Intercity Packers and Movers Charges (Approx.) -->
        <div class="row g-4 mb-4" id="rates-intercity">
            <div class="col-12">
                <div class="card border shadow-sm rounded-3 overflow-hidden bg-white pm-clean-rate-wrapper">
                    <div class="card-header bg-white border-bottom py-3 d-flex flex-wrap align-items-center justify-content-between gap-2">
                        <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-danger rounded-circle p-2 text-white">
                                <i class="bi bi-truck"></i>
                            </span>
                            <h3 class="h6 fw-bold mb-0 text-dark">Intercity Packers and Movers Charges (Approx.)</h3>
                        </div>
                        <span class="badge bg-light text-secondary border small">Domestic Long-Distance Moves</span>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover align-middle mb-0 pm-clean-rate-table text-nowrap">
                            <caption class="p-2.5 px-3 text-muted small bg-light border-top">
                                <i class="bi bi-info-circle-fill text-danger me-1"></i>
                                *Final charges are estimates and can vary based on service quality, packing materials, vehicle type, and add-ons like storage or insurance.
                            </caption>
                            <thead>
                                <tr>
                                    <th scope="col" class="col-w-25">Moving Items / Distance</th>
                                    <th scope="col" class="text-center col-w-18">Up to 400 Km</th>
                                    <th scope="col" class="text-center col-w-18">400 - 800 Km</th>
                                    <th scope="col" class="text-center col-w-18">800 - 1300 Km</th>
                                    <th scope="col" class="text-center col-w-21">1300 - 1900 Km</th>
                                    <th scope="col" class="text-center col-w-action-md">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($intercityCharges as $r): ?>
                                    <tr>
                                        <td><strong><?= esc($r['item']) ?></strong></td>
                                        <td class="text-center fw-bold text-dark"><?= esc($r['d400']) ?></td>
                                        <td class="text-center fw-bold text-dark"><?= esc($r['d800']) ?></td>
                                        <td class="text-center fw-bold text-dark"><?= esc($r['d1300']) ?></td>
                                        <td class="text-center fw-bold text-dark"><?= esc($r['d1900']) ?></td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-danger btn-sm rounded-pill px-3 py-1 fw-semibold text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">
                                                Book Now
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Top Localities For Packers And Movers in Mumbai (Clickable Area Links) -->
        <?= view('Modules\Home\Views\mumbai_localities') ?>

        <!-- Single Line Helpline Subtext -->
        <div class="text-center mt-3 text-muted small">
            <i class="bi bi-headset text-danger me-1"></i> Need a customized moving quote or free in-home survey? Call us 24/7 at 
            <a <?= !empty($phonehtml) ? $phonehtml : 'href="tel:+919930444433"' ?> class="text-danger fw-bold text-decoration-none">
                <?= esc($phone ?? '+91 99304 44433') ?>
            </a>
        </div>
    </div>
</section>
