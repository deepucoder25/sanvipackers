<?php
$city = !empty($city) ? $city : ($cityName ?? '');

// Load custom city content variables ($city_main_title, $city_intro_p1..p4, $city_why_choose_points, $city_process_steps, $city_case_study_*, $city_faqs, etc.)
if (file_exists(__DIR__ . '/city_content.php')) {
    include __DIR__ . '/city_content.php';
}
?>

<!-- Packers & Movers Hero Banner Section -->
<section class="pm-hero-section">
    <!-- Soft Decorative Ambient Shapes -->
    <div class="pm-hero-shape pm-hero-shape-gold"></div>
    <div class="pm-hero-shape pm-hero-shape-red"></div>

    <div class="container py-3 py-md-4 position-relative z-2">
        <div class="row align-items-center g-3 g-lg-4">
            <!-- Left Column: Content -->
            <div class="col-lg-6">
                <!-- Hero Breadcrumb Navigation -->
                <nav aria-label="breadcrumb" class="mb-2 mb-md-3">
                    <ol class="pm-hero-breadcrumb-pill">
                        <li class="pm-hb-item">
                            <a href="<?= site_url('/') ?>" class="pm-hb-link"><i class="bi bi-house-door-fill me-1 text-danger"></i>Home</a>
                        </li>
                        <li class="pm-hb-sep" aria-hidden="true"><i class="bi bi-chevron-right"></i></li>
                        <li class="pm-hb-item">
                            <a href="<?= site_url('city') ?>" class="pm-hb-link">Cities</a>
                        </li>
                        <li class="pm-hb-sep" aria-hidden="true"><i class="bi bi-chevron-right"></i></li>
                        <li class="pm-hb-item pm-hb-static">
                            <span><?= esc($stateName) ?></span>
                        </li>
                        <li class="pm-hb-sep" aria-hidden="true"><i class="bi bi-chevron-right"></i></li>
                        <li class="pm-hb-item pm-hb-current">
                            <span><?= esc($cityName) ?></span>
                        </li>
                    </ol>
                </nav>

                <h1 class="pm-hero-title mb-2 mb-md-3">
                    <span class="pm-hero-script-kicker d-block">Welcome to</span>
                    Best Packers and Movers in <span class="pm-text-accent-red"><?= esc($cityName) ?>, <?= esc($stateName) ?></span>
                </h1>

                <p class="lead pm-hero-lead mb-3">
                    Sanvi Packers and Movers delivers safe, careful, and timely shifting services for homes and offices across <?= esc($cityName) ?> and beyond. We handle every item with the utmost care — so you can move with peace of mind.
                </p>

                <div class="d-flex flex-wrap flex-sm-nowrap align-items-center gap-2 gap-sm-3 mb-3">
                    <a href="<?= site_url('contact') ?>" class="btn pm-hero-btn-outline px-3 py-2 rounded-pill d-inline-flex align-items-center justify-content-center gap-2 text-nowrap flex-grow-1 flex-sm-grow-0">
                        <i class="bi bi-envelope-fill text-danger"></i>
                        <span>Contact Us</span>
                    </a>
                    <a <?= $phonehtml ?> class="btn pm-hero-btn-phone px-3 py-2 rounded-pill d-inline-flex align-items-center justify-content-center gap-2 text-nowrap flex-grow-1 flex-sm-grow-0" title="Call Now" aria-label="Call Now">
                        <i class="bi bi-telephone-fill"></i>
                        <span><?= $phone ?></span>
                    </a>
                </div>

                <!-- Trust Metrics -->
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
                        <span class="pm-hero-trust-subtext small">(1,500+ Happy Moves in <?= esc($cityName) ?>)</span>
                    </div>
                    <div class="pm-hero-trust-divider d-none d-sm-block"></div>
                    <div class="pm-hero-trust-item">
                        <i class="bi bi-shield-fill-check text-danger fs-5"></i>
                        <span>100% Transit Insured</span>
                    </div>
                    <div class="pm-hero-trust-divider d-none d-sm-block"></div>
                    <div class="pm-hero-trust-item">
                        <i class="bi bi-clock-history text-danger fs-5"></i>
                        <span>On-Time in <?= esc($cityName) ?></span>
                    </div>
                </div>
            </div>

            <!-- Right Column: Quote Form -->
            <div class="col-lg-6">
                <?= view('Modules\Contacts\Views\quoteform', ['city' => $cityName]) ?>
            </div>
        </div>
    </div>
</section>

