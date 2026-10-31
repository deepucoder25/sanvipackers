<?php
$city = !empty($city) ? $city : ($cityName ?? '');

// Load custom city content variables ($htmlcontent, $htmlcontent1, etc.)
if (file_exists(__DIR__ . '/city_content.php')) {
    include __DIR__ . '/city_content.php';
}

// Look for city image first, then state image, then fallback
$cityImgSrc = '';
foreach (['webp', 'jpg', 'jpeg', 'png'] as $ext) {
    if (file_exists(FCPATH . 'assets/img/city/' . $citySlug . '.' . $ext)) {
        $cityImgSrc = base_url('assets/img/city/' . $citySlug . '.' . $ext);
        break;
    }
}
if (empty($cityImgSrc)) {
    foreach (['webp', 'jpg', 'jpeg', 'png'] as $ext) {
        if (file_exists(FCPATH . 'assets/img/state/' . $stateSlug . '.' . $ext)) {
            $cityImgSrc = base_url('assets/img/state/' . $stateSlug . '.' . $ext);
            break;
        }
    }
}
?>

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
                <!-- Hero Breadcrumb Navigation -->
                <nav aria-label="breadcrumb" class="mb-3">
                    <ol class="pm-hero-breadcrumb-pill">
                        <li class="pm-hb-item">
                            <a href="<?= site_url('/') ?>" class="pm-hb-link"><i class="bi bi-house-door-fill me-1 text-danger"></i>Home</a>
                        </li>
                        <li class="pm-hb-sep" aria-hidden="true"><i class="bi bi-chevron-right"></i></li>
                        <li class="pm-hb-item">
                            <a href="<?= site_url('city') ?>" class="pm-hb-link">All States</a>
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

                <h1 class="display-5 fw-bold text-white lh-sm mb-3">
                    Best Packers and Movers in <span class="pm-text-gradient"><?= esc($cityName) ?>, <?= esc($stateName) ?></span>
                </h1>

                <p class="lead pm-text-muted mb-4">
                    Professional packaging with 5-layer corrugated protection, certified handlers, and 100% damage-free delivery guarantee in <?= esc($cityName) ?> and across 500+ Indian cities.
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
                    <a <?= $phonehtml ?> class="btn btn-pm-yellow px-3 py-2 py-md-3 rounded-pill d-inline-flex align-items-center justify-content-center gap-2 text-nowrap w-100 w-sm-auto">
                        <i class="bi bi-telephone-fill"></i>
                        <span><?=phone ?></span>
                    </a>
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
                        <span class="pm-text-muted small">(1,500+ Happy Moves in <?= esc($cityName) ?>)</span>
                    </div>
                    <div class="d-flex align-items-center gap-2 text-white small">
                        <i class="bi bi-patch-check-fill pm-text-accent-red"></i>
                        <span>100% Transit Insured</span>
                    </div>
                    <div class="d-flex align-items-center gap-2 text-white small">
                        <i class="bi bi-clock-history pm-text-accent-yellow"></i>
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
        
        <!-- 1. Hero Overview & Trust Metrics Banner (Left Content, Right Image) -->
        <div class="pm-cd-card">
            <div class="row align-items-center g-4 g-lg-5">
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

                    <h2 class="pm-cd-title">Top-Rated Packers & Movers in <span class="text-danger"><?= esc($cityName) ?></span></h2>
                    <?= $htmlcontent ?? '' ?>

                    <!-- Feature Tags (One Row) -->
                    <div class="pm-cd-feature-pills">
                        <span class="pm-cd-feature-pill"><i class="bi bi-check-circle-fill"></i> 5-Layer Packing</span>
                        <span class="pm-cd-feature-pill"><i class="bi bi-check-circle-fill"></i> 100% Transit Insurance</span>
                        <span class="pm-cd-feature-pill"><i class="bi bi-check-circle-fill"></i> GPS Tracked Fleet</span>
                        <span class="pm-cd-feature-pill"><i class="bi bi-check-circle-fill"></i> Zero Hidden Costs</span>
                    </div>

                    <!-- Direct Action Buttons -->
                    <div class="pm-cd-hero-actions">
                        <a <?= $phonehtml ?> class="pm-btn-red" title="Call Now" aria-label="Call Now">
                            <i class="bi bi-telephone-fill" aria-hidden="true"></i>
                            <span class="d-none d-sm-inline">Call <?=phone ?></span>
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
                        <?php if (!empty($cityImgSrc)): ?>
                            <img src="<?= $cityImgSrc ?>" 
                                 alt="Packers and Movers in <?= esc($cityName) ?>, <?= esc($stateName) ?>" 
                                 class="pm-cd-hero-img" 
                                 loading="lazy" 
                                 decoding="async" 
                                 width="600" 
                                 height="400">
                        <?php else: ?>
                            <div class="pm-state-placeholder">
                                <div class="pm-state-placeholder-icon">
                                    <i class="bi bi-buildings"></i>
                                </div>
                                <span class="pm-state-watermark"><?= esc($stateSlug) ?></span>
                            </div>
                        <?php endif; ?>
                        <div class="pm-cd-hero-img-overlay"></div>
                        <div class="pm-cd-hero-floating-badge">
                            <i class="bi bi-award-fill"></i> #1 Mover in <?= esc($cityName) ?>
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
                    <h3 class="pm-cd-subtitle mb-0">Estimated Shifting Charges in <?= esc($cityName) ?></h3>
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
                                <span class="pm-cpt-title">1 BHK Complete Shifting</span>
                            </div>
                        </div>
                        <div class="pm-cpt-col-price">
                            <span class="pm-cpt-price-local">₹3,500 – ₹6,500</span>
                        </div>
                        <div class="pm-cpt-col-price">
                            <span class="pm-cpt-price-domestic">₹8,500 – ₹16,000</span>
                        </div>
                        <div class="pm-cpt-col-pack">
                            <span class="pm-cpt-pack-text"><i class="bi bi-box-seam text-danger me-1"></i> 3-Layer Cartons + Bubble</span>
                        </div>
                        <div class="pm-cpt-col-action">
                            <a <?= $phonehtml ?> class="pm-cpt-btn" title="Book 1 BHK Move">
                                <span>Book</span> <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Row 2: 2 BHK (Popular) -->
                    <div class="pm-cpt-row popular">
                        <div class="pm-cpt-col-service">
                            <div class="pm-cpt-icon" aria-hidden="true"><i class="bi bi-buildings-fill"></i></div>
                            <div class="d-flex align-items-center gap-2">
                                <span class="pm-cpt-title">2 BHK Complete Shifting</span>
                                <span class="pm-cpt-badge">Popular</span>
                            </div>
                        </div>
                        <div class="pm-cpt-col-price">
                            <span class="pm-cpt-price-local">₹6,000 – ₹11,500</span>
                        </div>
                        <div class="pm-cpt-col-price">
                            <span class="pm-cpt-price-domestic">₹13,500 – ₹24,000</span>
                        </div>
                        <div class="pm-cpt-col-pack">
                            <span class="pm-cpt-pack-text"><i class="bi bi-shield-check text-success me-1"></i> Heavy 5-Layer + Foam</span>
                        </div>
                        <div class="pm-cpt-col-action">
                            <a <?= $phonehtml ?> class="pm-cpt-btn" title="Book 2 BHK Move">
                                <span>Book</span> <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Row 3: 3 BHK / Villa -->
                    <div class="pm-cpt-row">
                        <div class="pm-cpt-col-service">
                            <div class="pm-cpt-icon" aria-hidden="true"><i class="bi bi-house-gear-fill"></i></div>
                            <div>
                                <span class="pm-cpt-title">3 BHK / Villa Shifting</span>
                            </div>
                        </div>
                        <div class="pm-cpt-col-price">
                            <span class="pm-cpt-price-local">₹10,500 – ₹18,000</span>
                        </div>
                        <div class="pm-cpt-col-price">
                            <span class="pm-cpt-price-domestic">₹19,000 – ₹35,000</span>
                        </div>
                        <div class="pm-cpt-col-pack">
                            <span class="pm-cpt-pack-text"><i class="bi bi-box-seam text-danger me-1"></i> Full Wooden Crating + Film</span>
                        </div>
                        <div class="pm-cpt-col-action">
                            <a <?= $phonehtml ?> class="pm-cpt-btn" title="Book 3 BHK Move">
                                <span>Book</span> <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Row 4: Bike / Two-Wheeler -->
                    <div class="pm-cpt-row">
                        <div class="pm-cpt-col-service">
                            <div class="pm-cpt-icon" aria-hidden="true"><i class="bi bi-bicycle"></i></div>
                            <div>
                                <span class="pm-cpt-title">Bike / Two-Wheeler Transport</span>
                            </div>
                        </div>
                        <div class="pm-cpt-col-price">
                            <span class="pm-cpt-price-local">₹1,500 – ₹3,000</span>
                        </div>
                        <div class="pm-cpt-col-price">
                            <span class="pm-cpt-price-domestic">₹3,500 – ₹8,000</span>
                        </div>
                        <div class="pm-cpt-col-pack">
                            <span class="pm-cpt-pack-text"><i class="bi bi-box-seam text-danger me-1"></i> Custom Crate + Scratch Wrap</span>
                        </div>
                        <div class="pm-cpt-col-action">
                            <a <?= $phonehtml ?> class="pm-cpt-btn" title="Book Bike Transport">
                                <span>Book</span> <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Row 5: Car Transportation -->
                    <div class="pm-cpt-row">
                        <div class="pm-cpt-col-service">
                            <div class="pm-cpt-icon" aria-hidden="true"><i class="bi bi-car-front-fill"></i></div>
                            <div>
                                <span class="pm-cpt-title">Car Transportation</span>
                            </div>
                        </div>
                        <div class="pm-cpt-col-price">
                            <span class="pm-cpt-price-local">₹3,000 – ₹6,000</span>
                        </div>
                        <div class="pm-cpt-col-price">
                            <span class="pm-cpt-price-domestic">₹8,000 – ₹18,500</span>
                        </div>
                        <div class="pm-cpt-col-pack">
                            <span class="pm-cpt-pack-text"><i class="bi bi-shield-check text-success me-1"></i> Enclosed Carrier + Locks</span>
                        </div>
                        <div class="pm-cpt-col-action">
                            <a <?= $phonehtml ?> class="pm-cpt-btn" title="Book Car Transport">
                                <span>Book</span> <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Note Strip -->
            <div class="pm-pricing-note-strip">
                <div class="d-flex align-items-center gap-2 text-muted small">
                    <i class="bi bi-info-circle-fill text-danger"></i>
                    <span>Exact moving quote depends on floor level, elevator availability, packing tier, and travel distance.</span>
                </div>
                <span class="badge bg-light text-dark border small px-3 py-1 rounded-pill">
                    <i class="bi bi-shield-check text-success me-1"></i> Free In-Home Survey Included
                </span>
            </div>
        </div>

        <!-- 3. Local Service Area & Live Location Map Section (Col-6 / Col-6) -->
        <div class="pm-cd-card">
            <div class="row align-items-stretch g-4">
                <!-- Col-6: Operational Coverage Details -->
                <div class="col-lg-6 d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center justify-content-between gap-2 mb-2">
                            <span class="section-badge mb-0">
                                <i class="bi bi-geo-alt-fill"></i> Local Service Coverage
                            </span>
                            <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-1 rounded-pill small">
                                <i class="bi bi-broadcast me-1"></i> 100% <?= esc($cityName) ?> Covered
                            </span>
                        </div>
                        <h3 class="pm-cd-subtitle mb-2">Comprehensive Moving Coverage Across <?= esc($cityName) ?></h3>
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
                                    <h4 class="pm-map-feat-title">Prompt Local Fleet Dispatch</h4>
                                    <p class="pm-map-feat-desc">Dedicated closed-body moving trucks stationed within <?= esc($cityName) ?> for rapid on-time arrival.</p>
                                </div>
                            </div>

                            <div class="pm-map-feature-item">
                                <div class="pm-map-feat-icon" aria-hidden="true">
                                    <i class="bi bi-pin-map-fill"></i>
                                </div>
                                <div>
                                    <h4 class="pm-map-feat-title">Doorstep Pickup & Delivery</h4>
                                    <p class="pm-map-feat-desc">Complete multi-layer packing, elevator handling, and doorstep unboxing in all <?= esc($cityName) ?> zones.</p>
                                </div>
                            </div>

                            <div class="pm-map-feature-item">
                                <div class="pm-map-feat-icon" aria-hidden="true">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <div>
                                    <h4 class="pm-map-feat-title">100% Transit Insured Movement</h4>
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

        <!-- 4. Relocation Process Journey (Different from Home Hexagons) -->
        <div class="pm-cd-card">
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-2">
                <div>
                    <span class="section-badge mb-1">
                        <i class="bi bi-arrow-repeat"></i> How It Works
                    </span>
                    <h3 class="pm-cd-subtitle mb-0">Seamless Relocation Process in <?= esc($cityName) ?></h3>
                </div>
                <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill small">
                    <i class="bi bi-shield-check me-1"></i> 4-Step Verified Workflow
                </span>
            </div>
            <p class="text-muted small mb-0">From instant virtual survey to final unboxing at your destination — here is how our hassle-free relocation works in <?= esc($cityName) ?>.</p>

            <div class="pm-process-journey-grid">
                <!-- Step 01 -->
                <div class="pm-journey-card">
                    <div class="pm-journey-header">
                        <div class="pm-journey-title-group">
                            <span class="pm-journey-num">01</span>
                            <h4 class="pm-journey-title">Instant Booking & Survey</h4>
                        </div>
                        <div class="pm-journey-icon-wrap" aria-hidden="true">
                            <i class="bi bi-clipboard2-check-fill"></i>
                        </div>
                    </div>
                    <p class="pm-journey-desc">Share your move requirements. Our team conducts a free video or in-home survey and shares an all-inclusive upfront quote.</p>
                    <div class="pm-journey-footer">
                        <span class="pm-journey-tag">
                            <i class="bi bi-check2-circle text-success"></i> Fixed Price Guarantee
                        </span>
                    </div>
                </div>

                <!-- Step 02 -->
                <div class="pm-journey-card">
                    <div class="pm-journey-header">
                        <div class="pm-journey-title-group">
                            <span class="pm-journey-num">02</span>
                            <h4 class="pm-journey-title">Multi-Layer Smart Packing</h4>
                        </div>
                        <div class="pm-journey-icon-wrap" aria-hidden="true">
                            <i class="bi bi-box-seam-fill"></i>
                        </div>
                    </div>
                    <p class="pm-journey-desc">Certified packers arrive on-time with high-density bubble roll, corrugated cartons, and anti-static wrapping.</p>
                    <div class="pm-journey-footer">
                        <span class="pm-journey-tag">
                            <i class="bi bi-check2-circle text-success"></i> 5-Layer Materials
                        </span>
                    </div>
                </div>

                <!-- Step 03 -->
                <div class="pm-journey-card">
                    <div class="pm-journey-header">
                        <div class="pm-journey-title-group">
                            <span class="pm-journey-num">03</span>
                            <h4 class="pm-journey-title">GPS-Tracked Safe Transit</h4>
                        </div>
                        <div class="pm-journey-icon-wrap" aria-hidden="true">
                            <i class="bi bi-truck-front-fill"></i>
                        </div>
                    </div>
                    <p class="pm-journey-desc">Goods are transported in weather-proof sealed container carriers with live GPS tracking updates directly on your phone.</p>
                    <div class="pm-journey-footer">
                        <span class="pm-journey-tag">
                            <i class="bi bi-check2-circle text-success"></i> 100% Insured Fleet
                        </span>
                    </div>
                </div>

                <!-- Step 04 -->
                <div class="pm-journey-card">
                    <div class="pm-journey-header">
                        <div class="pm-journey-title-group">
                            <span class="pm-journey-num">04</span>
                            <h4 class="pm-journey-title">Doorstep Setup & Handover</h4>
                        </div>
                        <div class="pm-journey-icon-wrap" aria-hidden="true">
                            <i class="bi bi-house-check-fill"></i>
                        </div>
                    </div>
                    <p class="pm-journey-desc">Safe delivery at your new home, room-by-room positioning, heavy furniture reassembly, and unboxing support.</p>
                    <div class="pm-journey-footer">
                        <span class="pm-journey-tag">
                            <i class="bi bi-check2-circle text-success"></i> Zero Stress Settle
                        </span>
                    </div>
                </div>
            </div>

            <!-- Bottom Quality Assurance Bar -->
            <div class="pm-process-assurance-bar">
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

        <!-- 4. Testimonials (Col-5) & FAQs (Col-7) -->
        <div class="row g-4 mb-4">
            <!-- Left: Customer Testimonials (col-lg-5) -->
            <div class="col-lg-5 col-12">
                <div class="pm-cd-card h-100 mb-0 d-flex flex-column">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div>
                            <span class="section-badge mb-1">
                                <i class="bi bi-chat-quote-fill"></i> Customer Stories
                            </span>
                            <h3 class="pm-cd-subtitle mb-0">What <?= esc($cityName) ?> Clients Say</h3>
                        </div>
                        <!-- Up / Down Scroll Controls -->
                        <div class="pm-testi-nav-arrows">
                            <button type="button" class="pm-testi-arrow-btn" id="pmTestiPrev" aria-label="Previous Testimonial" title="Scroll Up">
                                <i class="bi bi-chevron-up"></i>
                            </button>
                            <button type="button" class="pm-testi-arrow-btn" id="pmTestiNext" aria-label="Next Testimonial" title="Scroll Down">
                                <i class="bi bi-chevron-down"></i>
                            </button>
                        </div>
                    </div>
                    <p class="text-muted small mb-3">Verified shifting experiences from local residents and businesses in <?= esc($cityName) ?>.</p>

                    <!-- Rating Summary -->
                    <div class="pm-city-rating-summary mb-3">
                        <div class="d-flex align-items-center gap-3">
                            <div class="pm-rating-score-box">
                                <span class="pm-rating-score">4.9</span>
                                <div class="pm-rating-stars" role="img" aria-label="Rated 4.9 out of 5 stars">
                                    <i class="bi bi-star-fill" aria-hidden="true"></i>
                                    <i class="bi bi-star-fill" aria-hidden="true"></i>
                                    <i class="bi bi-star-fill" aria-hidden="true"></i>
                                    <i class="bi bi-star-fill" aria-hidden="true"></i>
                                    <i class="bi bi-star-fill" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div>
                                <div class="fw-bold text-dark small">Verified Client Score</div>
                                <div class="text-muted small">Based on 1,450+ moves in <?= esc($cityName) ?> & NCR</div>
                            </div>
                        </div>
                    </div>

                    <!-- Vertical Scroll Testimonial Window (One Visible at a Time) -->
                    <div class="pm-testi-scroll-viewport" id="pmTestiScroll">
                        <!-- Review 1 -->
                        <div class="pm-city-review-card pm-testi-snap-item">
                            <div class="pm-city-review-header">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="pm-review-avatar">RM</div>
                                    <div>
                                        <h4 class="pm-review-author">Rohit Malhotra</h4>
                                        <span class="pm-review-loc"><i class="bi bi-geo-alt-fill text-danger"></i> <?= esc($cityName) ?> Resident</span>
                                    </div>
                                </div>
                                <span class="pm-review-badge"><i class="bi bi-patch-check-fill"></i> Verified Move</span>
                            </div>
                            <p class="pm-review-text">"Relocated our 3 BHK within <?= esc($cityName) ?> seamlessly. The team was punctual, handled delicate glassware with 5-layer bubble packing, and reassembled all furniture before evening. Zero damages!"</p>
                            <div class="pm-review-footer">
                                <span class="text-muted small"><i class="bi bi-shield-check text-success me-1"></i> Household Relocation</span>
                                <span class="pm-review-stars small"><i class="bi bi-star-fill" aria-hidden="true"></i> 5.0</span>
                            </div>
                        </div>

                        <!-- Review 2 -->
                        <div class="pm-city-review-card pm-testi-snap-item">
                            <div class="pm-city-review-header">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="pm-review-avatar">SA</div>
                                    <div>
                                        <h4 class="pm-review-author">Sunita Aggarwal</h4>
                                        <span class="pm-review-loc"><i class="bi bi-geo-alt-fill text-danger"></i> Corporate Relocation</span>
                                    </div>
                                </div>
                                <span class="pm-review-badge"><i class="bi bi-patch-check-fill"></i> Verified Move</span>
                            </div>
                            <p class="pm-review-text">"Relocated our office electronics and workstations without a single hour of business downtime. Very polite and disciplined crew. Highly recommended in <?= esc($cityName) ?>!"</p>
                            <div class="pm-review-footer">
                                <span class="text-muted small"><i class="bi bi-shield-check text-success me-1"></i> Office Corporate Move</span>
                                <span class="pm-review-stars small"><i class="bi bi-star-fill" aria-hidden="true"></i> 5.0</span>
                            </div>
                        </div>

                        <!-- Review 3 -->
                        <div class="pm-city-review-card pm-testi-snap-item">
                            <div class="pm-city-review-header">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="pm-review-avatar">VM</div>
                                    <div>
                                        <h4 class="pm-review-author">Vikram Mehra</h4>
                                        <span class="pm-review-loc"><i class="bi bi-geo-alt-fill text-danger"></i> Vehicle & Bike Shift</span>
                                    </div>
                                </div>
                                <span class="pm-review-badge"><i class="bi bi-patch-check-fill"></i> Verified Move</span>
                            </div>
                            <p class="pm-review-text">"Transported my Royal Enfield and sedan from <?= esc($cityName) ?>. Heavy-duty wheel stoppers and custom wooden crate kept both scratchless throughout the journey. Highly recommended!"</p>
                            <div class="pm-review-footer">
                                <span class="text-muted small"><i class="bi bi-shield-check text-success me-1"></i> Vehicle Transport</span>
                                <span class="pm-review-stars small"><i class="bi bi-star-fill" aria-hidden="true"></i> 5.0</span>
                            </div>
                        </div>

                        <!-- Review 4 -->
                        <div class="pm-city-review-card pm-testi-snap-item">
                            <div class="pm-city-review-header">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="pm-review-avatar">PS</div>
                                    <div>
                                        <h4 class="pm-review-author">Pooja Sharma</h4>
                                        <span class="pm-review-loc"><i class="bi bi-geo-alt-fill text-danger"></i> Interstate Shifting</span>
                                    </div>
                                </div>
                                <span class="pm-review-badge"><i class="bi bi-patch-check-fill"></i> Verified Move</span>
                            </div>
                            <p class="pm-review-text">"Shifted our villa goods from <?= esc($cityName) ?> to another state. Their live GPS container tracking gave us peace of mind. Polite supervisor and flawless unpacking assistance at our destination."</p>
                            <div class="pm-review-footer">
                                <span class="text-muted small"><i class="bi bi-shield-check text-success me-1"></i> Domestic Relocation</span>
                                <span class="pm-review-stars small"><i class="bi bi-star-fill" aria-hidden="true"></i> 5.0</span>
                            </div>
                        </div>
                    </div>

                    <!-- Scroll Hint and Counter Bar -->
                    <div class="d-flex align-items-center justify-content-between mt-2 pt-2 border-top border-light">
                        <span class="text-muted small">
                            <i class="bi bi-arrow-down-up text-danger me-1"></i> Scroll up/down to read more
                        </span>
                        <span class="badge bg-light text-muted border small px-2 py-1 rounded-pill" id="pmTestiCounter">
                            1 of 4 Stories
                        </span>
                    </div>
                </div>
            </div>

            <!-- Right: Frequently Asked Questions (col-lg-7) -->
            <div class="col-lg-7 col-12">
                <div class="pm-cd-card h-100 mb-0">
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mb-3">
                        <div>
                            <span class="section-badge mb-1">
                                <i class="bi bi-question-circle-fill"></i> Got Questions?
                            </span>
                            <h3 class="pm-cd-subtitle mb-0">FAQs for <?= esc($cityName) ?> Shifting</h3>
                        </div>
                        <span class="badge bg-light text-dark border px-3 py-2 rounded-pill small">
                            <i class="bi bi-patch-question-fill text-danger me-1"></i> Common Doubts
                        </span>
                    </div>
                    <p class="text-muted small mb-3">Answers to frequently asked questions about moving costs, insurance, and booking in <?= esc($cityName) ?>.</p>

                    <!-- City FAQ Accordion -->
                    <div class="accordion pm-cd-faq-accordion" id="cityFaqAccordion">
                        <!-- FAQ 1 -->
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="cfaqHead1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#cfaq1" aria-expanded="true" aria-controls="cfaq1">
                                    <span class="pm-cd-faq-num">01</span>
                                    <span>How are moving charges calculated in <?= esc($cityName) ?>?</span>
                                </button>
                            </h4>
                            <div id="cfaq1" class="accordion-collapse collapse show" aria-labelledby="cfaqHead1" data-bs-parent="#cityFaqAccordion">
                                <div class="accordion-body">
                                    Moving costs depend on total volume of household items, packaging tier (standard 3-layer vs premium 5-layer), vehicle carrier size, elevator availability/floor levels, and total transit distance. We provide a guaranteed, written quote with zero hidden charges after a quick survey.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="cfaqHead2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cfaq2" aria-expanded="false" aria-controls="cfaq2">
                                    <span class="pm-cd-faq-num">02</span>
                                    <span>Do you provide transit insurance for household goods?</span>
                                </button>
                            </h4>
                            <div id="cfaq2" class="accordion-collapse collapse" aria-labelledby="cfaqHead2" data-bs-parent="#cityFaqAccordion">
                                <div class="accordion-body">
                                    Yes, we provide 100% comprehensive all-India transit insurance covering unforeseen physical loss, road mishaps, or accidental transit damage. In the rare event of a claim, our dedicated claims desk facilitates swift documentation and hassle-free settlement.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="cfaqHead3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cfaq3" aria-expanded="false" aria-controls="cfaq3">
                                    <span class="pm-cd-faq-num">03</span>
                                    <span>How many days in advance should I book shifting in <?= esc($cityName) ?>?</span>
                                </button>
                            </h4>
                            <div id="cfaq3" class="accordion-collapse collapse" aria-labelledby="cfaqHead3" data-bs-parent="#cityFaqAccordion">
                                <div class="accordion-body">
                                    For local within-city shifting in <?= esc($cityName) ?>, booking 24 to 48 hours in advance is adequate. For intercity domestic moves, booking 3 to 5 days ahead guarantees dedicated container trailer reservation and your preferred loading time slot.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="cfaqHead4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cfaq4" aria-expanded="false" aria-controls="cfaq4">
                                    <span class="pm-cd-faq-num">04</span>
                                    <span>What packing materials are used for fragile electronics & furniture?</span>
                                </button>
                            </h4>
                            <div id="cfaq4" class="accordion-collapse collapse" aria-labelledby="cfaqHead4" data-bs-parent="#cityFaqAccordion">
                                <div class="accordion-body">
                                    We utilize heavy-duty 5-layer certified bubble wrap, corrugated sheets, edge guards, and specialized wooden crating for large LED TVs, glass dining tables, and delicate artworks. Every fragile box is marked with bright fragile tags and loaded with hydraulic cushioning.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 5 -->
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="cfaqHead5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cfaq5" aria-expanded="false" aria-controls="cfaq5">
                                    <span class="pm-cd-faq-num">05</span>
                                    <span>Can you transport my car or two-wheeler safely?</span>
                                </button>
                            </h4>
                            <div id="cfaq5" class="accordion-collapse collapse" aria-labelledby="cfaqHead5" data-bs-parent="#cityFaqAccordion">
                                <div class="accordion-body">
                                    Yes! We operate specialized enclosed car carrier trailers and custom bike crating systems. Every vehicle undergoes a detailed pre-loading inspection report (with photos and odometer reading) and is securely strapped with wheel stoppers during transit.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 5. Full-Width Direct Action Banner (Redesigned) -->
        <div class="pm-cd-action-banner">
            <div class="pm-cta-content-wrap">
                <div class="pm-cta-icon-avatar" aria-hidden="true">
                    <i class="bi bi-headset"></i>
                </div>
                <div>
                    <div class="pm-cta-live-pill">
                        <span class="pm-live-dot"></span> 24/7 Relocation Support
                    </div>
                    <h3 class="pm-cta-heading">Planning to Relocate in <span class="text-danger"><?= esc($cityName) ?></span>?</h3>
                    <p class="pm-cta-text">Speak with our certified relocation coordinator for instant transparent pricing, preferred date reservation, and a free survey.</p>
                    <div class="pm-cta-trust-tags">
                        <span><i class="bi bi-lightning-charge-fill text-warning"></i> 15-Min Fast Callback</span>
                        <span><i class="bi bi-shield-check text-success"></i> Fixed Price Guarantee</span>
                        <span><i class="bi bi-check-circle-fill text-danger"></i> Zero Hidden Charges</span>
                    </div>
                </div>
            </div>
            <div class="pm-cta-actions-wrap">
                <a <?= $phonehtml ?> class="pm-cta-btn-call" title="Call Now" aria-label="Call Now">
                    <i class="bi bi-telephone-fill" aria-hidden="true"></i>
                    <span class="d-none d-sm-inline"><?=phone ?></span>
                    <span class="d-sm-none">Call Now</span>
                </a>
                <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener noreferrer" class="pm-cta-btn-whatsapp" title="Chat on WhatsApp" aria-label="Chat on WhatsApp">
                    <i class="bi bi-whatsapp" aria-hidden="true"></i>
                    <span class="d-none d-sm-inline">Chat on WhatsApp</span>
                    <span class="d-sm-none">WhatsApp</span>
                </a>
            </div>
        </div>

        <!-- 5. Other Nearby Cities Navigation (Full Width) -->
        <?php if (!empty($nearbyCities)): ?>
            <div class="pm-cd-card mb-0">
                <h4 class="pm-cd-subtitle">
                    <i class="bi bi-geo-alt-fill text-danger me-2"></i>Other Nearby Cities in <?= esc($stateName) ?>
                </h4>
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    var viewport = document.getElementById('pmTestiScroll');
    var btnPrev = document.getElementById('pmTestiPrev');
    var btnNext = document.getElementById('pmTestiNext');
    var counter = document.getElementById('pmTestiCounter');
    if (!viewport) return;

    var items = viewport.querySelectorAll('.pm-testi-snap-item');
    var total = items.length;

    function updateCounter() {
        if (!counter || total === 0) return;
        var scrollTop = viewport.scrollTop;
        var itemHeight = items[0] ? (items[0].offsetHeight + 14) : 234;
        var currentIdx = Math.min(total, Math.max(1, Math.round(scrollTop / itemHeight) + 1));
        counter.textContent = currentIdx + ' of ' + total + ' Stories';
    }

    viewport.addEventListener('scroll', updateCounter, { passive: true });

    if (btnPrev) {
        btnPrev.addEventListener('click', function() {
            var itemHeight = items[0] ? (items[0].offsetHeight + 14) : 234;
            viewport.scrollBy({ top: -itemHeight, behavior: 'smooth' });
        });
    }

    if (btnNext) {
        btnNext.addEventListener('click', function() {
            var itemHeight = items[0] ? (items[0].offsetHeight + 14) : 234;
            viewport.scrollBy({ top: itemHeight, behavior: 'smooth' });
        });
    }
});
</script>
