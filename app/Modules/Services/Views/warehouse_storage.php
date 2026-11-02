<?php
$allServicesList = $allServices ?? \Modules\Services\Controllers\Services::getServicesList();
// Filter out current service for the "Other Services" section
$otherServices = array_filter($allServicesList, fn($s) => ($s['slug'] ?? '') !== 'warehouse-storage');
?>

<!-- Dynamic Breadcrumb -->
<?= view('Modules\About\Views\dynamic_breadcrumb', [
    'title'       => 'Warehouse & Storage Facility',
    'subtitle'    => '24x7 CCTV monitored, moisture-controlled short and long-term storage facilities with flexible monthly billing plans.',
    'breadcrumbs' => [
        ['title' => 'Home', 'url' => site_url('/')],
        ['title' => 'Services', 'url' => site_url('services')],
        ['title' => 'Warehouse Storage'],
    ],
]) ?>

<div class="pm-srv-page-wrapper">

    <!-- 1. HERO SECTION -->
    <section class="pm-srv-hero-sec py-5">
        <div class="container">
            <div class="row align-items-center">
                
                <div class="col-12">
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill pm-srv-pill-badge mb-3">
                        <i class="bi bi-lock-fill text-danger"></i>
                        <span class="small fw-bold">24/7 CCTV Monitored Storage Compound</span>
                    </div>

                    <h1 class="display-5 fw-bold text-dark mb-3 pm-srv-hero-title">
                        Secure Warehousing &amp; <span class="pm-text-red">Goods Storage</span>
                    </h1>

                    <p class="lead text-muted mb-4 pm-srv-hero-desc">
                        Whether you are renovating your home, traveling abroad on sabbatical, or looking for business inventory buffer space, <strong><?= $company3 ?></strong> offers cutting-edge, climate-controlled storage solutions. Our private storage bays are pest-treated, guarded 24/7 with CCTV coverage, and equipped with elevated wooden pallets to keep your belongings pristine.
                    </p>

                    <!-- Key Advantage Chips -->
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        <span class="pm-hero-chip"><i class="bi bi-camera-video-fill text-danger me-1"></i> 24/7 CCTV Surveillance</span>
                        <span class="pm-hero-chip"><i class="bi bi-shield-check text-success me-1"></i> Moisture &amp; Pest Treated</span>
                        <span class="pm-hero-chip"><i class="bi bi-upc-scan text-primary me-1"></i> Barcode Item Inventory</span>
                        <span class="pm-hero-chip"><i class="bi bi-calendar3 text-warning me-1"></i> Flexible Monthly Plans</span>
                    </div>

                    <!-- Direct Action Buttons in One Row -->
                    <div class="d-flex flex-wrap align-items-center gap-2 pt-2">
                        <button type="button" class="btn pm-srv-btn-primary rounded-pill px-3 py-2 fw-bold text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">
                            <i class="bi bi-calculator-fill me-1"></i> Get Storage Quote
                        </button>
                        <a <?= $whatsapphtml ?>?text=<?= urlencode('Hello Sanvi Packers, I need storage space rental details.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-success rounded-pill px-3 py-2 fw-bold d-inline-flex align-items-center gap-2 text-nowrap">
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
        </div>
    </section>

    <!-- 2. TRUST STATS STRIP -->
    <section class="pm-srv-stats-sec py-4 bg-white border-top border-bottom">
        <div class="container">
            <div class="row g-3 text-center align-items-center">
                <div class="col-6 col-lg-3">
                    <div class="pm-stat-box p-3 rounded-4">
                        <div class="h2 fw-bold text-dark mb-0">15,000+</div>
                        <div class="small text-muted fw-semibold">Sq. Ft. Storage Capacity</div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="pm-stat-box p-3 rounded-4">
                        <div class="h2 fw-bold text-danger mb-0">24/7</div>
                        <div class="small text-muted fw-semibold">CCTV Armed Security</div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="pm-stat-box p-3 rounded-4">
                        <div class="h2 fw-bold text-dark mb-0">100%</div>
                        <div class="small text-muted fw-semibold">Pest &amp; Dampness Protected</div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="pm-stat-box p-3 rounded-4">
                        <div class="h2 fw-bold text-danger mb-0">â‚¹0</div>
                        <div class="small text-muted fw-semibold">Hidden Recall Charges</div>
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
                    <i class="bi bi-shield-lock me-1"></i> Facility Standards
                </span>
                <h2 class="display-6 fw-bold text-dark mb-2">
                    Warehousing <span class="pm-text-red">Safeguards &amp; Features</span>
                </h2>
                <p class="text-muted mx-auto mb-0 pm-srv-section-sub">
                    Modern logistics facilities engineered for long-term preservation of household furniture, electronic appliances, and business inventory.
                </p>
            </div>

            <!-- 6 Feature Cards in 3 Columns (Icon & Title in One Row) -->
            <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
                <div class="col">
                    <div class="card h-100 border-0 rounded-4 shadow-sm p-4 bg-white pm-srv-card hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="pm-srv-card-icon flex-shrink-0">
                                <i class="bi bi-camera-video-fill"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-0">24/7 CCTV &amp; Guarded Access</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            High-definition night-vision cameras monitoring all entry gates and storage alleys with round-the-clock physical security guards.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 rounded-4 shadow-sm p-4 bg-white pm-srv-card hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="pm-srv-card-icon flex-shrink-0">
                                <i class="bi bi-bug-fill"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-0">Bi-Weekly Pest &amp; Termite Control</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Strict chemical-safe fumigation and pest control procedures carried out bi-weekly to safeguard wooden furniture and fabrics from insects.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 rounded-4 shadow-sm p-4 bg-white pm-srv-card hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="pm-srv-card-icon flex-shrink-0">
                                <i class="bi bi-layers-fill"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-0">Elevated Wooden Pallet Stacking</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            All cartons and furniture units are stored on elevated heavy-duty wooden pallets, preventing ground contact, dampness, and moisture absorption.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 rounded-4 shadow-sm p-4 bg-white pm-srv-card hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="pm-srv-card-icon flex-shrink-0">
                                <i class="bi bi-upc-scan"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-0">Barcode Tagging &amp; Digital Log</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Each box and individual asset is tagged with a unique barcode linked to a digital itemized inventory list shared with the owner.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 rounded-4 shadow-sm p-4 bg-white pm-srv-card hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="pm-srv-card-icon flex-shrink-0">
                                <i class="bi bi-water"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-0">Multi-Ply Shrink Wrap Sealing</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Mattresses, sofas, and delicate polished furniture are wrapped in multi-layer dust-resistant industrial film for pristine preservation.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 rounded-4 shadow-sm p-4 bg-white pm-srv-card hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="pm-srv-card-icon flex-shrink-0">
                                <i class="bi bi-truck-flatbed"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-0">Scheduled Doorstep Return</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Whenever you are ready for move-in, a single phone call or message initiates scheduled doorstep delivery and room assembly.
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
                    <i class="bi bi-arrow-repeat me-1"></i> Storage Journey
                </span>
                <h2 class="display-6 fw-bold text-dark mb-2">How Storage Works With Us</h2>
                <p class="text-muted mx-auto mb-0 pm-srv-section-sub-650">
                    Effortless doorstep collection, safe warehousing, and timely delivery whenever you need.
                </p>
            </div>

            <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-4">
                <div class="col">
                    <div class="p-4 rounded-4 h-100 bg-light border pm-process-step-box position-relative text-start">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="pm-step-num-badge flex-shrink-0">1</div>
                            <h3 class="h6 fw-bold text-dark mb-0">Doorstep Pickup</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Our team packs your goods professionally and collects them directly from your current residence.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="p-4 rounded-4 h-100 bg-light border pm-process-step-box position-relative text-start">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="pm-step-num-badge flex-shrink-0">2</div>
                            <h3 class="h6 fw-bold text-dark mb-0">Barcode Inventory</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Unique barcode assigned to every item and digital inventory manifest generated.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="p-4 rounded-4 h-100 bg-light border pm-process-step-box position-relative text-start">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="pm-step-num-badge flex-shrink-0">3</div>
                            <h3 class="h6 fw-bold text-dark mb-0">Pallet Bay Storing</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Safely staged on elevated pallets in pest-controlled bays under 24/7 CCTV surveillance.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="p-4 rounded-4 h-100 bg-light border pm-process-step-box position-relative text-start">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="pm-step-num-badge flex-shrink-0">4</div>
                            <h3 class="h6 fw-bold text-dark mb-0">Doorstep Return</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Recalled upon your call and delivered safely to your new address with furniture reassembly.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. STORAGE PACKAGES (4 TIERS) -->
    <section class="py-5 pm-srv-pricing-sec">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge px-3 py-2 rounded-pill text-uppercase pm-srv-hero-badge mb-2">
                    <i class="bi bi-box2-heart me-1"></i> Rental Plans
                </span>
                <h2 class="display-6 fw-bold text-dark mb-2">Flexible Monthly Storage Packages</h2>
                <p class="text-muted mx-auto mb-0 pm-srv-section-sub-650">
                    Cost-effective warehousing space customized for luggage boxes, apartments, or corporate stock.
                </p>
            </div>

            <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-4">
                <div class="col">
                    <div class="card h-100 border rounded-4 shadow-sm p-4 bg-white text-center pm-tier-card">
                        <span class="badge bg-light text-dark fw-bold mb-3 px-3 py-1 rounded-pill mx-auto">STUDENTS &amp; TRAVEL</span>
                        <h3 class="h5 fw-bold text-dark mb-2">Box &amp; Luggage</h3>
                        <p class="text-muted small mb-3">5 - 15 Cartons, suitcases &amp; small study room furniture.</p>
                        <hr class="my-3">
                        <ul class="list-unstyled text-start small text-muted mb-4 d-flex flex-column gap-2">
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Dedicated Pallet Bay</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> 24/7 CCTV Security</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Flexible Monthly Plans</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Fast Partial Retrieval</li>
                        </ul>
                        <button type="button" class="btn btn-outline-danger w-100 rounded-pill fw-bold" data-bs-toggle="modal" data-bs-target="#qteModal">
                            Rent Box Bay
                        </button>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-2 border-danger rounded-4 shadow-sm p-4 bg-white text-center pm-tier-card position-relative">
                        <span class="badge bg-danger text-white fw-bold mb-3 px-3 py-1 rounded-pill mx-auto">MOST POPULAR</span>
                        <h3 class="h5 fw-bold text-dark mb-2">1 BHK Home Storage</h3>
                        <p class="text-muted small mb-3">Bed, fridge, washing machine, TV, sofa &amp; kitchen boxes.</p>
                        <hr class="my-3">
                        <ul class="list-unstyled text-start small text-muted mb-4 d-flex flex-column gap-2">
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Full Private Enclosure Bay</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Multi-Layer Shrink Film Packing</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Pest &amp; Termite Indemnity</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Doorstep Pickup Included</li>
                        </ul>
                        <button type="button" class="btn pm-srv-btn-primary w-100 rounded-pill fw-bold text-white" data-bs-toggle="modal" data-bs-target="#qteModal">
                            Rent 1 BHK Bay
                        </button>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border rounded-4 shadow-sm p-4 bg-white text-center pm-tier-card">
                        <span class="badge bg-light text-dark fw-bold mb-3 px-3 py-1 rounded-pill mx-auto">2-3 BHK FAMILY</span>
                        <h3 class="h5 fw-bold text-dark mb-2">2-3 BHK Entire House</h3>
                        <p class="text-muted small mb-3">Complete family home furnishings, multiple beds, almirahs &amp; electronics.</p>
                        <hr class="my-3">
                        <ul class="list-unstyled text-start small text-muted mb-4 d-flex flex-column gap-2">
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Large Elevated Compound Bay</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Full Furniture Dismantling</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Barcode Item Inventory Report</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Complete Transit &amp; Fire Cover</li>
                        </ul>
                        <button type="button" class="btn btn-outline-danger w-100 rounded-pill fw-bold" data-bs-toggle="modal" data-bs-target="#qteModal">
                            Rent 2-3 BHK Bay
                        </button>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border rounded-4 shadow-sm p-4 bg-white text-center pm-tier-card">
                        <span class="badge bg-light text-dark fw-bold mb-3 px-3 py-1 rounded-pill mx-auto">COMMERCIAL</span>
                        <h3 class="h5 fw-bold text-dark mb-2">Business &amp; Stock</h3>
                        <p class="text-muted small mb-3">Retail surplus inventory, equipment, and archive document storage.</p>
                        <hr class="my-3">
                        <ul class="list-unstyled text-start small text-muted mb-4 d-flex flex-column gap-2">
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Forklift-Accessible Pallet Racks</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> SKU-Level Digital Reporting</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> GST Billing &amp; Monthly Invoicing</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Flexible Dispatch Upon Request</li>
                        </ul>
                        <button type="button" class="btn btn-outline-danger w-100 rounded-pill fw-bold" data-bs-toggle="modal" data-bs-target="#qteModal">
                            Rent Commercial Bay
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
                <h2 class="display-6 fw-bold text-dark mb-2">Storage FAQs</h2>
                <p class="text-muted mx-auto mb-0 pm-srv-section-sub-600">
                    Common queries regarding minimum lease periods, security, and partial retrieval.
                </p>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-9">
                    <div class="accordion accordion-flush bg-white rounded-4 shadow-sm border p-3 p-md-4" id="storageFaqAccordion">
                        <div class="accordion-item border-bottom">
                            <h3 class="accordion-header" id="faqStoreHead1">
                                <button class="accordion-button collapsed fw-bold text-dark fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#faqStoreCollapse1">
                                    What is the minimum period I can rent storage space?
                                </button>
                            </h3>
                            <div id="faqStoreCollapse1" class="accordion-collapse collapse show" data-bs-parent="#storageFaqAccordion">
                                <div class="accordion-body text-muted small">
                                    Our flexible storage contracts begin from as short as 15 days, with convenient monthly renewal cycles. We offer substantial discount percentages for quarterly and yearly advance plans.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-bottom">
                            <h3 class="accordion-header" id="faqStoreHead2">
                                <button class="accordion-button collapsed fw-bold text-dark fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#faqStoreCollapse2">
                                    Can I retrieve a few cartons before the entire contract ends?
                                </button>
                            </h3>
                            <div id="faqStoreCollapse2" class="accordion-collapse collapse" data-bs-parent="#storageFaqAccordion">
                                <div class="accordion-body text-muted small">
                                    Yes! Because every box is cataloged with an individual barcode on your digital inventory sheet, you can request partial retrieval with a 24 to 48-hour prior notice.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-bottom">
                            <h3 class="accordion-header" id="faqStoreHead3">
                                <button class="accordion-button collapsed fw-bold text-dark fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#faqStoreCollapse3">
                                    How are my belongings safeguarded against pests, dampness, and moisture?
                                </button>
                            </h3>
                            <div id="faqStoreCollapse3" class="accordion-collapse collapse" data-bs-parent="#storageFaqAccordion">
                                <div class="accordion-body text-muted small">
                                    All items are sealed in multi-ply moisture-proof stretch film, placed on elevated wooden pallets preventing floor dampness, and our warehousing facility undergoes bi-weekly scheduled pest and termite treatments.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-bottom">
                            <h3 class="accordion-header" id="faqStoreHead4">
                                <button class="accordion-button collapsed fw-bold text-dark fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#faqStoreCollapse4">
                                    Is transit and fire insurance provided during the storage period?
                                </button>
                            </h3>
                            <div id="faqStoreCollapse4" class="accordion-collapse collapse" data-bs-parent="#storageFaqAccordion">
                                <div class="accordion-body text-muted small">
                                    Yes, comprehensive warehouse storage insurance covering fire, flood, burglary, and natural calamities is included for complete peace of mind.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqStoreHead5">
                                <button class="accordion-button collapsed fw-bold text-dark fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#faqStoreCollapse5">
                                    Do I need to arrange transportation to bring goods to the warehouse?
                                </button>
                            </h3>
                            <div id="faqStoreCollapse5" class="accordion-collapse collapse" data-bs-parent="#storageFaqAccordion">
                                <div class="accordion-body text-muted small">
                                    No, we handle the complete process! Our team arrives at your current home or office, packs your belongings, transports them to the warehouse, and delivers them to your future home whenever you are ready.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