<section class="pm-city-detail-section">
    <div class="container">
        
        <!-- 1. Main City Overview Section -->
        <div class="pm-cd-card">
            <div class="row align-items-center g-4 g-lg-5 mb-4">
                <!-- Left Side: Content -->
                <div class="col-lg-7">
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mb-3">
                        <span class="section-badge mb-0">
                            <i class="bi bi-shield-check"></i> Verified Relocation Hub
                        </span>
                        <span class="badge bg-light text-dark border px-3 py-2 rounded-pill small">
                            <i class="bi bi-geo-alt-fill text-danger me-1"></i> <?= esc($cityName) ?>, <?= esc($stateName) ?>
                        </span>
                    </div>

                    <h2 class="pm-cd-title"><?= esc($city_main_title) ?></h2>
                    
                    <p class="pm-cd-lead-text mb-3 pm-cd-lead-styled">
                        <?= esc($city_intro_p1) ?>
                    </p>

                    <!-- Feature Tags (One Row) -->
                    <div class="pm-cd-feature-pills">
                        <span class="pm-cd-feature-pill"><i class="bi bi-check-circle-fill"></i> Multi-Layer Packing</span>
                        <span class="pm-cd-feature-pill"><i class="bi bi-check-circle-fill"></i> 100% Transit Insurance</span>
                        <span class="pm-cd-feature-pill"><i class="bi bi-check-circle-fill"></i> GPS Tracked Fleet</span>
                        <span class="pm-cd-feature-pill"><i class="bi bi-check-circle-fill"></i> Zero Hidden Costs</span>
                    </div>

                    <!-- Direct Action Buttons -->
                    <div class="pm-cd-hero-actions">
                        <a <?= $phonehtml ?> class="pm-btn-red" title="Call Now" aria-label="Call Now">
                            <i class="bi bi-telephone-fill" aria-hidden="true"></i>
                            <span class="d-none d-sm-inline">Call <?= $phone ?></span>
                            <span class="d-sm-none">Call Now</span>
                        </a>
                        <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener noreferrer" class="pm-btn-whatsapp-pill" title="Chat on WhatsApp" aria-label="Chat on WhatsApp">
                            <i class="bi bi-whatsapp" aria-hidden="true"></i>
                            <span class="d-none d-sm-inline">Chat on WhatsApp</span>
                            <span class="d-sm-none">WhatsApp</span>
                        </a>
                    </div>
                </div>

                <!-- Right Side: Image -->
                <div class="col-lg-5">
                    <div class="pm-cd-hero-img-wrap">
                        <img src="<?= base_url('assets/img/city_about.jpg') ?>" 
                             alt="Packers and Movers in <?= esc($cityName) ?>, <?= esc($stateName) ?>" 
                             class="pm-cd-hero-img" 
                             loading="lazy" 
                             decoding="async" 
                             width="600" 
                             height="400">
                        <div class="pm-state-placeholder">
                            <div class="pm-state-placeholder-icon">
                                <i class="bi bi-buildings"></i>
                            </div>
                            <span class="pm-state-watermark"><?= esc($stateSlug) ?></span>
                        </div>
                        <div class="pm-cd-hero-img-overlay"></div>
                        <div class="pm-cd-hero-floating-badge">
                            <i class="bi bi-award-fill"></i> #1 Mover in <?= esc($cityName) ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Continuation Details: Fleet & Rates, Route Survey, GPS Tracking & Support -->
            <div class="border-top pt-4">
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="p-3 p-md-4 rounded-4 bg-light border mb-2">
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <i class="bi bi-truck text-danger fs-5"></i>
                                <h3 class="h6 fw-bold text-dark mb-0">Transport Vehicles & Local Shifting Cost in <?= esc($cityName) ?></h3>
                            </div>
                            <p class="mb-0 pm-city-intro-p"><?= esc($city_intro_p2) ?></p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-3 p-md-4 rounded-4 bg-light border h-100">
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <i class="bi bi-clipboard2-check-fill text-danger fs-5"></i>
                                <h3 class="h6 fw-bold text-dark mb-0">100% Free Doorstep Survey & Route Planning</h3>
                            </div>
                            <p class="mb-0 pm-city-intro-p"><?= esc($city_intro_p3) ?></p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-3 p-md-4 rounded-4 bg-light border h-100">
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <i class="bi bi-geo-alt-fill text-danger fs-5"></i>
                                <h3 class="h6 fw-bold text-dark mb-0">GPS Live Tracking, Insurance & Reliable Support</h3>
                            </div>
                            <p class="mb-0 pm-city-intro-p"><?= esc($city_intro_p4) ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. Estimated Rate Guide Table (Full Width) -->
        <div class="pm-cd-card">
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-2">
                <div>
                    <span class="section-badge mb-1">
                        <i class="bi bi-tags-fill"></i> Transparent Pricing
                    </span>
                    <h2 class="pm-cd-subtitle mb-0">Estimated Shifting Charges in <?= esc($cityName) ?></h2>
                </div>
                <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill small">
                    <i class="bi bi-check-circle-fill me-1"></i> 100% Upfront Estimates
                </span>
            </div>
            <p class="text-muted small mb-3">Indicative market rates for local moves within <?= esc($cityName) ?> and domestic intercity shifting from <?= esc($cityName) ?>.</p>

            <!-- Mobile Side Scroll Swipe Hint -->
            <div class="d-flex align-items-center justify-content-between text-muted small d-lg-none mb-2">
                <span class="small"><i class="bi bi-arrow-left-right text-danger me-1"></i> Swipe sideways to see all rates</span>
                <span class="badge bg-light text-dark border small px-2 py-1 rounded-pill">5 Move Tiers</span>
            </div>

            <!-- Ultra-Compact Modern Pricing Table (Side-Scroll on Mobile) -->
            <div class="pm-compact-pricing-wrapper">
                <div class="pm-compact-pricing-table">
                    <!-- Header -->
                    <div class="pm-cpt-header">
                        <div>Move Requirement</div>
                        <div>Local (Within <?= esc($cityName) ?>)</div>
                        <div>Domestic Intercity</div>
                        <div>Packaging Tier</div>
                        <div class="text-end">Action</div>
                    </div>

                    <!-- Row 1: 1 BHK -->
                    <div class="pm-cpt-row">
                        <div class="pm-cpt-col-service">
                            <div class="pm-cpt-icon" aria-hidden="true"><i class="bi bi-house-door-fill"></i></div>
                            <div>
                                <h3 class="pm-cpt-title mb-0 pm-cpt-title-styled">1 BHK Complete Shifting</h3>
                            </div>
                        </div>
                        <div class="pm-cpt-col-price">
                            <span class="pm-cpt-price-local">₹3,000 – ₹5,000</span>
                        </div>
                        <div class="pm-cpt-col-price">
                            <span class="pm-cpt-price-domestic">₹8,500 – ₹16,000</span>
                        </div>
                        <div class="pm-cpt-col-pack">
                            <span class="pm-cpt-pack-text"><i class="bi bi-box-seam text-danger me-1"></i> Multi-Layer Cartons + Bubble</span>
                        </div>
                        <div class="pm-cpt-col-action">
                            <button type="button" class="pm-cpt-btn" data-bs-toggle="modal" data-bs-target="#qteModal" title="Book 1 BHK Move">
                                <span>Book</span> <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Row 2: 2 BHK (Popular) -->
                    <div class="pm-cpt-row popular">
                        <div class="pm-cpt-col-service">
                            <div class="pm-cpt-icon" aria-hidden="true"><i class="bi bi-buildings-fill"></i></div>
                            <div class="d-flex align-items-center gap-2">
                                <h3 class="pm-cpt-title mb-0 pm-cpt-title-styled">2 BHK Complete Shifting</h3>
                                <span class="pm-cpt-badge">Popular</span>
                            </div>
                        </div>
                        <div class="pm-cpt-col-price">
                            <span class="pm-cpt-price-local">₹5,000 – ₹9,000</span>
                        </div>
                        <div class="pm-cpt-col-price">
                            <span class="pm-cpt-price-domestic">₹13,500 – ₹24,000</span>
                        </div>
                        <div class="pm-cpt-col-pack">
                            <span class="pm-cpt-pack-text"><i class="bi bi-shield-check text-success me-1"></i> Heavy Multi-Layer + Foam</span>
                        </div>
                        <div class="pm-cpt-col-action">
                            <button type="button" class="pm-cpt-btn" data-bs-toggle="modal" data-bs-target="#qteModal" title="Book 2 BHK Move">
                                <span>Book</span> <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Row 3: 3 BHK / Villa -->
                    <div class="pm-cpt-row">
                        <div class="pm-cpt-col-service">
                            <div class="pm-cpt-icon" aria-hidden="true"><i class="bi bi-house-gear-fill"></i></div>
                            <div>
                                <h3 class="pm-cpt-title mb-0 pm-cpt-title-styled">3 BHK / Villa Shifting</h3>
                            </div>
                        </div>
                        <div class="pm-cpt-col-price">
                            <span class="pm-cpt-price-local">₹8,000 – ₹15,000+</span>
                        </div>
                        <div class="pm-cpt-col-price">
                            <span class="pm-cpt-price-domestic">₹19,000 – ₹35,000</span>
                        </div>
                        <div class="pm-cpt-col-pack">
                            <span class="pm-cpt-pack-text"><i class="bi bi-box-seam text-danger me-1"></i> Full Multi-Layer + Film</span>
                        </div>
                        <div class="pm-cpt-col-action">
                            <button type="button" class="pm-cpt-btn" data-bs-toggle="modal" data-bs-target="#qteModal" title="Book 3 BHK Move">
                                <span>Book</span> <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Row 4: Bike / Two-Wheeler -->
                    <div class="pm-cpt-row">
                        <div class="pm-cpt-col-service">
                            <div class="pm-cpt-icon" aria-hidden="true"><i class="bi bi-bicycle"></i></div>
                            <div>
                                <h3 class="pm-cpt-title mb-0 pm-cpt-title-styled">Bike / Two-Wheeler Transport</h3>
                            </div>
                        </div>
                        <div class="pm-cpt-col-price">
                            <span class="pm-cpt-price-local">₹1,500 – ₹3,000</span>
                        </div>
                        <div class="pm-cpt-col-price">
                            <span class="pm-cpt-price-domestic">₹3,500 – ₹8,000</span>
                        </div>
                        <div class="pm-cpt-col-pack">
                            <span class="pm-cpt-pack-text"><i class="bi bi-box-seam text-danger me-1"></i> Custom Packing + Scratch Wrap</span>
                        </div>
                        <div class="pm-cpt-col-action">
                            <button type="button" class="pm-cpt-btn" data-bs-toggle="modal" data-bs-target="#qteModal" title="Book Bike Transport">
                                <span>Book</span> <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Row 5: Car Transportation -->
                    <div class="pm-cpt-row">
                        <div class="pm-cpt-col-service">
                            <div class="pm-cpt-icon" aria-hidden="true"><i class="bi bi-car-front-fill"></i></div>
                            <div>
                                <h3 class="pm-cpt-title mb-0 pm-cpt-title-styled">Car Transportation</h3>
                            </div>
                        </div>
                        <div class="pm-cpt-col-price">
                            <span class="pm-cpt-price-local">₹3,000 – ₹6,000</span>
                        </div>
                        <div class="pm-cpt-col-price">
                            <span class="pm-cpt-price-domestic">₹8,000 – ₹18,500</span>
                        </div>
                        <div class="pm-cpt-col-pack">
                            <span class="pm-cpt-pack-text"><i class="bi bi-shield-check text-success me-1"></i> Enclosed Carrier + Wheel Straps</span>
                        </div>
                        <div class="pm-cpt-col-action">
                            <button type="button" class="pm-cpt-btn" data-bs-toggle="modal" data-bs-target="#qteModal" title="Book Car Transport">
                                <span>Book</span> <i class="bi bi-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Note Strip -->
            <div class="pm-pricing-note-strip">
                <div class="d-flex align-items-center gap-2 text-muted small">
                    <i class="bi bi-info-circle-fill text-danger"></i>
                    <span>Exact moving quote depends on floor level, elevator availability, packing needs, and travel distance.</span>
                </div>
                <span class="badge bg-light text-dark border small px-3 py-1 rounded-pill">
                    <i class="bi bi-shield-check text-success me-1"></i> 100% Free Doorstep Survey Included
                </span>
            </div>
        </div>

        <!-- 3. Why People Choose Our Moving Company Sanvi Packers and Movers -->
        <div class="pm-cd-card">
            <div class="text-center mb-4">
                <span class="section-badge mb-2">
                    <i class="bi bi-award-fill"></i> Why Us
                </span>
                <h2 class="pm-cd-title mb-2"><?= esc($city_why_choose_title) ?></h2>
                <p class="mx-auto mb-0 pm-city-why-intro"><?= esc($city_why_choose_intro) ?></p>
            </div>

            <!-- 9 Core Advantages Grid -->
            <div class="row g-3 g-lg-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
                <?php foreach ($city_why_choose_points as $idx => $point): ?>
                    <div class="col d-flex">
                        <div class="card w-100 border rounded-4 p-3 p-lg-4 bg-white shadow-sm transition-hover d-flex flex-column pm-city-why-card">
                            <!-- Header Row: [Icon] [Title] [01 Badge] in One Line -->
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <div class="rounded-3 d-flex align-items-center justify-content-center flex-shrink-0 pm-city-why-icon">
                                    <i class="bi <?= esc($point['icon']) ?>"></i>
                                </div>
                                <h3 class="h6 fw-bold text-dark mb-0 flex-grow-1 pm-city-why-title">
                                    <?= esc($point['title']) ?>
                                </h3>
                                <span class="badge rounded-pill bg-light text-muted fw-bold px-2 py-1 flex-shrink-0 pm-city-why-badge">
                                    0<?= $idx + 1 ?>
                                </span>
                            </div>
                            <p class="small mb-0 flex-grow-1 pm-city-why-desc">
                                <?= esc($point['desc']) ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- 4. Our Process for Safe and Hassle-Free House Shifting -->
        <div class="pm-cd-card">
            <div class="text-center mb-4">
                <span class="section-badge mb-2">
                    <i class="bi bi-arrow-repeat"></i> How It Works
                </span>
                <h2 class="pm-cd-title mb-2"><?= esc($city_process_title) ?></h2>
                <p class="mx-auto mb-0 pm-city-proc-intro"><?= esc($city_process_intro) ?></p>
            </div>

            <div class="row g-3 g-lg-4 row-cols-1 row-cols-md-2 row-cols-lg-5">
                <?php foreach ($city_process_steps as $step): ?>
                    <div class="col d-flex">
                        <div class="card w-100 border rounded-4 p-3 bg-white shadow-sm transition-hover d-flex flex-column text-center pm-city-proc-card">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <span class="badge rounded-pill bg-danger text-white fw-bold px-2 py-1 pm-city-proc-step">
                                    Step <?= esc($step['step']) ?>
                                </span>
                                <div class="rounded-circle d-flex align-items-center justify-content-center pm-city-proc-icon">
                                    <i class="bi <?= esc($step['icon']) ?>"></i>
                                </div>
                            </div>
                            <h3 class="h6 fw-bold text-dark mb-2 pm-city-proc-title">
                                <?= esc($step['title']) ?>
                            </h3>
                            <p class="small mb-0 flex-grow-1 pm-city-proc-desc">
                                <?= esc($step['desc']) ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Bottom Quality Assurance Bar -->
            <div class="pm-process-assurance-bar mt-4">
                <div class="pm-assurance-item">
                    <i class="bi bi-shield-lock-fill"></i>
                    <span>100% Transit Insurance Coverage</span>
                </div>
                <div class="pm-assurance-divider"></div>
                <div class="pm-assurance-item">
                    <i class="bi bi-clock-history"></i>
                    <span>On-Time Pickup & Delivery Guarantee</span>
                </div>
                <div class="pm-assurance-divider"></div>
                <div class="pm-assurance-item">
                    <i class="bi bi-headset"></i>
                    <span>Dedicated Relocation Coordinator</span>
                </div>
            </div>
        </div>

        <!-- 5. Local Service Area & Live Location Map Section (Col-6 / Col-6) -->
        <div class="pm-cd-card">
            <div class="row align-items-stretch g-4">
                <!-- Col-6: Operational Coverage Details -->
                <div class="col-lg-6 d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mb-2">
                            <span class="section-badge mb-0 text-nowrap">
                                <i class="bi bi-geo-alt-fill"></i> Local Service Coverage
                            </span>
                            <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-1 rounded-pill small text-nowrap">
                                <i class="bi bi-broadcast me-1"></i> 100% <?= esc($cityName) ?> Covered
                            </span>
                        </div>
                        <h2 class="pm-cd-subtitle mb-2">Comprehensive Moving Coverage Across <?= esc($cityName) ?></h2>
                        <p class="text-muted small mb-4">
                            Operating active relocation fleets and certified packing teams across every sector, residential colony, and industrial belt in <strong><?= esc($cityName) ?>, <?= esc($stateName) ?></strong>. Guaranteed prompt vehicle dispatch with real-time GPS tracking.
                        </p>

                        <!-- Coverage Feature Points -->
                        <div class="pm-map-features-list">
                            <div class="pm-map-feature-item">
                                <div class="pm-map-feat-icon" aria-hidden="true">
                                    <i class="bi bi-truck"></i>
                                </div>
                                <div>
                                    <h3 class="pm-map-feat-title pm-map-feat-title-styled">Prompt Local Fleet Dispatch</h3>
                                    <p class="pm-map-feat-desc">Dedicated closed-body moving trucks stationed within <?= esc($cityName) ?> for rapid on-time arrival.</p>
                                </div>
                            </div>

                            <div class="pm-map-feature-item">
                                <div class="pm-map-feat-icon" aria-hidden="true">
                                    <i class="bi bi-pin-map-fill"></i>
                                </div>
                                <div>
                                    <h3 class="pm-map-feat-title pm-map-feat-title-styled">Doorstep Pickup & Delivery</h3>
                                    <p class="pm-map-feat-desc">Complete multi-layer packing, elevator handling, and doorstep unboxing in all <?= esc($cityName) ?> zones.</p>
                                </div>
                            </div>

                            <div class="pm-map-feature-item">
                                <div class="pm-map-feat-icon" aria-hidden="true">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <div>
                                    <h3 class="pm-map-feat-title pm-map-feat-title-styled">100% Transit Insured Movement</h3>
                                    <p class="pm-map-feat-desc">All household goods, electronic appliances, and vehicles are fully insured during transit.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Quick Assistance Strip -->
                    <div class="pm-map-support-strip">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-telephone-inbound-fill text-danger"></i>
                            <span class="small text-muted">Need moving assistance in <?= esc($cityName) ?>?</span>
                        </div>
                        <a <?= $phonehtml ?> class="pm-map-btn-call" title="Call Now" aria-label="Call Now">
                            <i class="bi bi-telephone-fill" aria-hidden="true"></i> Call Helpline
                        </a>
                    </div>
                </div>

                <!-- Col-6: Interactive Map Frame -->
                <div class="col-lg-6">
                    <div class="pm-city-map-container">
                        <div class="pm-city-map-header">
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-compass text-danger"></i>
                                <span class="fw-bold small text-dark"><?= esc($cityName) ?> Location & Relocation Map</span>
                            </div>
                            <span class="badge bg-light text-dark border small px-2 py-1 rounded-pill">
                                <i class="bi bi-geo-fill text-danger me-1"></i><?= esc($cityName) ?>
                            </span>
                        </div>
                        <div class="pm-city-map-frame">
                            <?= view('Modules\City\Views\city_map', ['cities' => $cities ?? [], 'city' => $cityName]) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 6. Real Move Case Study: 2BHK Flat Shifting -->
        <div class="pm-cd-card pm-cd-card-case-bg">
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-3">
                <div>
                    <span class="section-badge mb-1">
                        <i class="bi bi-journal-text"></i> Real Move Experience
                    </span>
                    <h2 class="pm-cd-title mb-0"><?= esc($city_case_study_title) ?></h2>
                </div>
                <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 px-3 py-2 rounded-pill small">
                    <i class="bi bi-check-circle-fill me-1"></i> Successfully Completed Move
                </span>
            </div>

            <div class="row g-4">
                <div class="col-12">
                    <div class="p-3 p-md-4 rounded-4 bg-white border shadow-sm">
                        <div class="d-flex align-items-center gap-2 mb-2 text-danger fw-bold small">
                            <i class="bi bi-flag-fill"></i> Step 1: The Move Requirement
                        </div>
                        <p class="mb-3 pm-case-study-p"><?= esc($city_case_study_p1) ?></p>

                        <div class="d-flex align-items-center gap-2 mb-2 text-danger fw-bold small">
                            <i class="bi bi-box-seam-fill"></i> Step 2: Survey & Multi-Layer Packing
                        </div>
                        <p class="mb-3 pm-case-study-p"><?= esc($city_case_study_p2) ?></p>

                        <div class="d-flex align-items-center gap-2 mb-2 text-success fw-bold small">
                            <i class="bi bi-check2-circle"></i> Step 3: Transit, Delivery & Setup
                        </div>
                        <p class="mb-0 pm-case-study-p"><?= esc($city_case_study_p3) ?></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 7. FAQs (Col-7) and Customer Feedback (Col-5) -->
        <div class="row g-4 mb-4">
            <!-- Left: FAQs (col-lg-7) -->
            <div class="col-lg-7 col-12">
                <div class="pm-cd-card h-100 mb-0">
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mb-3">
                        <div>
                            <span class="section-badge mb-1">
                                <i class="bi bi-question-circle-fill"></i> Got Questions?
                            </span>
                            <h2 class="pm-cd-title mb-0"><?= esc($city_faqs_title) ?></h2>
                        </div>
                        <span class="badge bg-light text-dark border px-3 py-2 rounded-pill small">
                            <i class="bi bi-patch-question-fill text-danger me-1"></i> Verified Answers
                        </span>
                    </div>
                    <p class="text-muted small mb-3">Clear, transparent answers to help you plan a safe and stress-free relocation in <?= esc($cityName) ?>.</p>

                    <!-- City FAQ Accordion with Semantic H3 tags -->
                    <div class="accordion pm-cd-faq-accordion" id="cityFaqAccordion">
                        <?php foreach ($city_faqs as $fidx => $faq): ?>
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="cfaqHead<?= $fidx + 1 ?>">
                                    <button class="accordion-button <?= $fidx === 0 ? '' : 'collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#cfaq<?= $fidx + 1 ?>" aria-expanded="<?= $fidx === 0 ? 'true' : 'false' ?>" aria-controls="cfaq<?= $fidx + 1 ?>">
                                        <span class="pm-cd-faq-num">0<?= $fidx + 1 ?></span>
                                        <span><?= esc($faq['q']) ?></span>
                                    </button>
                                </h3>
                                <div id="cfaq<?= $fidx + 1 ?>" class="accordion-collapse collapse <?= $fidx === 0 ? 'show' : '' ?>" aria-labelledby="cfaqHead<?= $fidx + 1 ?>" data-bs-parent="#cityFaqAccordion">
                                    <div class="accordion-body pm-city-accordion-body">
                                        <?= esc($faq['a']) ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Right: Customer Testimonials (col-lg-5) -->
            <div class="col-lg-5 col-12">
                <div class="pm-cd-card h-100 mb-0 d-flex flex-column">
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mb-3">
                        <div>
                            <span class="section-badge mb-1">
                                <i class="bi bi-chat-quote-fill"></i> Customer Feedback
                            </span>
                            <h3 class="pm-cd-subtitle mb-0">What <?= esc($cityName) ?> Clients Say</h3>
                        </div>
                        <div class="pm-testi-nav-arrows">
                            <button type="button" class="pm-testi-arrow-btn" id="pmTestiPrev" aria-label="Previous Testimonial" title="Previous">
                                <i class="bi bi-chevron-left"></i>
                            </button>
                            <button type="button" class="pm-testi-arrow-btn" id="pmTestiNext" aria-label="Next Testimonial" title="Next">
                                <i class="bi bi-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                    <p class="text-muted small mb-3">Verified shifting experiences from residents and businesses in <?= esc($cityName) ?>.</p>

                    <!-- Responsive Rating Summary Box -->
                    <div class="pm-city-rating-summary mb-3 p-3">
                        <div class="d-flex align-items-center gap-3">
                            <div class="pm-rating-score-box text-center flex-shrink-0 pm-rating-score-box-styled">
                                <div class="d-flex align-items-center justify-content-center gap-1">
                                    <span class="pm-rating-score mb-0 pm-rating-score-styled">4.9</span>
                                    <i class="bi bi-star-fill text-warning pm-rating-star-icon"></i>
                                </div>
                                <span class="badge bg-danger bg-opacity-10 text-danger p-0 fw-bold pm-rating-top-rated">Top Rated</span>
                            </div>
                            <div class="flex-grow-1 min-w-0">
                                <div class="d-flex align-items-center gap-1 text-warning mb-1 pm-rating-stars-row">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <span class="text-dark fw-bold ms-1 pm-rating-stars-score">(4.9/5)</span>
                                </div>
                                <div class="fw-bold text-dark small pm-rating-client-score">Verified Client Score</div>
                                <div class="text-muted small pm-rating-moves-count">Based on 1,450+ moves across India</div>
                            </div>
                        </div>
                    </div>

                    <!-- Horizontal Responsive Swipe Testimonial Window -->
                    <div class="pm-testi-scroll-viewport" id="pmTestiScroll">
                        <div class="pm-city-review-card pm-testi-snap-item">
                            <div class="pm-city-review-header d-flex align-items-center justify-content-between gap-2 mb-2">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="pm-review-avatar">RS</div>
                                    <div>
                                        <h4 class="pm-review-author mb-0 pm-review-author-styled">Rahul Sharma</h4>
                                        <span class="pm-review-loc small text-muted"><i class="bi bi-geo-alt-fill text-danger"></i> Verified Move</span>
                                    </div>
                                </div>
                                <span class="pm-review-badge flex-shrink-0"><i class="bi bi-patch-check-fill"></i> 5.0 Star</span>
                            </div>
                            <p class="pm-review-text mb-3 pm-review-text-styled">
                                "Recently shifted our 3BHK house. Our furniture, kitchenware and appliances were taken care of by the team very well with multi-layer bubble packing. Zero stress!"
                            </p>
                            <div class="pm-review-footer d-flex align-items-center justify-content-between pt-2 border-top border-light">
                                <span class="text-muted small"><i class="bi bi-shield-check text-success me-1"></i> Household Relocation</span>
                                <span class="pm-review-stars small fw-bold text-dark"><i class="bi bi-star-fill text-warning me-1"></i> 5.0</span>
                            </div>
                        </div>

                        <div class="pm-city-review-card pm-testi-snap-item">
                            <div class="pm-city-review-header d-flex align-items-center justify-content-between gap-2 mb-2">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="pm-review-avatar">AV</div>
                                    <div>
                                        <h4 class="pm-review-author mb-0 pm-review-author-styled">Ankit Verma</h4>
                                        <span class="pm-review-loc small text-muted"><i class="bi bi-geo-alt-fill text-danger"></i> Office Relocation</span>
                                    </div>
                                </div>
                                <span class="pm-review-badge flex-shrink-0"><i class="bi bi-patch-check-fill"></i> 5.0 Star</span>
                            </div>
                            <p class="pm-review-text mb-3 pm-review-text-styled">
                                "Our office computers and workstations have been shifted smoothly. Proper planning of packing and loading helped avoid confusion. Highly satisfied with their cooperation."
                            </p>
                            <div class="pm-review-footer d-flex align-items-center justify-content-between pt-2 border-top border-light">
                                <span class="text-muted small"><i class="bi bi-shield-check text-success me-1"></i> Office Shifting</span>
                                <span class="pm-review-stars small fw-bold text-dark"><i class="bi bi-star-fill text-warning me-1"></i> 5.0</span>
                            </div>
                        </div>

                        <div class="pm-city-review-card pm-testi-snap-item">
                            <div class="pm-city-review-header d-flex align-items-center justify-content-between gap-2 mb-2">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="pm-review-avatar">SM</div>
                                    <div>
                                        <h4 class="pm-review-author mb-0 pm-review-author-styled">Sandeep Mehta</h4>
                                        <span class="pm-review-loc small text-muted"><i class="bi bi-geo-alt-fill text-danger"></i> Vehicle Transport</span>
                                    </div>
                                </div>
                                <span class="pm-review-badge flex-shrink-0"><i class="bi bi-patch-check-fill"></i> 5.0 Star</span>
                            </div>
                            <p class="pm-review-text mb-3 pm-review-text-styled">
                                "I was worried about moving my car during relocation. The team guided me clearly and provided GPS live tracking. Car reached safely without a single scratch."
                            </p>
                            <div class="pm-review-footer d-flex align-items-center justify-content-between pt-2 border-top border-light">
                                <span class="text-muted small"><i class="bi bi-shield-check text-success me-1"></i> Car Shifting</span>
                                <span class="pm-review-stars small fw-bold text-dark"><i class="bi bi-star-fill text-warning me-1"></i> 5.0</span>
                            </div>
                        </div>
                    </div>

                    <!-- Slide Controls / Indicator Bar -->
                    <div class="d-flex align-items-center justify-content-between mt-2 pt-2 border-top border-light">
                        <div class="d-flex align-items-center gap-1" id="pmTestiDots">
                            <span class="pm-testi-dot active"></span>
                            <span class="pm-testi-dot"></span>
                            <span class="pm-testi-dot"></span>
                        </div>
                        <span class="badge bg-light text-dark border small px-2 py-1 rounded-pill" id="pmTestiCounter">
                            1 of 3 Stories
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- 8. Contact Sanvi Packers and Movers for a Free Quotation in City -->
        <div class="pm-cd-action-banner">
            <div class="pm-cta-content-wrap col-12 w-100">
                <div class="pm-cta-icon-avatar flex-shrink-0" aria-hidden="true">
                    <i class="bi bi-headset"></i>
                </div>
                <div class="flex-grow-1">
                    <div class="pm-cta-live-pill mb-2">
                        <span class="pm-live-dot"></span> 24/7 Relocation Support
                    </div>
                    <h2 class="pm-cta-heading mb-2 text-dark fw-bold pm-cta-heading-styled"><?= esc($city_cta_title) ?></h2>
                    <p class="pm-cta-text mb-3 pm-cta-text-styled"><?= esc($city_cta_desc) ?></p>
                    <div class="pm-cta-trust-tags pm-cta-trust-tags-styled">
                        <span><i class="bi bi-lightning-charge-fill text-warning"></i> 100% Free Doorstep Survey</span>
                        <span><i class="bi bi-shield-check text-success"></i> Fixed Price Guarantee</span>
                        <span><i class="bi bi-check-circle-fill text-danger"></i> Zero Hidden Charges</span>
                    </div>
                </div>
            </div>
            <div class="pm-cta-actions-wrap col-12 w-100">
                <a <?= $phonehtml ?> class="pm-cta-btn-call" title="Call Now" aria-label="Call Now">
                    <i class="bi bi-telephone-fill" aria-hidden="true"></i>
                    <span>Call <?= $phone ?></span>
                </a>
                <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener noreferrer" class="pm-cta-btn-whatsapp" title="Chat on WhatsApp" aria-label="Chat on WhatsApp">
                    <i class="bi bi-whatsapp" aria-hidden="true"></i>
                    <span>Chat on WhatsApp</span>
                </a>
            </div>
        </div>

        <!-- 9. Other Nearby Cities Navigation (Full Width) -->
        <?php if (!empty($nearbyCities)): ?>
            <div class="pm-cd-card mb-0">
                <h2 class="pm-cd-subtitle pm-cd-subtitle-styled">
                    <i class="bi bi-geo-alt-fill text-danger me-2"></i>Other Nearby Cities in <?= esc($stateName) ?>
                </h2>
                <div class="pm-cd-nearby-pills">
                    <?php foreach ($nearbyCities as $nc): 
                        $nName = is_array($nc) ? ($nc['nm'] ?? 'City') : (string)$nc;
                        $nSlug = strtolower(str_replace(' ', '-', $nName));
                    ?>
                        <a href="<?= site_url('city/' . $stateSlug . '/' . $nSlug) ?>" class="pm-cd-nearby-pill" title="Packers and Movers in <?= esc($nName) ?>">
                            <i class="bi bi-geo-alt"></i> <?= esc($nName) ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>

    </div>
