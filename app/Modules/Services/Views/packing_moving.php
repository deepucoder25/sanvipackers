<?php
$allServicesList = $allServices ?? \Modules\Services\Controllers\Services::getServicesList();
// Filter out current service for the "Other Services" section
$otherServices = array_filter($allServicesList, fn($s) => ($s['slug'] ?? '') !== 'packing-moving');
?>

<!-- Dynamic Breadcrumb -->
<?= view('Modules\About\Views\dynamic_breadcrumb', [
    'title'       => 'Packing & Moving Services',
    'subtitle'    => 'Heavy duty double-wall corrugated cartons, air bubble rolls, foam corners, stretch wrap, and edge protectors for total safety.',
    'breadcrumbs' => [
        ['title' => 'Home', 'url' => site_url('/')],
        ['title' => 'Services', 'url' => site_url('services')],
        ['title' => 'Packing & Moving'],
    ],
]) ?>

<div class="pm-srv-page-wrapper">

    <!-- 1. HERO SECTION -->
    <section class="pm-srv-hero-sec py-5">
        <div class="container">
            <div class="row align-items-center">
                
                <div class="col-12">
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill pm-srv-pill-badge mb-3">
                        <i class="bi bi-box-seam-fill text-danger"></i>
                        <span class="small fw-bold">Multi-Layer Protective Packaging Standards</span>
                    </div>

                    <h1 class="display-5 fw-bold text-dark mb-3 pm-srv-hero-title">
                        Professional <span class="pm-text-red">Packing &amp; Moving</span> Services
                    </h1>

                    <p class="lead text-muted mb-4 pm-srv-hero-desc">
                        Over 90% of relocation damages happen because of substandard or lightweight packaging. At <strong><?= $company3 ?></strong>, we engineer packaging as an exact science. Our specialized crew utilizes heavy-duty 5-layer corrugated cartons, thick air bubble wrap, high-density foam corners, waterproof stretch film, and custom wooden crates to safeguard your assets against vibrations, impacts, and dust.
                    </p>

                    <!-- Key Advantage Chips -->
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        <span class="pm-hero-chip"><i class="bi bi-layers-fill text-danger me-1"></i> 5-Layer Corrugated Cartons</span>
                        <span class="pm-hero-chip"><i class="bi bi-tags-fill text-warning me-1"></i> Color-Coded Room Tagging</span>
                        <span class="pm-hero-chip"><i class="bi bi-water text-primary me-1"></i> Waterproof Stretch Wrapping</span>
                        <span class="pm-hero-chip"><i class="bi bi-shield-check text-success me-1"></i> Zero Damage Guarantee</span>
                    </div>

                    <!-- Direct Action Buttons in One Row -->
                    <div class="d-flex flex-wrap align-items-center gap-2 pt-2">
                        <button type="button" class="btn pm-srv-btn-primary rounded-pill px-3 py-2 fw-bold text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">
                            <i class="bi bi-calculator-fill me-1"></i> Get Packing Cost Estimate
                        </button>
                        <a <?= $whatsapphtml ?>?text=<?= urlencode('Hello Sanvi Packers, I need packing and moving details.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-success rounded-pill px-3 py-2 fw-bold d-inline-flex align-items-center gap-2 text-nowrap">
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
    </section>

    <!-- 2. TRUST STATS STRIP -->
    <section class="pm-srv-stats-sec py-4 bg-white border-top border-bottom">
        <div class="container">
            <div class="row g-3 text-center align-items-center">
                <div class="col-6 col-lg-3">
                    <div class="pm-stat-box p-3 rounded-4">
                        <div class="h2 fw-bold text-dark mb-0">5-Layer</div>
                        <div class="small text-muted fw-semibold">Heavy Duty Multi-Ply Kraft</div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="pm-stat-box p-3 rounded-4">
                        <div class="h2 fw-bold text-danger mb-0">100%</div>
                        <div class="small text-muted fw-semibold">Virgin Packaging Materials</div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="pm-stat-box p-3 rounded-4">
                        <div class="h2 fw-bold text-dark mb-0">50+</div>
                        <div class="small text-muted fw-semibold">Packing Supply Variants</div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="pm-stat-box p-3 rounded-4">
                        <div class="h2 fw-bold text-danger mb-0">0%</div>
                        <div class="small text-muted fw-semibold">Transit Breakage Metric</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. SCOPE & INCLUSIONS (FULL-WIDTH 3-COLUMN BENTO GRID) -->
    <section class="py-5 pm-srv-inclusions-sec">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge px-3 py-2 rounded-pill text-uppercase pm-srv-hero-badge mb-2">
                    <i class="bi bi-layers-fill me-1"></i> Material Standards
                </span>
                <h2 class="display-6 fw-bold text-dark mb-2">
                    Engineered Packaging <span class="pm-text-red">Materials &amp; Standards</span>
                </h2>
                <p class="text-muted mx-auto mb-0 pm-srv-section-sub">
                    We never reuse torn old boxes. Every consignment is fortified using premium, heavy-bursting-strength cartons and shock-absorbing protective layers.
                </p>
            </div>

            <!-- 6 Feature Cards in 3 Columns (Icon & Title in One Row) -->
            <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
                <div class="col">
                    <div class="card h-100 border-0 rounded-4 shadow-sm p-4 bg-white pm-srv-card hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="pm-srv-card-icon flex-shrink-0">
                                <i class="bi bi-box-seam-fill"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-0">5-Layer Virgin Kraft Cartons</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            High-bursting-test double-wall corrugated cartons capable of stacking without crushing or buckling under weight.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 rounded-4 shadow-sm p-4 bg-white pm-srv-card hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="pm-srv-card-icon flex-shrink-0">
                                <i class="bi bi-shield-fill-check"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-0">Air Bubble Cushioning Rolls</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Thick, non-abrasive air bubble rolls applied in multiple layers around delicate crockery, glassware, crystal items, and home decor.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 rounded-4 shadow-sm p-4 bg-white pm-srv-card hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="pm-srv-card-icon flex-shrink-0">
                                <i class="bi bi-tags-fill"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-0">Color-Coded Box Labeling</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Every carton tagged by room (Master Bed, Kitchen, Living, Kids) with sequential numbering matching the client's master packing manifest.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 rounded-4 shadow-sm p-4 bg-white pm-srv-card hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="pm-srv-card-icon flex-shrink-0">
                                <i class="bi bi-water"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-0">Industrial Stretch Wrapping</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Clear and black moisture-resistant stretch film tightly wrapped over sofas, mattresses, and fabric headboards to repel dirt and moisture.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 rounded-4 shadow-sm p-4 bg-white pm-srv-card hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="pm-srv-card-icon flex-shrink-0">
                                <i class="bi bi-hammer"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-0">Custom-Built Wooden Crates</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            On-site carpentry constructing treated pine wooden frameworks for 65+ inch OLED TVs, marble table slabs, and costly antiques.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 rounded-4 shadow-sm p-4 bg-white pm-srv-card hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="pm-srv-card-icon flex-shrink-0">
                                <i class="bi bi-shield-lock-fill"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-0">Tamper-Evident Tape Sealing</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Reinforced 50mm BOPP adhesive tapes applied in cross-patterns with tamper-resistant security seals on every carton top and bottom.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. STEP-BY-STEP WORKFLOW (FULL-WIDTH 4-COLUMN TIMELINE) -->
    <section class="py-5 bg-white border-top border-bottom pm-srv-workflow-sec">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge px-3 py-2 rounded-pill text-uppercase pm-srv-hero-badge mb-2">
                    <i class="bi bi-arrow-repeat me-1"></i> Packing Stages
                </span>
                <h2 class="display-6 fw-bold text-dark mb-2">Our 4-Stage Packing Flow</h2>
                <p class="text-muted mx-auto mb-0 pm-srv-section-sub-650">
                    Every item is sorted, cushioned, boxed, and securely sealed for maximum impact resistance.
                </p>
            </div>

            <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-4">
                <div class="col">
                    <div class="p-4 rounded-4 h-100 bg-light border pm-process-step-box position-relative text-start">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="pm-step-num-badge flex-shrink-0">1</div>
                            <h3 class="h6 fw-bold text-dark mb-0">Sorting &amp; Segregation</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Articles classified by room, material fragility, weight, and volume dimensions.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="p-4 rounded-4 h-100 bg-light border pm-process-step-box position-relative text-start">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="pm-step-num-badge flex-shrink-0">2</div>
                            <h3 class="h6 fw-bold text-dark mb-0">Primary Cushioning</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Air bubble wrap rolls, foam corners, and paper padding wrapped securely.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="p-4 rounded-4 h-100 bg-light border pm-process-step-box position-relative text-start">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="pm-step-num-badge flex-shrink-0">3</div>
                            <h3 class="h6 fw-bold text-dark mb-0">5-Ply Boxing</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Stowed tightly into heavy corrugated cartons with void-fill foam beans.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="p-4 rounded-4 h-100 bg-light border pm-process-step-box position-relative text-start">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="pm-step-num-badge flex-shrink-0">4</div>
                            <h3 class="h6 fw-bold text-dark mb-0">Cross-Taping &amp; Labels</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Cross-reinforced taping, fragile warning indicators, and room color tags.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. PACKING TIERS (4 TIERS) -->
    <section class="py-5 pm-srv-pricing-sec">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge px-3 py-2 rounded-pill text-uppercase pm-srv-hero-badge mb-2">
                    <i class="bi bi-box2-fill me-1"></i> Packing Plans
                </span>
                <h2 class="display-6 fw-bold text-dark mb-2">Packaging Packages &amp; Supplies</h2>
                <p class="text-muted mx-auto mb-0 pm-srv-section-sub-650">
                    Choose from essential packing supplies, complete home wrapping, or white-glove VIP crating.
                </p>
            </div>

            <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-4">
                <div class="col">
                    <div class="card h-100 border rounded-4 shadow-sm p-4 bg-white text-center pm-tier-card">
                        <span class="badge bg-light text-dark fw-bold mb-3 px-3 py-1 rounded-pill mx-auto">BASIC ESSENTIAL</span>
                        <h3 class="h5 fw-bold text-dark mb-2">Standard Cartons</h3>
                        <p class="text-muted small mb-3">Suitable for clothes, books, toys, and non-fragile household items.</p>
                        <hr class="my-3">
                        <ul class="list-unstyled text-start small text-muted mb-4 d-flex flex-column gap-2">
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> 5-Ply Heavy Kraft Boxes</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> 50mm Sealing Adhesive Tape</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Room Marker Tagging</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Standard Packing Labor</li>
                        </ul>
                        <button type="button" class="btn btn-outline-danger w-100 rounded-pill fw-bold" data-bs-toggle="modal" data-bs-target="#qteModal">
                            Choose Standard
                        </button>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-2 border-danger rounded-4 shadow-sm p-4 bg-white text-center pm-tier-card position-relative">
                        <span class="badge bg-danger text-white fw-bold mb-3 px-3 py-1 rounded-pill mx-auto">MOST POPULAR</span>
                        <h3 class="h5 fw-bold text-dark mb-2">5-Layer Bubble Pack</h3>
                        <p class="text-muted small mb-3">Full apartment packaging with bubble wrap and furniture stretch film.</p>
                        <hr class="my-3">
                        <ul class="list-unstyled text-start small text-muted mb-4 d-flex flex-column gap-2">
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Air Bubble Cushioning Rolls</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Sofa &amp; Mattress Stretch Film</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Foam Corner Guards For Tables</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Master Manifest Logging</li>
                        </ul>
                        <button type="button" class="btn pm-srv-btn-primary w-100 rounded-pill fw-bold text-white" data-bs-toggle="modal" data-bs-target="#qteModal">
                            Choose 5-Layer
                        </button>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border rounded-4 shadow-sm p-4 bg-white text-center pm-tier-card">
                        <span class="badge bg-light text-dark fw-bold mb-3 px-3 py-1 rounded-pill mx-auto">FRAGILE SPECIAL</span>
                        <h3 class="h5 fw-bold text-dark mb-2">Glassware &amp; Decor</h3>
                        <p class="text-muted small mb-3">Specialized focus on delicate crockery, porcelain, glassware and TV.</p>
                        <hr class="my-3">
                        <ul class="list-unstyled text-start small text-muted mb-4 d-flex flex-column gap-2">
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Cell-Divided Crockery Boxes</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Double Bubble Layer Wrapping</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Custom Wooden Frame for TV</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Fragile High-Priority Transit</li>
                        </ul>
                        <button type="button" class="btn btn-outline-danger w-100 rounded-pill fw-bold" data-bs-toggle="modal" data-bs-target="#qteModal">
                            Choose Fragile Pack
                        </button>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border rounded-4 shadow-sm p-4 bg-white text-center pm-tier-card">
                        <span class="badge bg-light text-dark fw-bold mb-3 px-3 py-1 rounded-pill mx-auto">WHITE GLOVE</span>
                        <h3 class="h5 fw-bold text-dark mb-2">Luxury Crates</h3>
                        <p class="text-muted small mb-3">Bespoke wooden crating for art, marble, antiques, and high-value villas.</p>
                        <hr class="my-3">
                        <ul class="list-unstyled text-start small text-muted mb-4 d-flex flex-column gap-2">
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Custom Wooden Caging On-Site</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Wardrobe Boxes with Hanger Rails</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Antistatic Electronics Foaming</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Complete Destination Unpacking</li>
                        </ul>
                        <button type="button" class="btn btn-outline-danger w-100 rounded-pill fw-bold" data-bs-toggle="modal" data-bs-target="#qteModal">
                            Choose White Glove
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. EXPLORE OTHER RELOCATION SERVICES (HORIZONTAL FULL-WIDTH ROW) -->
    <section class="py-5 bg-white border-top border-bottom pm-srv-other-sec">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap gap-2">
                <div>
                    <span class="badge px-3 py-2 rounded-pill text-uppercase pm-srv-hero-badge mb-1">
                        <i class="bi bi-grid-fill me-1"></i> More Solutions
                    </span>
                    <h2 class="h3 fw-bold text-dark mb-0">Explore Our Other Relocation Services</h2>
                </div>
                <a href="<?= site_url('services') ?>" class="btn btn-outline-dark rounded-pill px-4 py-2 fw-semibold small">
                    View All Services <i class="bi bi-arrow-right ms-1"></i>
                </a>
            </div>

            <!-- Other Services Cards Grid -->
            <div class="row g-3 row-cols-1 row-cols-sm-2 row-cols-lg-5">
                <?php foreach ($otherServices as $os): ?>
                    <div class="col col-6">
                        <a href="<?= site_url('services/' . $os['slug']) ?>" class="card h-100 p-3 rounded-4 border bg-light text-decoration-none pm-other-srv-card hover-lift text-center">
                            <div class="pm-other-icon mx-auto mb-2">
                                <i class="bi <?= esc($os['icon'] ?? 'bi-box-seam') ?>"></i>
                            </div>
                            <h3 class="h6 fw-bold text-dark mb-1"><?= esc($os['title']) ?></h3>
                            <span class="small pm-other-srv-link fw-bold">Learn More &rarr;</span>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 7. FREQUENTLY ASKED QUESTIONS (CENTERED ACCORDION) -->
    <section class="py-5 pm-srv-faq-sec">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge px-3 py-2 rounded-pill text-uppercase pm-srv-hero-badge mb-2">
                    <i class="bi bi-question-circle-fill me-1"></i> FAQ Guide
                </span>
                <h2 class="display-6 fw-bold text-dark mb-2">Packing Service FAQs</h2>
                <p class="text-muted mx-auto mb-0 pm-srv-section-sub-600">
                    Common questions regarding packaging materials, wardrobe packing, and labor.
                </p>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-9">
                    <div class="accordion accordion-flush bg-white rounded-4 shadow-sm border p-3 p-md-4" id="packingFaqAccordion">
                        <div class="accordion-item border-bottom">
                            <h3 class="accordion-header" id="faqPackHead1">
                                <button class="accordion-button collapsed fw-bold text-dark fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#faqPackCollapse1">
                                    Do I need to arrange cartons or packing material myself?
                                </button>
                            </h3>
                            <div id="faqPackCollapse1" class="accordion-collapse collapse show" data-bs-parent="#packingFaqAccordion">
                                <div class="accordion-body text-muted small">
                                    No, you do not need to arrange anything! Our certified crew arrives with brand-new 5-ply cartons, bubble wrap rolls, stretch film, sealing tape, and wardrobe boxes directly to your location.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-bottom">
                            <h3 class="accordion-header" id="faqPackHead2">
                                <button class="accordion-button collapsed fw-bold text-dark fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#faqPackCollapse2">
                                    Can I hire your team only for packing without transportation?
                                </button>
                            </h3>
                            <div id="faqPackCollapse2" class="accordion-collapse collapse" data-bs-parent="#packingFaqAccordion">
                                <div class="accordion-body text-muted small">
                                    Yes! We offer standalone packaging services. If you already have your own vehicle arranged or require export packaging for international cargo, our experienced team will bring all materials and pack your items safely.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-bottom">
                            <h3 class="accordion-header" id="faqPackHead3">
                                <button class="accordion-button collapsed fw-bold text-dark fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#faqPackCollapse3">
                                    How are clothes, suits, and dresses packed?
                                </button>
                            </h3>
                            <div id="faqPackCollapse3" class="accordion-collapse collapse" data-bs-parent="#packingFaqAccordion">
                                <div class="accordion-body text-muted small">
                                    We bring specialized upright wardrobe boxes featuring metal hanging bars. Suits, blazers, dresses, and sarees are transferred directly on hangers, keeping them 100% wrinkle-free throughout transit.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-bottom">
                            <h3 class="accordion-header" id="faqPackHead4">
                                <button class="accordion-button collapsed fw-bold text-dark fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#faqPackCollapse4">
                                    Are your corrugated boxes new or recycled second-hand boxes?
                                </button>
                            </h3>
                            <div id="faqPackCollapse4" class="accordion-collapse collapse" data-bs-parent="#packingFaqAccordion">
                                <div class="accordion-body text-muted small">
                                    We strictly use brand-new, fresh virgin-kraft 5-layer corrugated carton boxes. We never use recycled, weakened, or unhygienic grocery boxes.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqPackHead5">
                                <button class="accordion-button collapsed fw-bold text-dark fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#faqPackCollapse5">
                                    How do you protect mattresses and upholstered sofas?
                                </button>
                            </h3>
                            <div id="faqPackCollapse5" class="accordion-collapse collapse" data-bs-parent="#packingFaqAccordion">
                                <div class="accordion-body text-muted small">
                                    Mattresses are packed inside heavy-gauge waterproof polythene covers, while sofas and chairs are cocooned in multi-ply air bubble wrap followed by thick industrial stretch film.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
