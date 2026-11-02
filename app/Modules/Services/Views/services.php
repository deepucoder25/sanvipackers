<?= view('Modules\About\Views\dynamic_breadcrumb', [
    'title'       => 'Our Relocation Services',
    'subtitle'    => 'Reliable door-to-door home shifting, office relocation, car & bike transit, and secure warehouse storage.',
    'breadcrumbs' => [
        ['title' => 'Home', 'url' => site_url('/')],
        ['title' => 'Services'],
    ],
]) ?>

<div class="pm-srv-page-wrap py-5">
    <div class="container">

        <!-- Top Section Header -->
        <div class="text-center mb-5">
            <span class="badge px-3 py-2 rounded-pill text-uppercase mb-2 pm-srv-hero-badge">
                <i class="bi bi-box-seam-fill me-1"></i> Verified Relocation Solutions
            </span>
            <h2 class="display-6 fw-bold text-dark mb-3 pm-srv-hero-title">
                All-in-One <span class="pm-text-red">Packers &amp; Movers</span> Services
            </h2>
            <p class="lead text-muted mx-auto pm-srv-hero-sub">
                From 5-layer customized packing to enclosed vehicle trailers and climate-controlled storage, explore our complete suite of relocation services tailored for total peace of mind.
            </p>
            <div class="d-inline-flex align-items-center justify-content-center flex-wrap gap-2 mt-3">
                <span class="pm-srv-pill-stat"><i class="bi bi-patch-check-fill text-danger me-1"></i> ISO 9001:2015 Certified</span>
                <span class="pm-srv-pill-stat"><i class="bi bi-shield-fill-check text-warning me-1"></i> 100% Insured Transit</span>
                <span class="pm-srv-pill-stat"><i class="bi bi-geo-alt-fill text-danger me-1"></i> 500+ Indian Cities</span>
                <span class="pm-srv-pill-stat"><i class="bi bi-clock-history text-warning me-1"></i> Zero Damage Guarantee</span>
            </div>
        </div>

        <!-- 6 Main Services Grid (3 Columns on Desktop, 2 on Tablet, 1 on Mobile) -->
        <div class="row g-4 pm-srv-cards-grid">
            <?php foreach ($services as $idx => $srv): ?>
                <div class="col-12 col-md-6 col-lg-4 d-flex">
                    <div class="card w-100 border-0 rounded-4 pm-srv-bento-card position-relative overflow-hidden">
                        <!-- Top Accent Line -->
                        <div class="pm-srv-card-topbar"></div>

                        <div class="card-body p-4 d-flex flex-column">
                            <!-- Card Header: Step Index & Tag -->
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <span class="pm-srv-step-pill">0<?= $idx + 1 ?></span>
                                <span class="pm-srv-tag-pill">
                                    <i class="bi <?= esc($srv['tagIcon'] ?? 'bi-patch-check-fill') ?> me-1"></i>
                                    <?= esc($srv['tag'] ?? 'Verified') ?>
                                </span>
                            </div>

                            <!-- Hero Icon Wrapper with Glow -->
                            <div class="pm-srv-icon-box mx-auto mb-3 d-flex align-items-center justify-content-center">
                                <i class="bi <?= esc($srv['icon']) ?>"></i>
                            </div>

                            <!-- Service Title -->
                            <h3 class="pm-srv-title fw-bold text-center mb-2">
                                <a href="<?= site_url('services/' . $srv['slug']) ?>" class="stretched-link-title text-decoration-none">
                                    <?= esc($srv['title']) ?>
                                </a>
                            </h3>

                            <!-- Short Description -->
                            <p class="pm-srv-desc text-center text-muted mb-3">
                                <?= esc($srv['desc']) ?>
                            </p>

                            <!-- Feature Chips / Inclusion List -->
                            <div class="pm-srv-feature-list mt-auto mb-4">
                                <?php foreach ($srv['features'] as $f): ?>
                                    <div class="pm-srv-feature-row d-flex align-items-start gap-2 mb-2">
                                        <i class="bi bi-check-circle-fill text-danger flex-shrink-0 mt-1"></i>
                                        <span><?= esc($f) ?></span>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                            <!-- Action Buttons Group -->
                            <div class="pm-srv-actions-row pt-3 border-top mt-auto d-flex gap-2">
                                <a href="<?= site_url('services/' . $srv['slug']) ?>" class="btn pm-srv-btn-details flex-grow-1 rounded-pill fw-bold">
                                    <span>Details</span>
                                    <span class="pm-details-arrow-icon"><i class="bi bi-arrow-right"></i></span>
                                </a>
                                <a href="<?= site_url('contact') ?>" class="btn pm-srv-btn-book flex-grow-1 rounded-pill fw-semibold text-white">
                                    <i class="bi bi-calculator-fill me-1"></i>
                                    <span>Get Quote</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Section 2: 4 Pillars of Moving Assurance -->
        <div class="pm-srv-pillars-card mt-5 p-4 p-md-5 rounded-4 bg-white shadow-sm border">
            <div class="text-center mb-4">
                <span class="badge px-3 py-2 rounded-pill text-uppercase mb-2 pm-srv-hero-badge">
                    <i class="bi bi-gem me-1"></i> The Sanvi Advantage
                </span>
                <h2 class="h2 fw-bold text-dark mb-2">Why Customers Trust Our Relocation Network</h2>
                <p class="text-muted mx-auto mb-0 pm-srv-pillars-sub">
                    Every move is executed with standardized operating procedures, cutting-edge packaging materials, and rigorous safety audits.
                </p>
            </div>

            <div class="row g-3 g-xl-4 mt-2">
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="pm-pillar-box p-3 rounded-4 h-100 d-flex flex-column text-start">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="pm-pillar-icon flex-shrink-0">
                                <i class="bi bi-box-seam-fill"></i>
                            </div>
                            <h3 class="h6 fw-bold mb-0 text-dark">5-Layer Bubble Packing</h3>
                        </div>
                        <p class="small text-muted mb-0">High-grade double-ply corrugated boxes, stretch wrap, and foam edge protectors for fragile items.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="pm-pillar-box p-3 rounded-4 h-100 d-flex flex-column text-start">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="pm-pillar-icon flex-shrink-0">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <h3 class="h6 fw-bold mb-0 text-dark">Live GPS Highway Fleet</h3>
                        </div>
                        <p class="small text-muted mb-0">Dedicated, all-weather sealed container trucks with real-time GPS location sharing.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="pm-pillar-box p-3 rounded-4 h-100 d-flex flex-column text-start">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="pm-pillar-icon flex-shrink-0">
                                <i class="bi bi-shield-fill-check"></i>
                            </div>
                            <h3 class="h6 fw-bold mb-0 text-dark">100% Transit Insurance</h3>
                        </div>
                        <p class="small text-muted mb-0">Comprehensive all-risk insurance coverage with hassle-free fast-track documentation assistance.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="pm-pillar-box p-3 rounded-4 h-100 d-flex flex-column text-start">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="pm-pillar-icon flex-shrink-0">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <h3 class="h6 fw-bold mb-0 text-dark">Police Verified Crew</h3>
                        </div>
                        <p class="small text-muted mb-0">Courteous, uniformed, and background-checked ground staff trained in heavy furniture lifting.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Assistance & Booking Strip -->
        <div class="mt-5 p-4 p-md-5 rounded-4 shadow-sm pm-srv-bottom-cta d-flex flex-column flex-lg-row align-items-center justify-content-between gap-4">
            <div class="d-flex align-items-center gap-3 text-start">
                <div class="pm-srv-cta-icon-box rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
                    <i class="bi bi-headset fs-2 text-danger"></i>
                </div>
                <div>
                    <h2 class="h4 fw-bold text-dark mb-1">Planning an Intercity or Local Move?</h2>
                    <p class="text-muted mb-0">
                        Speak directly with our moving coordinator or request custom volume-based pricing with zero hidden fees.
                    </p>
                </div>
            </div>
            <div class="d-flex align-items-center gap-2 flex-nowrap flex-shrink-0 pm-srv-cta-buttons">
                <a href="<?=$whatsapphtml ?>?text=<?= urlencode('Hello Sanvi Packers, I want a free quote for relocation service.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-success rounded-pill px-3 py-2 fw-bold d-inline-flex align-items-center gap-2 text-nowrap">
                    <i class="bi bi-whatsapp"></i>
                    <span>WhatsApp Quote</span>
                </a>
                <a <?= $phonehtml ?> class="btn btn-outline-dark rounded-pill px-3 py-2 fw-bold d-inline-flex align-items-center gap-2 text-nowrap">
                    <i class="bi bi-telephone-fill text-danger"></i>
                    <span><?= $phone ?></span>
                </a>
            </div>
        </div>

    </div>
</div>