</section>

<!-- Schema.org FAQPage Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    <?php foreach ($city_faqs as $i => $faq): ?>
    {
      "@type": "Question",
      "name": <?= json_encode($faq['q']) ?>,
      "acceptedAnswer": {
        "@type": "Answer",
        "text": <?= json_encode($faq['a']) ?>
      }
    }<?= $i < count($city_faqs) - 1 ? ',' : '' ?>
    <?php endforeach; ?>
  ]
}
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var viewport = document.getElementById('pmTestiScroll');
    var btnPrev = document.getElementById('pmTestiPrev');
    var btnNext = document.getElementById('pmTestiNext');
    var counter = document.getElementById('pmTestiCounter');
    var dotsContainer = document.getElementById('pmTestiDots');
    if (!viewport) return;

    var items = viewport.querySelectorAll('.pm-testi-snap-item');
    var total = items.length;

    function updateCounter() {
        if (!counter || total === 0) return;
        var scrollLeft = viewport.scrollLeft;
        var itemWidth = viewport.offsetWidth || 280;
        var currentIdx = Math.min(total, Math.max(1, Math.round(scrollLeft / itemWidth) + 1));
        counter.textContent = currentIdx + ' of ' + total + ' Stories';
        
        if (dotsContainer) {
            var dots = dotsContainer.querySelectorAll('.pm-testi-dot');
            dots.forEach(function(dot, i) {
                if (i === currentIdx - 1) {
                    dot.classList.add('active');
                } else {
                    dot.classList.remove('active');
                }
            });
        }
    }

    viewport.addEventListener('scroll', updateCounter, { passive: true });

    if (btnPrev) {
        btnPrev.addEventListener('click', function() {
            var itemWidth = viewport.offsetWidth || 280;
            viewport.scrollBy({ left: -itemWidth, behavior: 'smooth' });
        });
    }

    if (btnNext) {
        btnNext.addEventListener('click', function() {
            var itemWidth = viewport.offsetWidth || 280;
            viewport.scrollBy({ left: itemWidth, behavior: 'smooth' });
        });
    }
});
</script>
